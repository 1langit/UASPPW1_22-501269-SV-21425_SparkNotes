# UASPPW1_22-501269-SV-21425_SparkNotes

Proyek ujian akhir semester Praktikum Pemrograman Web 1
Program Studi Teknologi Rekayasa Perangkat Lunak

## Identitas
Nama : Langit Lintang Radjendra
NIM : 22/501269/SV/21425

## Penjelasan Website
SparkNotes adalah website catatan yang berfungsi untuk menulis catatan, to-do list, dan papan rencana. Website ini dapat digunakan oleh pengguna yang ingin menulis catatan dengan cepat, menulis dan merencanakan tugas yang harus dilakukan, atau sekedar membuat catatan di kelas untuk laporan praktikum.


## Kriteria Penilaian
Website ini menjawab 4 kriteria penilaian yaitu:

1. Desain rapi mengikuti kaidah atau prinsip desain
Ukuran, warna, kontras antara teks tengan background, tata letak website ini dapat terlihat dengan jelas. Website ini juga memberi feedback atas aksi yang dilakukan oleh pengguna contohnya pada preview catatan. Pada landing page website ini, pengguna diarahkan untuk melakukan signup kemudian login dan membuat catatan. Interfece untuk CTA dan navigasi terbilang konsisten, Serta mempertimbangkan tindakan pengguna dan mencegah tindakan yang tidak diinginkan.
![screencapture-localhost-PPW](https://github.com/1langit/UASPPW1_22-501269-SV-21425_SparkNotes/assets/126531063/522fd499-454c-4107-97fc-f2eeb45d393a)

2. Website responsive, dapat diakses melalui device: Mobile, Tablet dan Laptop
Menggunakan class yang disediakan bootstrap, website ini dibuat responsif sesuai ukuran layar. Contoh pada potongan kode di bawah dari `index.html` ini, kolom tersebut akan memiliki besar 7 grid pada ukuran layar xxl (≥1400px), 8 grid  pada ukuran layar sm (≥576px), dan padding dengan class 5 (3rem) pada layar berukuran xl (≥1200px), serta margin dengan class 5 (3rem) pada layar berukuran xxl. Kolom, margin, dan padding dengan ukuran berbeda-beda ini bertujuan supaya konten di dalamnya tidak tampil memanjang di layar yang besar dan tidak memiliki jarak tambahan pada layar yang kecil.
```
<div class="col-sm-8 col-xxl-7 align-middle d-flex flex-column justify-content-center px-xl-5 m-xxl-5">
```
Tampilan desktop:

![Screenshot 2023-06-20 115020](https://github.com/1langit/UASPPW1_22-501269-SV-21425_SparkNotes/assets/126531063/9b2540bf-92f9-4349-a872-8607a08790c3)

Tampilan mobile:

![Screenshot 2023-06-20 115033](https://github.com/1langit/UASPPW1_22-501269-SV-21425_SparkNotes/assets/126531063/a12731f0-87a1-467b-a944-bbbfc34f0645)


3. Direct feedback ke pengguna website
Setelah pengguna menyimpan catatan, preview catatan tersebut akan langsung berubah pada daftar catatan sesuai yang diinputkan oleh pengguna. Pengguna juga akan diberi notifikasi konfirmasi ketika akan menghapus catatan.
![Screenshot 2023-06-20 113243](https://github.com/1langit/UASPPW1_22-501269-SV-21425_SparkNotes/assets/126531063/2ff3afc2-0442-4fbc-b4a3-e1497447b6bb)


5.  Konten dinamis dari database
Setiap akun dan catatan yang dibuat pengguna akan tersimpan ke dalam basis data. Catatan tersebut nantinya dapat dilihat kembali menggunakan akun yang membuat catatan tersebut. Dengan kata lain, jika id_usr sebagai foreign key pada tabel catatan sama dengan user yang login saat ini, catatan tersebut akan ditampilkan.
