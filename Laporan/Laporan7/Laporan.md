# Laporan Modul 7: Eloquent Relationship & Pagination

**Mata Kuliah:** Workshop Web Lanjut  
**Nama:** M. Iqbal Sayuti  
**NIM:** 2024573010057  
**Kelas:** TI-2C  

---

## Abstrak

Pada praktikum ini dipelajari bagaimana mengimplementasikan Eloquent Relationship untuk menghubungkan data antar tabel secara efisien serta penggunaan Pagination untuk membagi data ke dalam halaman-halaman yang lebih terstruktur. Melalui penerapan relasi seperti one-to-one, one-to-many, dan many-to-many, proses pengambilan data menjadi lebih mudah dan konsisten, sementara fitur paginasi dengan paginate() dan links() membantu menampilkan data berjumlah besar secara rapi dan meningkatkan pengalaman pengguna.

---

## 1. Dasar Teori

Dalam Laravel, Eloquent menyediakan cara yang efisien untuk mengelola hubungan antar tabel serta menampilkan data dalam bentuk halaman (pagination) agar lebih terstruktur dan mudah diakses.

1. Definisi Relasi = Eloquent menyediakan mekanisme untuk mendefinisikan hubungan antar model seperti one-to-one, one-to-many, many-to-many, dan polymorphic.
2. Fungsi Relasi di Model = Setiap relasi didefinisikan melalui fungsi khusus dalam model yang mengembalikan objek relasi, misalnya hasOne(), hasMany(), atau belongsTo().
3. Pengambilan Data Terkait = Dengan relasi, data dapat diambil menggunakan konsep lazy loading ($model->relasi) atau eager loading (Model::with('relasi')->get()).
4. Definisi Pagination = Teknik untuk membagi dataset besar menjadi beberapa halaman agar lebih teratur dan memudahkan navigasi pengguna.
5. Metode Paginate = Laravel menyediakan metode paginate() dan simplePaginate() untuk menghasilkan data yang otomatis dibagi berdasarkan jumlah item per halaman.
6. Navigasi Halaman Otomatis = Blade dapat menampilkan kontrol navigasi dengan fungsi {{ $data->links() }}.
7. Performa Lebih Baik = Pagination mengurangi beban server dengan hanya memuat data yang diperlukan pada setiap halaman.

---

## 2. Langkah-Langkah Praktikum

Praktikum 1: Eloquent ORM Relationships: One-to-One, One-to-Many, Many-to-Many

- Langkah 1: Buat dan Buka Proyek laravel  
  laravel new complex-relationships  
  cd complex-relationships  
  code .

- Langkah 2 : Buat database 
  `Create database eloquentrelation_db;`  
  Kemudian install depedency MySQL dan setelahnya ubah file .env sesuai nama database  
  `composer require doctrine/dbal`  
  `php artisan config:clear`

- Langkah 3 : Buat migrasi untuk skema table  
  `php artisan make:migration create_profiles_table`  
  `php artisan make:migration create_posts_table`  
  `php artisan make:migration create_tags_table`  
  `php artisan make:migration create_post_tag_table`  

- Langkah 4 : edit semua file skema yg telah dibuat tadi  
  ![CreateProfileTable](Gambar/CreateProfileTable.png)
  ![CreatePostTable](Gambar/CpostTable.png)
  ![CreateTagsTable](Gambar/CtagsTable.png)
  ![CreatePostTagTable](Gambar/CpostTagTable.png)  
  Kemudian jalankan `php artisan migrate`

- Langkah 5 : Mendefinisikan Model Eloquent
  Jalankan perintah ini untuk membuat model :  
  `php artisan make:model Profile`  
  `php artisan make:model Post`  
  `php artisan make:model Tag`  

- Langkah 6 : Edit file model yg telah dibuat  
  ![Profile](Gambar/Mprofile.png)
  ![Post](Gambar/Mpost.png)
  ![Tag](Gambar/Mtag.png)
  ![User](Gambar/Muser.png)

- Langkah 7 : Membuat seeder
  `php artisan make:seeder DatabaseSeeder`  
  kemudian ubah file DatabaseSeeder  
  ![Seeder](Gambar/seeder1.png)  
  Jalankan `php artisan db:seed`  

- Langkah 8 : Membuat Controller  
  `php artisan make:controller UserController`  
  `php artisan make:controller PostController`  
  Kemudian edit kedua file controller yang sudah dibuat  
  ![UserController](Gambar/UserC.png)  
  ![PostController](Gambar/PostC.png)  

- Langkah 9: Definisikan route  
  Buka Routes/Web.php Dan isi dengan code berikut
  ![Web.php](Gambar/route1.png)

- Langkah 10: Uji Rute  
  Mulai Php `Artisan serve`  
  Buka Browser Dan Kunjungi  
  http://127.0.0.1:8000/product/users  
  http://127.0.0.1:8000/product/users/1  
  http://127.0.0.1:8000/product/posts  
  http://127.0.0.1:8000/product/posts/1  
  ![Hasil1](Gambar/hasil1.png)  
  ![Hasil2](Gambar/hasil2.png)  
  ![Hasil3](Gambar/hasil3.png)  
  ![Hasil4](Gambar/hasil4.png)  

- Langkah 11 : Membuat Views Menggunakan Bootstrap
  Buat layouts : resources/views/layouts/app.blade.php  
  ![App](Gambar/app.png)  
  buat file resources/views/users/index.blade.php  
  ![index](Gambar/users-index.png)  
  Buat file resources/views/users/show.blade.php  
  ![show](Gambar/show.png)  
  Buat file resources/views/posts/index.blade.php  
  ![index2](Gambar/index.png)  
  Buat file resources/views/posts/show.blade.php  
  ![show2](Gambar/post2.png)  

Praktikum 2: Paginasi dengan Eloquent ORM  

- Langkah 1: Buat dan Buka Proyek laravel  
  laravel new productpagination  
  cd productpagination  
  code .

- Langkah 2: Konfigurasi dan buat database
  Buat database bernama pagination_db dan isikan ke file .env  
  Kemudian install depedency  

- Langkah 3: Membuat Model dan Migrasi Product 
  Jalankan `php artisan make:model Product -m`  
  Perbarui file migrasi :  
  ![Migrate](Gambar/CproductsTable.png)
  Jalankan `php artisan migrate`  

- Langkah 4: Buat Seeder untk data dummy     
  Jalankan `php artisan make:seeder ProductSeeder`    
  lalu isi kode :  
  ![ProductController](Gambar/databaseSeeder.png)   
  Kemudian Perbaharui fileProduct.php  
  ![fileProduct](Gambar/fileProduct.png)

- Langkah 5 : Buat factory untuk model Product
  jalankan perintah berikut:  
  `php artisan make:factory ProductFactory --model=Product`  
  Kemudian perbarui file yg barusan dibuat
  ![Pfactory](Gambar/productFactory.png)

- Langkah 6 : Modifikasi file  
  Buka dan perbarui file database/seeders/DatabaseSeeder.php  
  ![DatabaseSeeder](Gambar/DatabaseSeeders.png)
  Dan jalankan `php artisan db:seed`

- Langkah 7 : Membuat Controller untuk Paginasi  
  Jalankan `php artisan make:controller ProductController` dan perbarui  
  ![ProductC](Gambar/productC.png)

- Langkah 8: Tambahkan route baru  
  Buka routes/web.php dan tambahkan:  
  ![Web.php](Gambar/route2.png)  

- Langkah 9: Membuat View untuk Daftar Produk dengan Paginasi :
  Buat File Baru di Direktori resources/views/products/index.blade.php :  
  Isi Dengan Code Berikut
  ![create.blade.php](gambar/index2.png)

- Langkah 10: Jalankan Aplikasi  
  Jalankan Server Pengembangan  
  `php php artisan serve`  
  Akses aplikasi di:  
  http://127.0.0.1:8000/products 
  ![Hasil](Gambar/hasil5.png)

---

## 3. Hasil dan Pembahasan

Pada praktikum 7 ini, Anda telah berhasil:

- Mengimplementasikan berbagai jenis Eloquent Relationship seperti one-to-one, one-to-many, dan many-to-many untuk menghubungkan data antar tabel.
- Mendefinisikan fungsi relasi pada model menggunakan metode seperti hasOne(), hasMany(), belongsTo(), dan belongsToMany().
- Menggunakan eager loading (with()) untuk mengambil data terkait secara efisien dan mengurangi jumlah query ke database.
- Menampilkan data hasil relasi pada tampilan (view) sehingga setiap entitas dapat menampilkan data yang terkait dengannya.
- Menerapkan pagination menggunakan metode paginate() pada query Eloquent untuk membagi dataset menjadi beberapa halaman.
- Menggunakan {{ $data->links() }} di Blade untuk menghasilkan navigasi halaman secara otomatis.
- Menggabungkan pagination dengan relasi, seperti mem-paginate data yang memiliki hubungan dengan model lain.

Hasil praktikum menunjukkan bahwa penggunaan Eloquent Relationship memudahkan pengelolaan data yang saling terhubung tanpa harus membuat query SQL manual yang panjang, sementara fitur Pagination membantu menampilkan data dalam jumlah besar secara lebih terstruktur, efisien, dan ramah pengguna. Secara keseluruhan, kombinasi relasi dan paginasi membuat aplikasi lebih fleksibel, rapi, dan optimal dalam menangani data.


---

## 4. Kesimpulan

Pada praktikum ini dapat disimpulkan bahwa penerapan Eloquent Relationship dan Pagination memberikan kemudahan yang signifikan dalam pengelolaan serta penampilan data pada aplikasi Laravel. Eloquent Relationship memungkinkan pengembang menghubungkan tabel secara efisien melalui relasi yang terstruktur, sehingga proses pengambilan dan pengolahan data menjadi lebih sederhana tanpa memerlukan query SQL kompleks. Sementara itu, Pagination membantu membagi data berjumlah besar ke dalam halaman yang lebih teratur dan mudah diakses, sehingga meningkatkan performa aplikasi sekaligus pengalaman pengguna. Dengan memahami kedua konsep ini, pengembangan aplikasi berbasis Laravel menjadi lebih optimal, rapi, dan mudah dikembangkan di tahap berikutnya.

---

## 5. Referensi
- chatgpt.com
- https://hackmd.io/@mohdrzu/r1RPvWaCxx

---