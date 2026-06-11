
Cara Instalasi
1. Clone project
git clone <repository-url>
cd dashboard-management

2. Install dependency
composer install
npm install
npm run dev

3. Setup environment
cp .env.example .env
php artisan key:generate

4. Buat database MySQL
dashboard_management

5. Import database
Import file dashboard_management.sql ke phpMyAdmin

6. Jalankan aplikasi
php artisan serve

Cara Login

1. Buka browser (http://localhost:8000/login)
2. Masukkan email dan password
3. Setelah login:
Admin akan diarahkan ke halaman /admin (Filament)
User akan diarahkan ke /dashboard

Akun Admin Default

Email    : admin@gmail.com
Password : admin12345
Role     : admin

