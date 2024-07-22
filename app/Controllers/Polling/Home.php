<?php

namespace App\Controllers;
use App\Models\Msurvey;

class Home extends BaseController
{
    public function index()
    {
        $isFilledCookie = $this->request->getCookie('is_filled');

        if ($isFilledCookie !== null) {
            return redirect()->to(base_url('success'));
        }
        

        $data['step1'] = view('content/vstep1');
        $data['step2'] = view('content/vstep2');
        $data['step3'] = view('content/vstep3');
        $data['step4'] = view('content/vstep4');
        $data['step5'] = view('content/vstep5');

        $data['js'] = view('tpl/vjs');

        return view('pages/vpages', $data);
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
            set_cookie('is_filled', 'true', 3600);  
            return redirect()->to(base_url('/success'))->withCookies();
        } else {
            return redirect()->to(base_url('/'));
        }
        
    }

    public function success()
    {
        $data['stepdone'] = "";

        return view('content/vstepdone', $data);
    }
}
