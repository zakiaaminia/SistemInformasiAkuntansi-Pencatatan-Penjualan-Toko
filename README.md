# SistemInformasiAkuntansi-Pencatatan-Penjualan-Toko
[![Stable Laravel](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)

## About
Untuk Tugas Sistem Informasi Akuntansi (SIA)
Sistem informasi untuk melakukan pencatatan penjualan toko sederhana yang dibuat dengan Laravel 7

### Screenshot
![Screenshot (355)](https://github.com/zakiaaminia/SistemInformasiAkuntansi-LaraPOS-Kasir/assets/152748628/9c948d16-dd4f-4a5d-809c-bd212e19fbee)

## Installasi
```
git clone https://github.com/zakiaaminia/SistemInformasiAkuntansi-Kasir-LaraPOS
cd SistemInformasiAkuntansi-LaraPOS-Kasir
composer install
```
Buat database baru, lalu rename `.env.example` menjadi `.env`, lalu edit:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```
Edit sesuai dengan informasi database yang sudah dibuat.
Setelah itu, lakukan migrasi.
```
php artisan migrate
```
Silakan lakukan register akun di `http://localhost:8000/register`. Secara bawaan, rolenya adalah 'user', untuk mengubahnya
menjadi admin, maka perlu edit manual di table users.

## Lisensi
[MIT license](https://opensource.org/licenses/MIT)
