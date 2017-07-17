call ruta
cd %ruta%
set /p nombre=Nombre:
php artisan make:request %nombre%CreateRequest
php artisan make:request %nombre%UpdateRequest
pause