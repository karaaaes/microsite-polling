<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-dns-prefetch-control" content="on">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#093a67">

    <title>Survei Polling iNews Media Group</title>
    <meta name="title" content="Survei Polling iNews Media Group">
    <meta name="description" content="Survei Polling iNews Media Group">
    <meta name="author" content="MPI">
    <meta name="image_src" content="">
    <meta name="google-site-verification" content="">
    <meta name="msvalidate.01" content="">

    <meta property="og:title" content="Survei Polling iNews Media Group">
    <meta property="og:description" content="Halo teman - teman! Saya baru saja mengisi survei mengenai Frozen Food, dan ingin mengajak kalian semua untuk ikut berpartisipasi. Survei ini sangat penting untuk meningkatkan kualitas kepuasan pelanggan. Berikut link surveinya : <?= base_url() ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= base_url(); ?>">
    <meta property="og:image" content="<?= base_url() . "public/assets/images/meta-image.png" ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robot" content="noindex">

    <link rel="icon" href="<?= base_url() . "public/assets/images/ico-mini-survey.svg" ?>" type="image/x-icon">
    <!-- css global -->
    <link rel="stylesheet" href="<?php echo base_url() ?>public/assets/css/style.css" />
    <style>
        .card-success{
            display: flex !important;
        }
    </style>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-5NLQMV7JKV"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-5NLQMV7JKV');
    </script>
</head>

<body>
    <header class="header">
        <div class="header-row">
            <div class="logo-header">
                <img src="<?php echo base_url() ?>public/assets/images/logo-header.svg" alt="img info" width="100" height="40">
            </div>
        </div>
    </header>
    <section class="body">
        <div class="container">
            <div class="card-wrapper card-success">
                <div class="card-row center">
                    <div class="card-fit">
                        <div class="card-img"><img src="<?php echo base_url() ?>public/assets/images/done.png" alt="done" width="84" height="103">
                        </div>
                        <div class="card-title-red">Terkirim!</div>
                        <div class="heading">Terima kasih atas jawaban dan waktu Anda. Pendapat serta opini yang Anda
                            berikan, sangat berharga bagi Kami.</div>
                    </div>
                </div>

                <div class="card-row center">
                    <div class="card-share">
                        <div class="card-social">Share:</div>
                        <div class="card-social"><a href="" id="myLink" class="copy-link" aria-label="link"><img src="<?php echo base_url() ?>public/assets/images/copy.png" alt="copy link" width="32"
                        height="32"></a></div>
                        <div class="card-social"><a href="<?= $whatsapp_share ?>" onclick="openInNewWindow(this.href); return false;"
                        aria-label="whatsapp"><img src="<?php echo base_url() ?>public/assets/images/wa.png" alt="whatsapp" width="32"
                        height="32"></a></div>
                        <div class="card-social"><a href="<?= $facebook_share ?>" onclick="openInNewWindow(this.href); return false;"
                        aria-label="facebook"><img src="<?php echo base_url() ?>public/assets/images/fb.png" alt="facebook" width="32"
                        height="32"></a></div>
                        <div class="card-social"><a href="<?= $twitter_share ?>" onclick="openInNewWindow(this.href); return false;"
                        aria-label="x"><img src="<?php echo base_url() ?>public/assets/images/x.png" alt="x" width="32" height="32"></a></div>
                    </div>
                </div>

                <div class="card-row center">
                    <div class="card-logo">
                        <div class="heading">Supported by:</div>
                        <div class="logo-list">
                            <div class="logo"><img src="<?php echo base_url() ?>public/assets/images/logo-inews.svg" alt="img info" width="78"
                                    height="28"></div>
                            <div class="logo"><img src="<?php echo base_url() ?>public/assets/images/logo-sindonews.svg" alt="img info" width="178"
                                    height="33"></div>
                            <div class="logo"><img src="<?php echo base_url() ?>public/assets/images/logo-okezone.svg" alt="img info" width="120"
                                    height="28"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="bg-img">&nbsp;</div>
    <footer class="footer">
        <div class="copyright">Copyright &copy; 2024 iNews Media Group</div>
    </footer>

    <!-- JS -->
    <script src="<?php echo base_url() ?>public/assets/js/jquery-3.6.0.min.js"></script>
    <script>
        function openInNewWindow(n){window.open(n,"_blank","width=600,height=400")}
        var linkElement = document.getElementById("myLink");

        function copyLink() {
            var baseUrl = "<?php echo base_url(); ?>"; // Retrieve base_url from CodeIgniter
            if (baseUrl) {
                var textarea = document.createElement("textarea");
                textarea.value = baseUrl;
                document.body.appendChild(textarea);
                textarea.select();
                document.execCommand("copy");
                document.body.removeChild(textarea);
                alert("Link telah disalin: " + baseUrl);
            }
        }

        linkElement && linkElement.addEventListener("click", function (e) {
            e.preventDefault();
            copyLink();
        });
    </script>
</body>

</html>