<?php

class Siswa_model
{
    private $siswa = [
        [
            "nama" => "Alvaro Mayza",
            "nrp" => "0811846635",
            "email" => "alomayza@gmail.com",
            "jurusan" => "Rekayasa Perangkat Lunak"
        ],
        [
            "nama" => "Muhammad Ghifari",
            "nrp" => "087791808938",
            "email" => "muhammadghifari8576@gmail.com",
            "jurusan" => "Rekayasa Perangkat Lunak"
        ],
        [
            "nama" => "Muhammad Arkan Karim",
            "nrp" => "082143582333",
            "email" => "muhammadarkan@gmail.com",
            "jurusan" => "Rekayasa Perangkat Lunak"
        ]
    ];

    public function getAllSiswa()
    {
        return $this->siswa;
    }
}