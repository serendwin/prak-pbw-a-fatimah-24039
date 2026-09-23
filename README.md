# TUGAS PERTEMUAN 1

## 1. Menjalankan Program Awal

##### 1. Output Contoh Kalkulator
<img width="960" height="540" alt="image" src="https://github.com/user-attachments/assets/cbb35a3b-1ef0-4dc5-b865-c3a5c56f7192" />

##### 2. Output Contoh Biodata
<img width="960" height="540" alt="image" src="https://github.com/user-attachments/assets/a7143d75-abec-4474-bcd2-28215271bd63" />

## 2. Modifikasi Program

Pada tugas ini dilakukan minimal dua modifikasi yang bermakna pada program.

### Modifikasi 1 — Menambahkan Field Baru

Modifikasi pertama dilakukan dengan menambahkan **field/variabel baru** pada program.

Field baru digunakan untuk menyimpan informasi tambahan yang sebelumnya belum terdapat pada program.

Contoh:

```java
private String alamat;
```

Kemudian field tersebut dapat digunakan melalui getter dan setter:

```java
public String getAlamat() {
    return alamat;
}

public void setAlamat(String alamat) {
    this.alamat = alamat;
}
```

Dengan adanya field baru, program dapat menyimpan informasi yang lebih lengkap.

### Modifikasi 2 — Menambahkan Validasi/Kondisi

Modifikasi kedua dilakukan dengan menambahkan **kondisi atau validasi** pada program.

Contohnya adalah melakukan pengecekan terhadap data sebelum diproses.

```java
if (nama == null || nama.isEmpty()) {
    System.out.println("Nama tidak boleh kosong!");
} else {
    System.out.println("Data berhasil diproses.");
}
```

Validasi tersebut digunakan agar program tidak langsung memproses data yang kosong.

---

## 3. Hasil Setelah Modifikasi

Setelah kedua modifikasi diterapkan, program kembali dijalankan untuk memastikan tidak terdapat error kritis dan fungsi tambahan dapat berjalan dengan baik.

### Screenshot Setelah Modifikasi

> 📷 *Masukkan screenshot output program setelah dilakukan modifikasi di sini.*

Contoh penempatan:

```text
[ Screenshot Output Setelah Modifikasi ]
```

### Perbandingan

| Kondisi            | Hasil                                                        |
| ------------------ | ------------------------------------------------------------ |
| Sebelum modifikasi | Program berjalan sesuai contoh Pertemuan 1                   |
| Modifikasi 1       | Menambahkan field baru                                       |
| Modifikasi 2       | Menambahkan validasi/kondisi                                 |
| Setelah modifikasi | Program tetap berjalan dan fitur tambahan berhasil digunakan |

---

# 4. Penjelasan Lima Bagian Kode Penting

## 1. Deklarasi Class

```java
public class NamaClass {
    
}
```

Bagian ini digunakan untuk mendefinisikan sebuah class. Class menjadi tempat untuk menyimpan atribut, method, dan logika yang digunakan oleh program.

---

## 2. Deklarasi Field/Variabel

```java
private String nama;
```

Field digunakan untuk menyimpan data yang diperlukan oleh objek. Pada contoh tersebut, variabel `nama` digunakan untuk menyimpan data berupa teks.

Penggunaan `private` juga membantu menerapkan konsep **encapsulation**, sehingga data tidak dapat diakses secara langsung dari luar class.

---

## 3. Constructor

```java
public NamaClass(String nama) {
    this.nama = nama;
}
```

Constructor digunakan untuk memberikan nilai awal ketika sebuah object dibuat.

Keyword `this` digunakan untuk membedakan antara field `nama` milik object dengan parameter `nama` yang diterima oleh constructor.

---

## 4. Method

```java
public void tampilkanData() {
    System.out.println(nama);
}
```

Method digunakan untuk menjalankan suatu proses atau fungsi tertentu dalam program.

Pada contoh tersebut, method `tampilkanData()` digunakan untuk menampilkan data `nama` ke layar.

---

## 5. Percabangan/Validasi

```java
if (nama == null || nama.isEmpty()) {
    System.out.println("Nama tidak boleh kosong!");
} else {
    System.out.println("Data berhasil diproses.");
}
```

Percabangan `if-else` digunakan untuk menentukan tindakan program berdasarkan kondisi tertentu.

Pada modifikasi ini, program akan mengecek apakah data nama kosong. Jika kosong, program memberikan pesan error. Jika tidak kosong, data dapat diproses.

---

# 5. Error yang Pernah Muncul

## Error

Salah satu error yang muncul saat menjalankan program adalah:

```text
[Masukkan pesan error yang benar-benar muncul di sini]
```

### Penyebab

Error terjadi karena terdapat kesalahan pada kode program, misalnya kesalahan penulisan syntax, nama variabel/class yang tidak sesuai, atau bagian kode yang belum didefinisikan.

### Langkah Perbaikan

Langkah yang dilakukan untuk memperbaiki error adalah:

1. Membaca pesan error yang ditampilkan oleh IDE.
2. Menentukan baris kode yang menyebabkan error.
3. Memeriksa syntax dan nama variabel/class pada baris tersebut.
4. Memperbaiki bagian kode yang salah.
5. Menjalankan kembali program.
6. Memastikan program dapat berjalan dan menghasilkan output tanpa error kritis.

Setelah dilakukan perbaikan, program berhasil dijalankan kembali.

---

# 6. Kesimpulan

Berdasarkan praktikum yang telah dilakukan, seluruh contoh program pada Pertemuan 1 berhasil dijalankan hingga menghasilkan output tanpa error kritis.

Selain menjalankan program awal, dilakukan dua modifikasi bermakna, yaitu **menambahkan field baru** dan **menambahkan validasi/kondisi**. Modifikasi tersebut membantu memahami bagaimana struktur program dapat dikembangkan tanpa menghilangkan fungsi utama.

Dari proses praktikum ini juga dapat dipahami beberapa bagian penting dalam program seperti **class, field, constructor, method, dan percabangan**. Selain itu, proses identifikasi dan perbaikan error membantu memahami cara melakukan debugging pada program.

---

## Dokumentasi

### Sebelum Modifikasi

📷 *Masukkan screenshot di sini.*

### Sesudah Modifikasi

📷 *Masukkan screenshot di sini.*
