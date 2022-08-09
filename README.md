# Sprint1

## 1. Setup Project
- Clone repository

```bash
git clone https://github.com/yusril86/DOT-test-backend.git
```

- Install Composer
install composer pada project menggunakan perintah berikut :

```bash
composer install
```
- Setup .env .Copy isi .env.example kemudian buat file baru dengan nama .env dan paste 

- Pilih branch sprint1​ atau  sprint2

- Setup Database
Buat table database mysql sesuai dengan nama database yang berada di .env 

- Jalankan migration database dengan perintah : 

```bash
php artisan migrate
```


## 2. Cara Penggunaan
- Jalankan menggunakan perintah:
```bash
php artisan serve
```

- Fetch Api Provinsi menggunakan route : "http://127.0.0.1:8000/getProvince"

- Fetch Api Kota menggunakan route : "http://127.0.0.1:8000/getCities"

- Create data dari Api RajaOngkir ke database provinces :
```bash
php artisan create:province
```

- Create data dari Api RajaOngkir ke database cities:
```bash
php artisan create:city
```

- Membuat REST API : 
1. Tampilkan semua provinsi  : "http://127.0.0.1:8000/api/all/provinces"
2. Pencarian Provinsi : "http://127.0.0.1:8000/api/search/provinces?id={province_id}"
3. Tampilkan Semua kota : "http://127.0.0.1:8000/api/all/cities"
4. Pencarian kota :  "http://127.0.0.1:8000/api/search/cities?id={city_id}"
