@echo off
:loop
cd E:\bxtrade1 && php artisan updatekline
timeout /t 1 >nul
goto loop