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
- Lakukan database migration and seeder :
```bash
php artisan migrate --seed
```

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

1. Swap Api Provinsi : 
- Dari database   : "http://127.0.0.1:8000/api/search/provinces?id={province_id}&from-api=false"
- Dari API RajaOngkir   : "http://127.0.0.1:8000/api/search/provinces?id={province_id}&from-api=true"
```bash
Example : 
http://127.0.0.1:8000/api/search/provinces?id=34&from-api=true
```

2. Swap Api Kota : 
- Dari database   : "http://127.0.0.1:8000/api/search/cities?id={city_id}&from-api=false"
- Dari API RajaOngkir   : "http://127.0.0.1:8000/api/search/cities?id={city_id}&from-api=true"
```bash
Example : 
http://127.0.0.1:8000/api/search/cities?id=123&from-api=true
```

3. Authorized Login API
- Login menggunakan user yang ada di database 
- API login : "http://127.0.0.1:8000/api/login?{email}&{password}"
- TOken type : Bearer
- Masuk ke Authorization POSTMAN pilih type Bearer lalu masukkan token nya



