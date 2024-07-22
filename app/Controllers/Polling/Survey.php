<?php

namespace App\Controllers;
use App\Models\Msurvey;

class Survey extends BaseController
{


    public function index()
    {
        // Cek apakah cookie 'is_filled' sudah ada
        $isFilledCookie = $this->request->getCookie('is_filled');

        if ($isFilledCookie !== null) {
            // Jika cookie 'is_filled' sudah ada, redirect ke '/'

            return redirect()->to('/');
        }

        return view('content/vsurvey');
    }

    public function sendForm()
    {
        $surveyModel = new Msurvey();

        $nama = $this->request->getPost('nama');
        $email = $this->request->getPost('email');
        $usia = $this->request->getPost('usia');
        $domisili = $this->request->getPost('domisili');
        $is_buy = $this->request->getPost('is_buy');
        $deskripsi = $this->request->getPost('deskripsi');
        $frekuensi = $this->request->getPost('frekuensi');
        $faktor = $this->request->getPost('faktor');
        $faktor_lain = $this->request->getPost('faktor_lain');

        // Insert data using model method
        $inserted = $surveyModel->insertData($nama, $email, $usia, $domisili, $is_buy, $deskripsi, $frekuensi, $faktor, $faktor_lain);

        if ($inserted) {
            helper('cookie');    
            set_cookie('is_filled', 'true', 600);  
            return redirect()->to(base_url('/'))->with('success', 'Data berhasil disimpan.')->withCookies();
        } else {
            return redirect()->to(base_url('/survey'))->with('error', 'Gagal menyimpan data. Silakan coba lagi.');
        }
        
    }

    public function checkEmail()
    {
        $email = $this->request->getPost('email'); // Ambil email dari permintaan POST

        $surveyModel = new Msurvey();
        $result = $surveyModel->where('email', $email)->countAllResults();

        if ($result > 0) {
            // Jika email sudah ada
            $response['exists'] = true;
        } else {
            // Jika email belum ada
            $response['exists'] = false;
        }

        // Encode response sebagai JSON dan kirim kembali
        return $this->response->setJSON($response);
    }
}