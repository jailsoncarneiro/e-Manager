set -e

echo "Fazendo Deploy da aplicação"

# Entrando em modo de Manutenção

(php artisan down --message "O aplicativo está em sendo atualizado. Por favor tente novamente em alguns instantes." ) || true

    # Atualizando Código-Fonte
    git pull origin main

# Saindo do Modo de Manutenção

(php artisan up)

echo "Deploy da aplicação finalizada!"

