<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# laravel-sanctum-rest

This is an example of a REST API using auth tokens with Laravel Sanctum

## Usage

- Create a _database.sqlite_ file in the _database_ directory

- Add the database info in the .env file:

  For SQLite, add
  ```
  DB_CONNECTION=sqlite
  DB_HOST=127.0.0.1
  DB_PORT=3306
  ```

- Run the web server on port 8000:

  ```
  php artisan serve
  ```

## Routes

### Public

    ```
    GET   /api/products
    @desc: Get all the products

    GET   /api/products/:id
    @desc: Get a sigle product

    POST   /api/login
    @body: email, password
    @desc: User login

    POST   /api/register
    @body: name, email, password, password_confirmation
    @desc: User registration
    ```

### Protected
  ``` 
  POST   /api/products
  @body: name, slug, description, price
  @desc: Add product

  PUT   /api/products/:id
  @body: ?name, ?slug, ?description, ?price
  @desc: Update a product

  DELETE  /api/products/:id
  @desc: Delete a product

  POST    /api/logout
  @desc: User logout
  ```


