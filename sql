CREATE DATABASE db_mahasiswa;
USE db_mahasiswa;

CREATE TABLE mahasiswa (
  id INT(11) AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(100),
  nim VARCHAR(20),
  hobi VARCHAR(100),
  prodi VARCHAR(100),
  foto VARCHAR(255)
);
