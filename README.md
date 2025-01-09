

## The Guardian RSS Feed

This application exposes RSS feeds according to categories of [The Guardian](https://www.theguardian.com), a leading UK newspaper.


## Installation

1. Download the project (or clone using GIT)
2. Copy `.env.example` into `.env` and configure your database credentials
3. Go to the project's root directory using terminal window/command prompt
4. Run `composer install`
5. Set the application key by running `php artisan key:generate --ansi`
6. Run migrations `php artisan migrate`
7. Start local server by executing `php artisan serve`
8. Visit here [http://localhost:8000/movies](http://127.0.0.1:8000/movies) to test the application
