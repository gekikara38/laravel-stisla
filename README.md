# Stisla Laravel
Stisla is the most-awesome admin panel I've seen so far. As I love this template very much, I have implemented Stisla in a fresh Laravel 8.36.1 app. Simply clone this repo and start building your next Laravel project on top of the awesome Stisla. If you want to make it more dynamic, you can update the pages or add your own.

## Installation
Clone the repo:
```shell
git clone https://github.com/gekikara38/laravel-stisla
```

go to directory file:
```shell
cd laravel-stisla
```

Install composer packages:
```shell
composer install
```

Copy and rename .env.example to .env:
```shell
cp .env.example .env
```

Update the environmental variables and set an app key:
```shell
php artisan key:generate
```

migrate database
```shell
php artisan migrate
```

Add Akun in Database
```shell
php artisan db:seed
```

Run the project
```shell
php artisan serve
```

### Credentials:
* Admin Account: 
- Email: admin@test.com    Password: admin1234
* User Account:
- Email: joko@test.com     Password: joko1234

### Credits:
*   [Laravel](https://github.com/laravel/laravel)
*   [Stisla Bootstrap 4 Admin Panel Template](https://github.com/stisla/stisla)

### Contribution:
Contribution is welcomed and highly appreciated. Fork the repo, make your updates and initiate a pull request. I'll approve all pull requests as long as they are constructive and follow the Laravel standard practices.
