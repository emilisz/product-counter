# Homework

Laravel CLI commands implementation

## Installation

* Download project

* Make new .env file and paste values from .env.example and update values with your own (update DB_DATABASE, DB_USERNAME, DB_PASSWORD)

* Install dependencies:

```bash
composer install
```

```bash
npm install
```

Make key if needed: 

```bash
php artisan key:generate
```

## Usage

```bash

# logs count offers in stock between prices
php artisan count_by:price_range {min_price} {max_price}

# logs count offers in stock by vendor_id
php artisan count_by:vendor_id {vendor_id}

# Tests
php artisan test

```
