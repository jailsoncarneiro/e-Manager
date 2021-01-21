<?php

namespace App\Actions\Fortify;

use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'nome' => ['required', 'string', 'max:255'],
            'usuario' => ['required', 'string', 'max:255', 'unique:cads'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:cads'],
            'password' => $this->passwordRules(),
        ])->validate();

        return DB::transaction(function () use ($input) {
            return tap(User::create([
                'nome' => $input['nome'],
                'usuario' => $input['usuario'],
                'email' => $input['email'],
                'password' => Hash::make($input['password']),
                'nivel' => 1,
            ]), function (User $user) {
                $this->createTeam($user);
            });
        });
    }

    /**
     * Create a personal team for the user.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    protected function createTeam(User $user)
    {
        $user->ownedTeams()->save(Team::forceCreate([
            'user_id' => $user->id,
            'name' => "Equipe do " .explode(' ', $user->nome, 2)[0],
            'personal_team' => true,
        ]));
    }
}
