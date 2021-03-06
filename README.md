<p align="center">TestApp</p>

## Installation
<ul>
    <li>git clone https://github.com/hectordolo/TestApp.git 'PROJECT_DIRECTORY'</li>
    <li>cd 'PROJECT_DIRECTORY'</li>
    <li>composer install</li>
    <li>php artisan key:generate</li>
    <li>copy .env.example to .env</li>
    <li>edit .env
        <ul>
            <li>set DB_DATABASE="YOUR DATABASE NAME"</li>
            <li>set DB_USERNAME="YOUR DATABASE USERNAME"</li>
            <li>set DB_PASSWORD="YOUR DATABASE PASSWORD"</li>
            <li>set COREAPI_CLIENT_ID="YOUR CLIENT ID"</li>
            <li>set COREAPI_CLIENT_SECRET="YOUR CLIENT SECRET"</li>
            <li>set COREAPI_CLIENT_URL="YOUR CORE API URL"</li>
        </ul>
    </li>
    <li>php artisan migrate</li>
    <li>php artisan config:clear</li>
    <li>php artisan serve</li>
</ul>

You can now register a new user to use the application.


## Files to Check
<ul>
    <li>LoginController->authenticated()
        <ul>
            <li>This method will get a token in the background to the coreapi when a user logs in the system and store it in the session</li>
        </ul>
    </li>
    <li>ClientController->index()
        <ul>
            <li>This method will get the token stored in the session to use it and create request to the coreapi</li>
        </ul>
    </li>
</ul>


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
