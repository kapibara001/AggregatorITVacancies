@echo off
start "" php artisan serve
start "" npm run dev 
echo http://127.0.0.1:8000
exit /b