# SistemInformasiAkuntansi-Pencatatan-Penjualan-Toko
Untuk Tugas Sistem Informasi Akuntansi (SIA)
[![Stable Laravel](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)

## About
Sistem informasi untuk melakukan pencatatan penjualan toko sederhana yang dibuat dengan Laravel 7

### Screenshot
Screenshot Penggunaan Web
![Screenshot (355)](https://github.com/zakiaaminia/SistemInformasiAkuntansi-LaraPOS-Kasir/assets/152748628/9c948d16-dd4f-4a5d-809c-bd212e19fbee)

Screenshot Structure phpMyAdmin
![Screenshot (351)](https://github.com/zakiaaminia/SistemInformasiAkuntansi-Pencatatan-Penjualan-Toko/assets/152748628/e26f353b-b69c-4afd-b8d9-d596bc96c785)

Screenshot Designer phpMyAdmin
![Screenshot (354)](https://github.com/zakiaaminia/SistemInformasiAkuntansi-Pencatatan-Penjualan-Toko/assets/152748628/3ecaa95d-a191-41a0-af2b-4c9915a627e5)

### Flowchart
![sistem informasi pencatatan penjualan toko](https://github.com/zakiaaminia/SistemInformasiAkuntansi-Pencatatan-Penjualan-Toko/assets/152748628/7612db22-3dba-4035-8d0f-341d6a6012be)

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

## Penggunaan Login
Email: zakiaaminia1@gmail.com
Password: IniPasswordZakia123
