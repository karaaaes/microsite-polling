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
        $isFilledCookie = $this->request->getCookie('is_filled');

        if ($isFilledCookie == null || empty($isFilledCookie)) {
            return redirect()->to(base_url('/'));
        }

        $data['stepdone'] = "";

        $currentURL = $_SERVER['HTTP_HOST'];

        if ($currentURL == 'localhost') {
            $permalink = 'localhost/ninjaexpress/';
        } elseif ($currentURL == 'event-dev.okezone.com') {
            $permalink = 'https://event-dev.okezone.com/polling/';
        }else{
            $permalink = 'https://event.okezone.com/polling/';
        }

        // Share to 
		$data['facebook_share'] 				= generateFacebookShareUrl();
		$data['twitter_share']					= generateTwitterShareUrl($permalink);
		$data['whatsapp_share']					= whatsapp_share();
		// End of Logic

        return view('content/vstepdone', $data);
    }

    public function exportCsv()
{
        // Load model t_content
        $surveyModel = new Msurvey(); // Ganti dengan nama model yang sesuai

        // Ambil semua data dari tabel t_content
        $data = $surveyModel->findAll();

        $content = array();
        for($i = 0; $i < count($data); $i++){
            $content[$i]['no'] = $i+1;
            $content[$i]['nama'] = $data[$i]['nama']; 
            $content[$i]['email'] = $data[$i]['email']; 
            $content[$i]['usia'] = $data[$i]['usia']; 

            if($data[$i]['domisili'] == '0'){
                $domisili = 'JABODETABEK';
            }else{
                $domisili = 'LUAR JABODETABEK';
            }
            $content[$i]['domisili'] = $domisili;

            if($data[$i]['is_buy'] == '0'){
                $is_buy = 'Tidak';
            }else{
                $is_buy = 'Ya';
            }
            $content[$i]['is_buy'] = $is_buy; 

            $content[$i]['deskripsi'] = $data[$i]['deskripsi']; 

            if($data[$i]['frekuensi'] == '0'){
                $frekuensi = '1-2 Kali';
            }else if($data[$i]['frekuensi'] == '1'){
                $frekuensi = '3-4 Kali';
            }else{
                $frekuensi = '> 5 Kali';
            }
            $content[$i]['frekuensi'] = $frekuensi; 
            $content[$i]['faktor'] = $data[$i]['faktor']; 
            $content[$i]['date_created'] = $data[$i]['date_created']; 
        }

        // Header untuk file CSV
        $csvFileName = 'Survey Result - ' . date('Y-m-d') . '.csv';
        $headers = [
            'Content-Type'        => 'text/csv',
            'Content-Disposition' => 'attachment; filename=' . $csvFileName,
        ];

        // Siapkan output buffer
        $output = fopen('php://output', 'w');

        // Set delimiter ke ';'
        $delimiter = ';';

        // Tulis header CSV (nama kolom)
        fputcsv($output, array_keys((array) $content[0]), $delimiter);

        // Tulis data baris per baris
        foreach ($content as $row) {
            fputcsv($output, (array) $row, $delimiter);
        }

        // Tutup output buffer
        fclose($output);

        // Kembalikan response dengan headers yang ditetapkan
        return $this->response
            ->setContentType('text/csv')
            ->setHeader('Content-Disposition', 'attachment; filename=' . $csvFileName);
    }

}