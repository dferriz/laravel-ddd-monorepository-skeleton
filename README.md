# Laravel DDD + monorepository skeleton
Basic skeleton in Laravel ready to start working with DDD and hexagonal architechture.



### Installation

- Edit your machine hosts file `vim /etc/hosts` and add 2 new hosts pointing to your localhost ip `127.0.0.1` : `www.laravel.fuf.me` and `backoffice.netflix.ca.fuf.me`
- Copy the .env.example to .env `cp .env.example .env`
- Execute `docker-compose build && docker-compose up`
- Once built, get into the netflix_php service:
- `docker exec -it ddd_laravel_php /bin/sh` and execute:
- `composer install`
- `php artisan key:generate`
- `php artisan migrate --seed`
- Finally go to `http://backoffice.netflix.ca.fuf.me` or `http://www.laravel.fuf.me`

### Git flow

Install git flow if it is not available on your OS yet and setup with default values.


