<?php
class mahasiswa {
    public $koneksi;

    public function __construct() {
        $this->koneksi = new mysqli("localhost", "root", "", "web_db");
    }

    public function read() {
        return $this->koneksi->query("SELECT * FROM mahasiswa");
    }

    public function create($nim, $nama, $jurusan, $alamat, $email, $no_hp) {
        $query = "INSERT INTO mahasiswa (nim, nama, jurusan, alamat, email, no_hp) VALUES ('$nim', '$nama', '$jurusan', '$alamat', '$email', '$no_hp')";
        return $this->koneksi->query($query);
    }

    public function getById($nim) {
        $result = $this->koneksi->query("SELECT * FROM mahasiswa WHERE nim = '$nim'");
        return $result->fetch_assoc();
    }

    public function update($nim, $nama, $jurusan, $alamat, $email, $no_hp) {
        $query = "UPDATE mahasiswa SET nama='$nama', jurusan='$jurusan', alamat='$alamat', email='$email', no_hp='$no_hp' WHERE nim='$nim'";
        return $this->koneksi->query($query);
    }

    public function delete($nim) {
        $query = "DELETE FROM mahasiswa WHERE nim='$nim'";
        return $this->koneksi->query($query);
    }
}
?>