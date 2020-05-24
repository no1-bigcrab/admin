1. Require the Package

composer require tcg/voyager


2. env:

DB_HOST=localhost
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret

APP_URL=http://localhost:8000


3. Run The Installer

php artisan voyager:install


If you prefer installing it with dummy run

4. php artisan voyager:install --with-dummy

5.  php artisan serve And, visit http://localhost:8000/admin.

6. pass
email: admin@admin.com
password: password

7. create email admin
php artisan voyager:admin your@email.com]

hoặc admin user

php artisan voyager:admin your@email.com --create
