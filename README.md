# Debugging
Debugging Pendaftaran SMP 73 JAKARTA SELATAN

Pada permasalahan web Pendaftaran SMP 73 JAKARTA SELATAN adalah ketika update data dengan admin pada tanggal lahir tidak terupdate.

Solve problemnya menggunakan **SYNTAX BUG** yang dimana sebuah kesalahan yang disebabkan kode yang dituliskan dalam bahasa pemrograman tidak sesuai dengan yang seharusnya, atau dengan kata lain disebut kesalahan sintaks; Kesalahan sintaks dapat dihindari dengan cara memahami kode program sesuai bahasa pemrograman yang dikuasai/digunakan

# Melakukan DEBUGGING

**Percobaan Update**

![image](https://user-images.githubusercontent.com/81188572/177374127-4f895bdf-ad30-442e-8f4e-46bce2d285b8.png)

![image](https://user-images.githubusercontent.com/81188572/177374809-b14ae4fa-4017-4b0d-a8e8-5a2e4b56ead9.png)

![image](https://user-images.githubusercontent.com/81188572/177374872-6f5d1053-d4ba-4f02-acf3-2bc7f0a767af.png)

Berhasil!, Tetapi pada **DATABASE** tanggal lahir tidak terupdate dikarenakan tidak terdapat kolom tanggal lahir pada edit/UPDATE.


# Melakukan PERBAIKAN PROGRAM

- Pada Source Code **EDIT.PHP** belum terdapat kolom tanggal lahir

![image](https://user-images.githubusercontent.com/81188572/177375360-4468aa96-02b6-4546-a93a-0b14315afb4c.png)

- Pada Source Code **EDIT.PHP** menambahkan kolom tanggal lahir

![image](https://user-images.githubusercontent.com/81188572/177375533-5c21919a-b85e-4a86-b680-d0e6d7d5899d.png)

- Percobaan edit/UPDATE kembali

![image](https://user-images.githubusercontent.com/81188572/177375727-955ca4b6-4b67-4674-9229-54c6a01b4a2c.png)

![image](https://user-images.githubusercontent.com/81188572/177375810-eecde84e-ab61-4ffe-8516-6e16e9a97882.png)

Berhasil terupdate ke **DATABASE**!

