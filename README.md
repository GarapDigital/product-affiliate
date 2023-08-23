# Product Affiliate

## Installation
- ```bash
  git clone https://github.com/GarapDev/product-affiliate.git
  ```
- ```bash
  - Create your Database Connection First,
  - Then Fill these Credentials According to the Newly Created Connection and Your Local Environment.
  ```
- ```bash
  cp .env.example .env
  ```
- ```php
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=laravel
  DB_USERNAME=root
  DB_PASSWORD=
  ```
- ```bash
  composer install && php artisan key:generate
  ```
- ```bash
  php artisan migrate --seed
  ```


## System Requirements and Utilities
```bash
- Database            : MySQL
- PHP Version         : 8.1
- Framework           : Laravel
- Framework Version   : Laravel 9.5.2
- Composer Version    : Composer 2.5.0
- Third Party Api     : -
- Library             : -
```

## Credits
- [Garap Digital](https://github.com/GarapDigital)
- [Wirandra Alaya](https://github.com/dayCod)
