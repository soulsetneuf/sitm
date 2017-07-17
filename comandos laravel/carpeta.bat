call ruta
cd %ruta%
set /p nombre=Nombre:
cd "resources/views/"
md %nombre%
cd %nombre%
pause
echo >new.blade.php
echo >list.blade.php
echo >update.blade.php
echo >show.blade.php
echo >pdf.blade.php
pause