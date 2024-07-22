<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi-Step Form</title>
    <style>
        .step {
            display: none;
        }
        .step.active {
            display: block;
        }
        .disable{
            display: none;
        }
        .able{
            display: block;
        }
    </style>
</head>
<body>
    <form action="<?= base_url() . "sendform" ?>" method="POST" enctype="multipart/form-data">
        <!-- Step 1 -->
        <div class="step active">
            <h2>Step 1</h2>
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>

            <label for="usia">Usia:</label>
            <input type="number" id="usia" name="usia" min="0" required><br>

            <label>Domisili:</label>
            <input type="radio" id="domisili1" name="domisili" value="0" required>
            <label for="domisili1">Jabodetabek</label>
            <input type="radio" id="domisili2" name="domisili" value="1">
            <label for="domisili2">Luar Jabodetabek</label><br>

            <button type="button" id="nextStep1" onclick="nextStep()">Next</button>
        </div>

        <!-- Step 2 -->
        <div class="step">
            <h2>Step 2</h2>
            <label>Pernah membeli frozen food?</label>
            <input type="radio" id="is_buy_yes" name="is_buy" value="1" required>
            <label for="is_buy_yes">Ya</label>
            <input type="radio" id="is_buy_no" name="is_buy" value="0">
            <label for="is_buy_no">Tidak</label><br>

            <button type="button" onclick="previousStep()">Previous</button>
            <button type="button" onclick="nextStep()">Next</button>
        </div>

        <!-- Step 3 -->
        <div class="step">
            <h2>Step 3</h2>
            <label for="deskripsi">Description:</label>
            <textarea id="deskripsi" name="deskripsi"></textarea><br>

            <button type="button" onclick="previousStep()">Previous</button>
            <button type="button" onclick="nextStep()">Next</button>
        </div>

        <!-- Step 4 -->
        <div class="step">
            <h2>Step 4</h2>
            <label>Frekuensi:</label>
            <input type="radio" id="frekuensi1" name="frekuensi" value="0">
            <label for="frekuensi1">1-2 Kali</label>
            <input type="radio" id="frekuensi2" name="frekuensi" value="1">
            <label for="frekuensi2">3-4 Kali</label><br>
            <input type="radio" id="frekuensi2" name="frekuensi" value="2">
            <label for="frekuensi2">> 5 Kali</label><br>

            <button type="button" onclick="previousStep()">Previous</button>
            <button type="button" onclick="nextStep()">Next</button>
        </div>

        <!-- Step 5 -->
        <div class="step">
            <h2>Step 5</h2>
            <label>Alasan:</label>
            <input type="checkbox" id="faktor1" name="faktor[]" value="Tarif">
            <label for="faktor1">Tarif</label>
            <input type="checkbox" id="faktor2" name="faktor[]" value="Kecepatan">
            <label for="faktor2">Kecepatan</label>
            <input type="checkbox" id="faktor3" name="faktor[]" value="Keamanan">
            <label for="faktor3">Keamanan</label>
            <input type="checkbox" id="faktor4" name="faktor[]" value="Pemesanan Mudah & Praktis">
            <label for="faktor4">Pemesanan Mudah & Praktis</label>
            <input type="checkbox" id="faktor5" name="faktor[]" value="Pelacakan Realtime">
            <label for="faktor5">Pelacakan Realtime</label>
            <input type="checkbox" id="faktor6" name="faktor[]" value="Tidak Menggunakan Jasa Ekspedisi">
            <label for="faktor6">Tidak Menggunakan Jasa Ekspedisi</label>
            <input type="checkbox" id="faktor7" name="faktor[]">
            <label for="faktor7">Other</label>
            <input type="text" id="faktor_lain" name="faktor_lain"><br>

            <button type="button" onclick="previousStep()">Previous</button>
            <button type="submit" class="btn btn-primary button-custom">Submit</button>
        </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        let currentStep = 0;
        const steps = document.querySelectorAll('.step');

        function showStep(step) {
            steps.forEach((element, index) => {
                element.classList.toggle('active', index === step);
            });
        }

        function nextStep() {
            if (currentStep === 0) {
                let nama = document.getElementById("nama").value;
                let email = document.getElementById("email").value;
                let usia = document.getElementById("usia").value;
                let domisili1 = document.getElementById("domisili1").checked || document.getElementById("domisili2").checked;

                if (!nama || !email || !usia || !domisili1) {
                    // If any required field is empty, show alert
                    alert("Harap lengkapi semua field sebelum melanjutkan.");
                    return; // Exit function if fields are not filled
                }
            }

            const is_buy_no = document.getElementById('is_buy_no');
            if (currentStep === 1 && is_buy_no.checked) {
                currentStep = 4; // Skip to step 5
            } else {
                currentStep++;
            }
            showStep(currentStep);
        }

        function previousStep() {
            const is_buy_no = document.getElementById('is_buy_no');
            if (currentStep === 4 && is_buy_no.checked) {
                currentStep = 1; // Go back to step 2
            } else {
                currentStep--;
            }
            showStep(currentStep);
        }

        document.addEventListener('DOMContentLoaded', function() {
            showStep(currentStep);
        });

        $(document).ready(function() {
            $('#email').on('input', function() {
                var email = $(this).val();
                $.ajax({
                    url: '<?php echo base_url('survey/checkEmail'); ?>',
                    method: 'POST',
                    dataType: 'json',
                    data: {
                        email: email
                    },
                    success: function(response) {
                        console.log(response)
                        if (response.exists == true) {
                            $('#nextStep1').addClass('disable')
                        }else{
                            $('#nextStep1').removeClass('disable')
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('AJAX Error:', error);
                    }
                });
            });
        });

    </script>
</body>
</html>
