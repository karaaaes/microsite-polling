<?php

namespace App\Models;

use CodeIgniter\Model;

class Msurvey extends Model
{
    protected $table = 't_content';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama', 'email', 'usia', 'domisili', 'is_buy', 'deskripsi', 
        'frekuensi', 'faktor', 'date_created'
    ];

    public function __construct()
    {
        parent::__construct();
        // Mendapatkan grup database yang dipilih dari konfigurasi Database
        $dbGroup = config('Database')->defaultGroup;
        $this->db = \Config\Database::connect($dbGroup);
    }

    public function insertData($nama, $email, $usia, $domisili, $is_buy, $deskripsi, $frekuensi, $faktor, $faktor_lain)
    {
        $db = $this->db;

        echo 'db_baru';

        $date_created = date('Y-m-d H:i:s');

        foreach ($faktor as $key => $value) {
            if ($value === "c4bao123") {
                unset($faktor[$key]);
            }
        }

        $faktor = array_values($faktor);
        
        // Process faktor array into comma-separated string
        $faktor_str = implode(',', $faktor);

        // Append faktor_lain if it exists
        if (!empty($faktor_lain)) {
            $faktor_str .= ',' . $faktor_lain;
        }
        // Prepare SQL query
        $sql = "INSERT INTO t_content (nama, email, usia, domisili, is_buy, deskripsi, frekuensi, faktor, date_created) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

        // Execute the query
        $query = $db->query($sql, [
            $nama, $email, $usia, $domisili, $is_buy, $deskripsi, $frekuensi, $faktor_str, $date_created
        ]);

        return $query;
    }
}
