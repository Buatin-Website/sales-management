# Sales Management

## Requirement

- PHP 8.1

## Instalasi

-   Clone project

```shell
git clone https://github.com/Buatin-Website/sales-management.git
```

- Pull branch `develop`

```shell
git checkout -t origin/develop
```

- Copy file `.env.example` to `.env`

```shell
cp .env.example .env
```

- Edit data credentials di file `.env`

- Install composer library

```shell
composer install
```

- Generate APP_KEY

```shell
php artisan key:generate
```

- Jalankan migration

```shell
php artisan migrate --seed
```

- Commitlint

Commitlint adalah sebuah tool yang berguna untuk mengecek apakah semua commit di repo git memiliki format yang benar.
Langkah-langkah untuk menggunakan commitlint adalah:

1. Install commitlint: ```npm install```
2. Jalankan command ```npx husky install```

Setelah instalasi berhasil, maka setiap melakukan commit, commitlint akan melakukan pengecekan format commit.
Referensi: 
1. [https://www.conventionalcommits.org/en/v1.0.0/](https://www.conventionalcommits.org/en/v1.0.0/)
2. [https://github.com/angular/angular/blob/22b96b9/CONTRIBUTING.md#type](https://github.com/angular/angular/blob/22b96b9/CONTRIBUTING.md#type)

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.
