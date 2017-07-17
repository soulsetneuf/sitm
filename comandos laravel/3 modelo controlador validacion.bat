call ruta
cd %ruta%
set /p nombre=Nombre:
php artisan make:model %nombre%
php artisan make:controller %nombre%Controller --resource
php artisan make:request %nombre%CreateRequest
php artisan make:request %nombre%UpdateRequest
cd "resources/views/"
md %nombre%
cd %nombre%
echo >form.blade.php
echo >register.blade.php
echo >index.blade.php
echo >edit.blade.php
echo >show.blade.php
pause