CREATE DATABASE fakultas;

CREATE TABLE jurusan(
  id INTEGER PRIMARY KEY AUTO_INCREMENT,
  kode CHAR(4) NOT NULL,
  nama VARCHAR(50) NOT NULL
);


CREATE TABLE mahasiswa(
  id INTEGER PRIMARY KEY AUTO_INCREMENT,
  id_jurusan  INTEGER NOT NULL,
  nim CHAR(8) NOT NULL,
  nama VARCHAR(50) NOT NULL,
  Jenis_Kelamin enum ('PRIA','Betina') NOT NULL,
  Tempat_Lahir VARCHAR(50) NOT NULL,
  Tanggal_Lahor DATE NOT NULL,
  alamat VARCHAR(255) NOT NULL,
  FOREIGN KEY (id_jurusan) REFERENCES jurusan(id)
);

/* Insert jurusan */
MariaDB [fakultas]> insert into jurusan (kode, nama) values ("PJK", "pajak");

/* insert mahasiswa */
MariaDB [fakultas]> insert into mahasiswa (id_Jurusan, nim, nama, Jenis_Kelamin, Tempat_Lahir, Tanggal_Lahor, alamat) value (1, "195030407111055", "Heri", "Pria", "Jakarta", "17-08-01", "Swadaya 2");
MariaDB [fakultas]> insert into mahasiswa (id_Jurusan, nim, nama, Jenis_Kelamin, Tempat_Lahir, Tanggal_Lahor, alamat) value (2, "195030400111055", "wisnu", "Pria", "Jakarta", "17-08-01", "Swadaya 2");
/* Update mahasiswa */
MariaDB [fakultas]> update mahasiswa set alamat= "jl. Swadaya 4" where id=1;

/* delete mahasiswa */
MariaDB [fakultas]> delete from mahasiswa where id = 2;