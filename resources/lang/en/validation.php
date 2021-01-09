<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute deve ser aceito.',
    'active_url' => ':attribute não é uma URL válida.',
    'after' => ':attribute deve ser uma data posterior a :date.',
    'after_or_equal' => ':attribute precisa ser uma data posterior ou igual a :date.',
    'alpha' => ':attribute só pode conter letras.',
    'alpha_dash' => ':attribute só pode conter letras, números, traços e sublinhados.',
    'alpha_num' => ':attribute precisa conter apenas letras e números.',
    'array' => ':attribute precisa ser um array.',
    'before' => ':attribute precisa ser uma data anterior a :date.',
    'before_or_equal' => ':attribute precisa ser uma data anterior a ou igual a :date.',
    'between' => [
        'numeric' => ':attribute precisa estar entre :min e :max.',
        'file' => ':attribute precisa estar entre :min e :max kilobytes.',
        'string' => ':attribute precisa ter entre :min e :max caracteres.',
        'array' => ':attribute precisa ter entre :min e :max ítens.',
    ],
    'boolean' => 'O campo :attribute precisa ser verdadeiro ou falso.',
    'confirmed' => 'A confirmação de :attribute está inválida.',
    'date' => ':attribute não é uma data válida.',
    'date_equals' => ':attribute precisa ser uma data igual a :date.',
    'date_format' => ':attribute não combina com o formato :format.',
    'different' => ':attribute e :other precisam ser diferentes.',
    'digits' => ':attribute precisa ter :digits dígitos.',
    'digits_between' => ':attribute precisa ter entre :min e :max dígitos.',
    'dimensions' => ':attribute tem uma imagem com dimensões inválidas.',
    'distinct' => 'O campo :attribute tem um valor duplicado.',
    'email' => ':attribute precisa ser um endereço de e-mail válido.',
    'ends_with' => ':attribute precisa terminar com um dos seugintes valores: :values.',
    'exists' => 'O valor selecionado para :attribute é inválido.',
    'file' => ':attribute precisa ser um arquivo.',
    'filled' => 'O campo :attribute precisa ter um valor.',
    'gt' => [
        'numeric' => ':attribute precisa ser maior que :value.',
        'file' => ':attribute precisa ser maior que :value kilobytes.',
        'string' => ':attribute precisa ser maior que :value caracteres.',
        'array' => ':attribute precisa ter mais que :value ítens.',
    ],
    'gte' => [
        'numeric' => ':attribute precisa ser maior ou igual a :value.',
        'file' => ':attribute precisa ser maior ou igual a :value kilobytes.',
        'string' => ':attribute precisa ser maior ou igual :value caracteres.',
        'array' => ':attribute precisa ter :value ítens o mais ítens ou mais.',
    ],
    'image' => ':attribute precisa ser uma imagem.',
    'in' => ':attribute selecionado é inválido.',
    'in_array' => 'O campo :attribute não existe em :other.',
    'integer' => ':attribute precisa ser um inteiro.',
    'ip' => ':attribute precisa ser um endereço de IP válido.',
    'ipv4' => ':attribute precisa ser um endereço de IPv4 válido.',
    'ipv6' => ':attribute precisa ser um endereço de IPv6 válido.',
    'json' => ':attribute precisa ser um JSON válido.',
    'lt' => [
        'numeric' => ':attribute precisa ser menor que :value.',
        'file' => ':attribute precisa ser menor que :value kilobytes.',
        'string' => ':attribute precisa ser menor que :value caracteres.',
        'array' => ':attribute precisa ter menos que :value ítens.',
    ],
    'lte' => [
        'numeric' => ':attribute precisa ser menor ou igual a :value.',
        'file' => ':attribute precisa ser menor ou igual a :value kilobytes.',
        'string' => ':attribute precisa ser menor ou igual a :value caracteres.',
        'array' => ':attribute não pode ter mais que :value ítens.',
    ],
    'max' => [
        'numeric' => ':attribute não pode ser maior que :max.',
        'file' => ':attribute não pode ser maior que :max kilobytes.',
        'string' => ':attribute não pode ser maior que :max caracteres.',
        'array' => ':attribute não pode ter mais que :max ítens.',
    ],
    'mimes' => ':attribute precisa ser um arquivo do tipo type: :values.',
    'mimetypes' => ':attribute precisa ser um arquivo do tipo type: :values.',
    'min' => [
        'numeric' => ':attribute precisa ser pelo menos :min.',
        'file' => ':attribute precisa ter pelo menos :min kilobytes.',
        'string' => ':attribute precisa ter pelo menos :min caracteres.',
        'array' => ':attribute precisa ter pelo menos :min ítens.',
    ],
    'not_in' => ':attribute selecionado é inválido.',
    'not_regex' => 'O formato de :attribute é inválido.',
    'numeric' => ':attribute precisa ser um número.',
    'password' => 'A senha está incorreta.',
    'present' => 'O campo :attribute precisa estar presente.',
    'regex' => 'O formato de :attribute é inválido.',
    'required' => 'O campo :attribute é obrigatório.',
    'required_if' => 'O campo :attribute é obrigatório quando :other é :value.',
    'required_unless' => 'O campo :attribute é obrigatório a não ser que :other seja um dos seguintes: :values.',
    'required_with' => 'O campo :attribute é obrigatório a quando :values está presente.',
    'required_with_all' => 'O campo :attribute é obrigatório a quando :values estão presentes.',
    'required_without' => 'O campo :attribute é obrigatório a quando :values não está presente.',
    'required_without_all' => 'O campo :attribute é obrigatório a quando nenhum de :values estão presentes.',
    'same' => ':attribute e :other precisam ser iguais.',
    'size' => [
        'numeric' => ':attribute precisa ser :size.',
        'file' => ':attribute precisa ter :size kilobytes.',
        'string' => ':attribute precisa ter :size caracteres.',
        'array' => ':attribute precisa conter :size ítens.',
    ],
    'starts_with' => ':attribute precisa começar com um dos seguintes valores: :values.',
    'string' => ':attribute precisa ser uma sequência de caracteres.',
    'timezone' => ':attribute precisa ser uma zona válida.',
    'unique' => ':attribute já está ocupado.',
    'uploaded' => ':attribute falhou ao enviar.',
    'url' => 'Formato de :attribute não é válido.',
    'uuid' => ':attribute precisa ser um UUID válido.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
