# Laporan Modul 4: Laravel Blade Template Engine

**Mata Kuliah:** Workshop Web Lanjut  
**Nama:** M. Iqbal Sayuti  
**NIM:** 2024573010057  
**Kelas:** TI-2C  

---

## Abstrak

Dalam praktikum ini, mahasiswa mempelajari konsep dan penerapan Blade Template Engine pada framework Laravel. Blade berfungsi untuk memisahkan antara logika dan tampilan dalam arsitektur MVC (Model-View-Controller), sehingga proses pengembangan web menjadi lebih efisien dan terstruktur. Tujuan praktikum ini adalah untuk memahami sintaks dasar Blade, penggunaan layout dan inheritance, serta penerapan fitur Blade dalam menampilkan data dan mengatur alur tampilan.

---

## 1. Dasar Teori
Blade Template Engine adalah sistem templating bawaan dari Laravel yang memudahkan pengembang dalam membuat tampilan dinamis dengan sintaks yang sederhana dan fleksibel. Meskipun mendukung penggunaan kode PHP biasa, Blade juga menyediakan berbagai fitur tambahan, seperti:

- Template Inheritance: memungkinkan pembuatan layout utama (layout.blade.php) yang dapat digunakan kembali oleh halaman lain.
- Section & Yield: digunakan untuk mendefinisikan dan menampilkan area konten dalam template.
- Control Structure: mendukung perintah seperti `@if`, `@foreach`, dan `@for` untuk mengatur logika tampilan.
- Component & Include: mempermudah penggunaan ulang elemen tampilan seperti header, footer, atau form.

Semua file Blade dikompilasi menjadi file PHP murni dan disimpan dalam cache, sehingga meningkatkan performa aplikasi.


---

## 2. Langkah-Langkah Praktikum

Praktikum 1: Meneruskan Data dari Controller ke Blade View

- Langkah 1: Buat dan Buka Proyek laravel
  laravel new modul-4-blade-view
  cd modul-4-blade-view
  code .

- Langkah 2: Buat Sebuah Controller
  php artisan make:controller DasarBladeController
  ini akan membuat app/Http/Controllers/DasarBladeController.php.

- Langkah 3: Definisikan Rute
  Buka Routes/Web.php Dan isi dengan code berikut
  ![Web.php](Gambar/image1.png)

- Langkah 4: Buat Metode Untuk menghandle Data pada Controller
  Buka app/Http/controllers/dasarbladecontroller.php
  Isi Dengan Code Berikut
  ![DasarBladeController](gambar/image2.png)

- Langkah 5: Buat Blade View
  Buat File Baru di Direktori resources/views/dasar.blade.php:
  Isi Dengan Code Berikut
  ![Dasar.blade.php](gambar/dasar.png)

- Langkah 6: Uji Rute
  Mulai Php Artisan serve
  Buka Browser Dan Kunjungi
  http://127.0.0.1:8000/dasar
  ![Hasil](Gambar/Hasil1.png)

Praktikum 2: Menggunakan Struktur Kontrol Blade

- Langkah 1: Buat Controller Baru
  Di Dalam Project Modul-4-blade-view Bikin sebuah controller  
  php artisan make:controller LogicController
  Ini membuat app/Http/Controllers/LogicController.php.

- Langkah 2: Tambahkan route baru
  Buka routes/web.php dan tambahkan:
  ![Web.php](Gambar/image1.png)      

- Langkah 3: Tambahkan Logika Di Controller
  Kemudian, isi dengan code berikut  
  ![LogicController](Gambar/LogicContr.png)   

- Langkah 4: Buat Blade View
  Buat file view Di direktori resources/views/logic.blade.php:
  Kemudian Isi Dengan Code Berikut
  ![Logic.blade.php](Gambar/Logic.png)   

- Langkah 5: Jalankan Aplikasi
  Jalankan Server Pengembangan
  php php artisan serve  
  Akses aplikasi di:
  http://127.0.0.1:8000/logic 
  ![Hasil](Gambar/hasil2.png)

Praktikum 3: Layout dan Personalisasi di Laravel 12 dengan Bootstrap

- Langkah 1: Buat Controller baru
  Masih Sama Di dalam Projek modul-4-view, untuk kali ini akan membuat controller untuk menangani rute   dan logika kita:
  php artisan make:controller PageController

- Langkah 2: Menambahkan Route
  Di Dalam Routes/web.php kita akan menambahkan rute baru:
  berikut adalah codenya:
  ![Web.php](Gambar/image1.png)      

- Langkah 3: Update Controller
  Di dalam direktori app/Http/Controllers/PageController.php Isikan Kode Berikut
  ![PageController](Gambar/image3.png)       
    
- Langkah 4: Buat Layout Dasar dengan Bootstrap
  Di dalam direktori resources/view bikin folder layouts kemudian di dalamnya buat file app.blade.php
  dan isi dengan code berikut:
  ![app.blade.php](Gambar/App.png)

- Langkah 5: Buat view untuk Admin
  Buat direktori admin di resources/views
  Kemudian, buat resources/views/admin/dashboard.blade.php:
  Dan Isi dengan Code Berikut:
  ![Dashboard.blade.php](Gambar/AdminDash.png)

- Langkah 6: Buat view untuk User
  Buat direktori user di resources/views
  Kemudian, buat resources/views/user/dashboard.blade.php:
  Dan isi dengan Code Berikut:
  ![Dashboard.blade.php](Gambar/UserDash.png)

- Langkah 7: Jalankan Aplikasi
  php artisan serve
  Buka browser dan kunjungi
  Admin: http://127.0.0.1:8000/admin
  User: http://127.0.0.1:8000/user
  Berikut adalah Hasilnya
  ![Hasil](Gambar/HasilAdmin.png)
  ![Hasil](Gambar/HasilUser.png)

Praktikum 4: Partial Views, Blade Components, dan Theme Switching di Laravel 12

  Langkah 1: Buat Dan Buka Proyek Laravel Baru
  laravel new modul-4-laravel-ui
  cd modul-4-laravel-ui
  code .

  Langkah 2: Buat Controller
  Ketik ini di terminal :
  php artisan make:controller UIController

  Langkah 3: Definisikan Routes
  Buka Routes/web.php Dan Tambahkan Code Berikut:
  ![Web.php](Gambar/web.png)

  Langkah 4: Update Controller
  Buka File UIController.php di Direktori app/Http/Controllers/UIController.php
  Kemudian Isi dengan Code Berikut
  ![UIcontroller](Gambar/controller.png)

  Langkah 5: Buat Layout Utama Dengan Theme Support
  Buat Direktori layout di resources/view kemudian Bikin File 
  app.blade.php Dan isi Dengan Code Berikut:
  ![App.blade.php](Gambar/app1.png)

  Langkah 6: Buat Partial View
  Buat Direktori Partial Di resources/view dan bikin file
  navigation.blade.php kemudian isi code Berikut
  ![Navigation.Blade.php](Gambar/Navigation.png)

  Langkah 7: Buat Blade Components
  Ketik ini di dalam terminal:
  php artisan make:component Footer
  php artisan make:component FeatureCard
  php artisan make:component TeamMember
  php artisan make:component ContactForm
  Kemudian, Edit resources/views/components/footer.blade.php:
  Isi Dengan Code Berikut:
  ![Footer.blade.php](Gambar/Footer.png)
  Selanjutnya Edit resources/views/components/feature-card.blade.php
  Isi Dengan Code Berikut:
   ![Feature-card.blade.php](Gambar/featurecard.png)
   Dan Edit resources/view/components/team-member.blade.php
   Isi Dengan Code Berikut:
   ![Team.member.php](Gambar/teamMember.png)

   Langkah 8: Buat Main Views
   Buat View-view Utama:
   1. resources/views/home.blade.php
   Isi Dengan Code Berikut:
   ![Home.blade.php](Gambar/home.png)
   2. resources/views/about.blade.php
   Isi Dengan Code Berikut:
   ![About.blade.php](Gambar/About.png)
   3. resources/views/partials/team-stats.blade.php
   Isi Dengan Code Berikut:
   ![Team-stats.blade.php](Gambar/TeamStat.png)
   4. resources/views/contact.blade.php 
   Isi Dengan Code Berikut:
   ![Contact.blade.php](Gambar/Contact.png)
   5. resources/views/components/contact-form.blade.php
   Isi dengan Code Berikut:
   ![Contact-form.blade.php](Gambar/ContactForm.png)
   6. resources/views/profile.blade.php
   Isi Dengan Code Berikut:
   ![Profile.blade.php](Gambar/Profile.png)

   Langkah 9: Jalankan Dan Test Aplikasi
   Jalankan php artisan serve di Terminal
   Kemudian Buka Browser Dan kunjungi:
   Home:    http://127.0.0.1:8000
   about:   http://127.0.0.1:8000/about
   Contact: http://127.0.0.1:8000/contact
   Profile: http://127.0.0.1:8000/profile
   Berikut Gambar hasilnya
   - Hasil Home:
   ![Hasil Home](Gambar/HasilHome.png)
   - Hasil About:
   ![Hasil About](Gambar/HasilAbout.png)
   - Hasil Contact:
   ![Hasil Contact](Gambar/HasilContact.png)
   - Hasil Profile:
   ![Hasil Profile](Gambar/HasilProfile.png)

---

## 3. Hasil dan Pembahasan

Pada Praktikum 4 ini, Anda telah berhasil:
- Membangun aplikasi Laravel dengan beberapa halaman (multiple pages).
- Menerapkan Partial Views menggunakan direktif `@include`.
- Membuat dan memanfaatkan Blade Components dengan props dan slots.
- Mengembangkan sistem Theme Switching dengan session persistence.
- Menggunakan Bootstrap 5 untuk mendukung tampilan yang responsif.
- Melakukan perbandingan langsung antara partial views dan components.
- Menerapkan best practices dalam penyusunan struktur view di Laravel.

Hasil praktikum ini menunjukkan bahwa ketiga konsep — partial views, Blade components, dan theme switching — dapat diterapkan secara terpadu dalam satu proyek yang terstruktur, kohesif, dan mudah dikelola.


---

## 4. Kesimpulan

Dari praktikum ini dapat disimpulkan bahwa Blade Template Engine merupakan elemen penting dalam framework Laravel yang berperan dalam memisahkan logika dan tampilan aplikasi.
Beberapa poin utama yang dipelajari antara lain:

- Blade memudahkan pembuatan tampilan dinamis dengan sintaks yang sederhana dan mudah dipahami.
- Penggunaan layout dan inheritance mempercepat pembuatan halaman dengan struktur yang konsisten.
- Partial view dan component membantu meningkatkan efisiensi serta menjaga konsistensi kode tampilan.
- Integrasi dengan Bootstrap membuat tampilan aplikasi lebih menarik dan responsif.

Secara keseluruhan, praktikum ini memperkuat pemahaman mahasiswa mengenai pentingnya arsitektur yang terstruktur dalam pengembangan aplikasi web modern menggunakan Laravel.


---

## 5. Referensi
- chatgpt.com
- https://hackmd.io/@mohdrzu/r1AIUzWpll#Praktikum-4---Partial-Views-Blade-Components-dan-Theme-Switching-di-Laravel-12
https://laravel.com/docs

---