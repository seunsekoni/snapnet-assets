### Directions on how to setup this repository

- After successfully cloning this repo
- Change directory into the root of the folder of the cloned directory, i.e ``` cd foldername ```
- Rename the .env.example file to .env
- Create a database in mysql and update the .env details accordingly
- Set all your environment variables in the .env file
- Run ``` composer install ```
- Run ``` php artisan key:generate ```
- Run ``` php artisan config:cache ```
- Run ``` php artisan serve ```
- Run ``` php artisan migrate ```
- Run ``` php artisan db:seed ```
- Visit ``` http://localhost:8000 ``` on a browser