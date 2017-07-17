call ruta
cd %ruta%
set /p nombre=Nombre:
php artisan make:migration add_column_%nombre%_table
pause