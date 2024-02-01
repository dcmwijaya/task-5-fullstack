[![Open Source Love](https://badges.frapsoft.com/os/v1/open-source.svg?style=flat)](https://github.com/ellerbrock/open-source-badges/)
[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg?logo=github&color=%23F7DF1E)](https://opensource.org/licenses/MIT)
![GitHub last commit](https://img.shields.io/github/last-commit/devancakra/task-5-fullstack)
![Laravel8](https://img.shields.io/badge/-Laravel8-white?style=flat&logo=laravel)
![Bootstrap](https://img.shields.io/badge/-BT5-purple.svg?&logo=bootstrap&logoColor=white)
![VueJS](https://img.shields.io/badge/-Vue%20JS-darkcyan?style=flat&logo=vue.js)
![PHP](https://img.shields.io/badge/-PHP-grey.svg?&logo=PHP&logoColor=white)
![HTML5](https://img.shields.io/badge/-HTML%205-darkblue.svg?&logo=html5)
![CSS3](https://img.shields.io/badge/-CSS%203-green.svg?&logo=css3)
![MySQL](https://img.shields.io/badge/-MySQL-blue.svg?style=flat&logo=mysql&logoColor=white)

# task-5-fullstack
<strong>Virtual Internship Experience (Investree) - Fullstack - Devan Cakra Mudra Wijaya</strong><br><br>
Tema proyek ini berkaitan erat dengan pariwisata. Saya menyebut proyek web ini ``` MyTour ```, fitur yang diunggulkan adalah bercerita. Menurut saya ini menarik, karena pengguna bisa berbagi momen perjalanan mereka yang berharga layaknya media sosial. Yang membedakan web ini dengan yang lain adalah mengutamakan kenyamanan pengguna dalam memposting foto, karena aturannya yaitu pengguna lain tidak bisa berkomentar atau hanya bisa melihat saja.

<br><br>

## Kebutuhan Proyek
| Bagian | Deskripsi |
| --- | --- |
| Fitur | Masuk, Buat, Baca, Ubah, Hapus, Paginasi, Pencarian, DLL |
| Kerangka kerja | Bootstrap 5, Laravel 8, VueJS |
| Peralatan | Visual Studio Code, XAMPP (PHP Versi 8), NodeJS |

<br><br>

## Unduh & Instal
1. XAMPP dengan PHP versi 8 :<br>
   
   ```bash
   https://onboardcloud.dl.sourceforge.net/project/xampp/XAMPP%20Windows/8.2.4/xampp-windows-x64-8.2.4-0-VS16-installer.exe
   ```
<br>

2. Visual Studio Code :

   ```bash
   https://code.visualstudio.com/docs/?dv=win
   ```
<br>

3. NodeJS :

   ```bash
   https://nodejs.org/en/download
   ```

<br><br>

## Basis data
1. Buka ``` XAMPP ```, lalu tekan tombol mulai di bagian ``` Apache ``` & ``` MySQL ```. Hal ini bertujuan untuk dapat mendukung website secara optimal.<br><br>
2. Akses peramban terlebih dahulu untuk membuka panel admin basis data, silakan salin tautan berikut: ``` localhost/phpmyadmin/ ```.<br><br>
3. Buat basis data bernama ``` mytour ``` di lokal.<br><br>
4. Buka basis data ``` mytour ``` dan Impor ``` mytour.sql ``` di direktori ``` MyTour/public/sql ```.<br><br>
5. Kemudian buka berkas XAMP: ``` php.ini ``` -> hapus ``` titik koma (;) ``` di depan ``` extension=intl ``` -> simpan.
   
<br><br>

## Akun Bawaan
| Peran | Surel | Nama | Kata Sandi |
| --- | --- | --- | --- |
| Admin | admin@mytour.ac.id | Anastasya Geraldine | 456123 |
| User | user1@mytour.ac.id | Andikha Refanza | 456123 |
| User | user1@mytour.ac.id | Alfiansyah Nukita Prada | 456123 |

<br><br>

## Memulai
1. Unduh dan ekstrak repositori ini.<br>
2. Buka direktori ``` MyTour ```, lalu buka ``` CMD ``` di dalam direktori tersebut.<br>

   • Pertama, jika tidak ada kesalahan yang terjadi maka lewati saja langkah ini, tetapi jika sebaliknya, silakan salin perintah berikut:<br>

      ````bash
      npm install
      ````

   • Kedua, langkah ini wajib dilakukan, jadi silakan salin perintah berikut:<br>

      ````bash
      npm run dev
      ````

   • Ketiga, langkah ini wajib dilakukan, jadi silakan salin perintah berikut ini:<br>

      ````bash
      php artisan serve
      ````

3. Buka ``` Chrome ``` -> Tambahkan ekstensi bernama ``` Vue.js devtools ```.

4. Buka ``` peramban ``` Anda (Tab baru), lalu ketik -> ``` http://127.0.0.1:8000/ ``` atau sesuaikan dengan yang ada di ``` CMD ``` Anda.

5. Silakan masuk dan akses fitur-fiturnya, selamat menikmati [Selesai].

<br><br>

## Sorotan
<table>
<tr>
<th width="280">Beranda</th>
<th width="280">Registrasi</th>
<th width="280">Masuk</th>
</tr>
<tr>
<td><img src="https://github.com/devancakra/task-5-fullstack/assets/54527592/fa59f2d1-771f-45ef-a522-e2a9e232dd28" alt=""></td>
<td><img src="https://github.com/devancakra/task-5-fullstack/assets/54527592/fb24bda7-ca24-4683-b033-9f3b85234069" alt=""></td>
<td><img src="https://github.com/devancakra/task-5-fullstack/assets/54527592/5f86fab3-dedb-4517-8488-529bcff8d7e0" alt=""></td>
</tr>
</table>
<table>
<tr>
<th width="280">Atur Ulang Kata Sandi</th>
<th width="280">Profil</th>
<th width="280">Ubah Profil</th>
</tr>
<tr>
<td><img src="https://github.com/devancakra/task-5-fullstack/assets/54527592/a8508176-1c67-4bcc-a8dc-e9acf67421ba" alt=""></td>
<td><img src="https://github.com/devancakra/task-5-fullstack/assets/54527592/3563dafe-7b64-48dd-95fd-616d8cc51749" alt=""></td>
<td><img src="https://github.com/devancakra/task-5-fullstack/assets/54527592/5d1787ee-8e0f-484f-b228-3499a04d3ae1" alt=""></td>
</tr>
</table>
<table>
<tr>
<th width="280">Tulis Artikel</th>
<th width="280">Kelola Arsip</th>
<th width="280">Fitur Ubah Artikel</th>
</tr>
<tr>
<td><img src="https://github.com/devancakra/task-5-fullstack/assets/54527592/5fee72d8-d880-4b63-b450-c348ade1bf28" alt=""></td>
<td><img src="https://github.com/devancakra/task-5-fullstack/assets/54527592/31bf2fb0-c666-49a5-8f27-5f0c8ca23a41" alt=""></td>
<td><img src="https://github.com/devancakra/task-5-fullstack/assets/54527592/7d0e4fd0-d6c3-4fd1-b30b-3099db13d5c2" alt=""></td>
</tr>
</table>
<table>
<tr>
<th width="280">Publikasi Artikel</th>
<th width="280">Kategori Umum</th>
<th width="280">Kategori Khusus</th>
</tr>
<tr>
<td><img src="https://github.com/devancakra/task-5-fullstack/assets/54527592/684ece56-ffe7-4b2a-b4de-807e50cdc8fb" alt=""></td>
<td><img src="https://github.com/devancakra/task-5-fullstack/assets/54527592/231cdffe-c118-423c-8072-fb56fba7a44e" alt=""></td>
<td><img src="https://github.com/devancakra/task-5-fullstack/assets/54527592/53e828df-c22d-42b7-b20a-02be0bce995c" alt=""></td>
</tr>
</table>

<br><br>

## Penafian
Aplikasi ini dibuat dengan menyertakan sumber-sumber dari pihak ketiga. Pihak ketiga di sini adalah penyedia layanan, yang layanannya berupa pustaka, kerangka kerja, dan lain-lain. Saya ucapkan terima kasih banyak atas layanannya. Telah terbukti sangat membantu dan dapat diimplementasikan.

<br><br>

## LISENSI 
LISENSI MIT - Hak Cipta © 2022 - Devan C. M. Wijaya, S.Kom

Dengan ini diberikan izin tanpa biaya kepada siapa pun yang mendapatkan salinan perangkat lunak ini dan file dokumentasi terkait perangkat lunak untuk menggunakannya tanpa batasan, termasuk namun tidak terbatas pada hak untuk menggunakan, menyalin, memodifikasi, menggabungkan, mempublikasikan, mendistribusikan, mensublisensikan, dan/atau menjual salinan Perangkat Lunak ini, dan mengizinkan orang yang menerima Perangkat Lunak ini untuk dilengkapi dengan persyaratan berikut:

Pemberitahuan hak cipta di atas dan pemberitahuan izin ini harus menyertai semua salinan atau bagian penting dari Perangkat Lunak.

DALAM HAL APAPUN, PENULIS ATAU PEMEGANG HAK CIPTA DI SINI TETAP MEMILIKI HAK KEPEMILIKAN PENUH. PERANGKAT LUNAK INI DISEDIAKAN SEBAGAIMANA ADANYA, TANPA JAMINAN APAPUN, BAIK TERSURAT MAUPUN TERSIRAT, OLEH KARENA ITU JIKA TERJADI KERUSAKAN, KEHILANGAN, ATAU LAINNYA YANG TIMBUL DARI PENGGUNAAN ATAU URUSAN LAIN DALAM PERANGKAT LUNAK INI, PENULIS ATAU PEMEGANG HAK CIPTA TIDAK BERTANGGUNG JAWAB, KARENA PENGGUNAAN PERANGKAT LUNAK INI TIDAK DIPAKSAKAN SAMA SEKALI, SEHINGGA RISIKO ADALAH MILIK ANDA SENDIRI.
