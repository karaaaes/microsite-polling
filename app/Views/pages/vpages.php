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
    <meta property="og:url" content="<?= base_url(); ?>">
    <meta property="og:image" content="<?= base_url() . "public/assets/images/meta-image.png" ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robot" content="noindex">

    
    <!-- Icon untuk semua perangkat -->
    <link rel="icon" href="<?= base_url() . "public/assets/images/ico-mini-survey.svg" ?>" type="image/x-icon">

    <!-- css global -->
    <link rel="stylesheet" href="<?php echo base_url() ?>public/assets/css/style.css" />
    <style>
        .active-step {
            display: flex;
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
                <img src="<?php echo base_url() ?>public/assets/images/logo-header.svg" alt="img info" width="100"
                    height="40">
            </div>
            <div class="step-list">
                <div class="step active">
                    <div class="item" style="padding-top:2px;">1</div>
                </div>
                <div class="step">
                    <div class="item" style="padding-top:2px;">2</div>
                </div>
                <div class="step">
                    <div class="item" style="padding-top:2px;">3</div>
                </div>
                <div class="step">
                    <div class="item" style="padding-top:2px;">4</div>
                </div>
                <div class="step">
                    <div class="item" style="padding-top:2px;">5</div>
                </div>
            </div>
        </div>
    </header>
    <section class="body">
        <div class="container">
            <form action="<?= base_url() . "sendform" ?>" method="POST" enctype="multipart/form-data">
                <?php if(!empty($step1)){ echo $step1; } ?>
                <?php if(!empty($step2)){ echo $step2; } ?>
                <?php if(!empty($step3)){ echo $step3; } ?>
                <?php if(!empty($step4)){ echo $step4; } ?>
                <?php if(!empty($step5)){ echo $step5; } ?>
            </form>
        </div>
    </section>

    <div class="bg-img">&nbsp;</div>

    <footer class="footer">
        <div class="copyright">Copyright &copy; 2024 iNews Media Group</div>
    </footer>

    <!-- JS -->
    <script src="<?php echo base_url() ?>public/assets/js/jquery-3.6.0.min.js"></script>
    <?php if(!empty($js)){ echo $js; } ?>
    <script>
        $(document).ready(function () {
            $(".cbf").click(function () {
                var val = $(this).is(":checked");
                if (val) {
                    $(".cb-other").removeClass("hidden");
                } else {
                    $(".cb-other").addClass("hidden");
                    $(".cb-other").val("");
                }
            });
        });
    </script>

</body>

</html>