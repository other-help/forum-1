# Utilisation


Clone repo

	git clone https://github.com/other-help/forum-1.git
Installer les dependances de composer

	composer install
ou
    composer install --ignore-platform-reqs
copie .env.example dans .env et configure les identifiants de ta base de donnée

application key

	php artisan key:generate        

Migration et seed

`php artisan migrate --seed`
