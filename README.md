# InfoBook
To keep clients information.

## Installation
Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/5.4/installation#installation)

Clone the repository
```
git clone https://github.com/resham57/InfoBook.git
```

Switch to the repo folder
```
cd InfoBook
```

Install all the dependencies using composer
```
composer install
```

Copy the example env file and make the required configuration changes in the .env file
```
cp .env.example .env
```

Generate a new application key
```
php artisan key:generate
```

Install all the npm packages
```
npm install
```

### Compiles and hot-reloads for development
```
npm run serve
```

### Compiles and minifies for production
```
npm run build
```

Start the local development server
```
php artisan serve
```

You can now access the server at http://localhost:8000