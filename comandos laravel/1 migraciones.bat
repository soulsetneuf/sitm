call ruta
cd %ruta%
set /p nombre=Nombre:
php artisan make:migration create_%nombre%_table
pause