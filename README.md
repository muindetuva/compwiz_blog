## Compwiz Blog

### Tech Stack and Tools

- Laravel 9
- Tailwind CSS
- Filament PHP Package

### Setting up the Website

- Clone the repo

```
git clone git@github.com:muindetuva/compwiz_blog.git
```

- Install all the php packages

```
composer install
```

- Install all the javascript packages

```
npm install
```

- Create an .env file for laravel.(Make sure to use copy it as show below)

```
cp -a .env.example .env
```

- Generate a key

```
php artisan key:generate
```

- Set up your Database and connect it to the app.

```
You're free to use either mysql or sqlite. 
Just make sure you have the required dependencies for your choice.
```

- Run the migration and seed

```
php artisan migrate --seed
```

- Link storage

```
php artisan storage:link
```

- Serve the application

```
php artisan serve
```

- On another terminal. Start the tailwind build process

```
npm run dev
```

- On your browser visit https://127.0.0.1:8000 to view the website
