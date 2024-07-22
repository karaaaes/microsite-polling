<?php 

function whatsapp_share(){
    $title0 = "*Halo teman - teman!*";
    $title1 = "Saya baru saja mengisi survei mengenai Frozen Food, dan ingin mengajak kalian semua untuk ikut berpartisipasi. Survei ini sangat penting untuk meningkatkan kualitas kepuasan pelanggan.";
    $title2 = "Berikut link surveinya %3A ";
    $title3 = "Yuk, luangkan waktu sejenak untuk mengisi survei ini. Terima kasih banyak!!";
	$cleaned_string = string_clean($title3);
	$final_title = str_replace(" ", "+", $cleaned_string);
	$final_title = "https://api.whatsapp.com/send?text=$title0%0A$title1%0A%0A$title2+".base_url()."%0A$final_title%21";

	return $final_title;
}

function generateFacebookShareUrl() {
    $facebookShareUrl = "https://www.facebook.com/sharer.php?u=".base_url();
    return $facebookShareUrl;
}

function generateTwitterShareUrl(){
    // Gantikan enter dengan newline karakter \n
    $title = "Halo teman - teman! Saya baru saja mengisi survei mengenai Frozen Food, dan ingin mengajak kalian semua untuk ikut berpartisipasi. Survei ini sangat penting untuk meningkatkan kualitas kepuasan pelanggan.\n\nBerikut link surveinya : " . base_url();
    $encoded_title = urlencode($title);

    // Buat URL untuk Twitter
    $twitterUrl = "https://twitter.com/intent/tweet?text=$encoded_title";

    return $twitterUrl;
}

function whatsapp_url($params) {
    $url = base_url() . "?utm_medium=sosmed&utm_source=whatsapp";
    $encodedUrl = urlencode($url);
	$encodedUrl = $encodedUrl . "%0D%0A%0D%0A" . base_url();
    return $encodedUrl;
}

function string_clean($string) {
    $cleanedString = preg_replace('/[^\p{L}\p{N}\s]/u', '', $string);

    return $cleanedString;
}

?>