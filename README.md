<p align="center">TestApp</p>

## Installation
<ul>
<ol>git clone https://github.com/hectordolo/TestApp.git 'PROJECT_DIRECTORY'</ol>

cd 'PROJECT_DIRECTORY'
composer install
php artisan key:generate
copy .env.example to .env
edit .env
set DB_DATABASE="YOUR DATABASE NAME"
set DB_USERNAME="YOUR DATABASE USERNAME"
set DB_PASSWORD="YOUR DATABASE PASSWORD"

set COREAPI_CLIENT_ID="YOUR CLIENT ID"
set COREAPI_CLIENT_SECRET="YOUR CLIENT SECRET"
set COREAPI_CLIENT_URL="YOUR CORE API URL"

php artisan migrate
php artisan config:clear
php artisan serve
You can now register a new user to use the application.

</ul>
## Files to Check



## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
