<script>
    let currentStep = 0;
    const steps = document.querySelectorAll('.card-wrapper');
    const stepList = document.querySelectorAll('.step-list .step');

    function showStep(step) {
        steps.forEach((element, index) => {
            element.classList.toggle('active-step', index === step);
            if (index <= step) {
                stepList[index].classList.add('active');
            } else {
                stepList[index].classList.remove('active');
            }
        });
    }

    function nextStep() {

        if (currentStep === 0) {
            let nama = document.getElementById("nama").value;
            let email = document.getElementById("email").value;
            let usia = document.getElementById("usia").value;
            let domisili1 = document.getElementById("domisili1").checked;
            let domisili2 = document.getElementById("domisili2").checked;

            let valid = true;

            function isValidEmail(email) {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return emailRegex.test(email);
            }

            if(!nama && !email && !usia && (!domisili1 || !domisili2)){
                let alertElement = document.querySelector('.alert-all');
                alertElement.style.display = 'flex';
                setTimeout(function() {
                    alertElement.style.display = 'none';
                }, 2000);
            }else{
                document.querySelector('.alert-all').style.display = 'none';
            }

            if (!nama) {
                document.querySelector('.label-nama').style.display = 'block';
                valid = false;
            } else {
                document.querySelector('.label-nama').style.display = 'none';
            }

            if (!email) {
                document.querySelector('.label-email').style.display = 'block';
                valid = false;
            } else if (!isValidEmail(email)) {
                document.querySelector('.label-email').style.display = 'block';
                document.querySelector('.label-email').textContent = 'Format tidak sesuai';
                valid = false;
            } else {
                document.querySelector('.label-email').style.display = 'none';
            }

            if (!usia) {
                document.querySelector('.label-usia').style.display = 'block';
                valid = false;
            } else {
                document.querySelector('.label-usia').style.display = 'none';
            }

            if (!domisili1 && !domisili2) {
                document.querySelector('.label-domisili').style.display = 'block';
                valid = false;
            } else {
                document.querySelector('.label-domisili').style.display = 'none';
            }

            if (document.querySelector('.label-email-exist').style.display === 'block') {
                valid = false;
            }

            if (!valid) {
                return; // Exit function if fields are not filled
            }
        }else if (currentStep === 1) {
            let is_buy_yes = document.getElementById("is_buy_yes").checked;
            let is_buy_no = document.getElementById("is_buy_no").checked;

            let valid = true;

            if (!is_buy_yes && !is_buy_no) {
                let alertElement = document.querySelector('.alert-all-step2');
                alertElement.style.display = 'flex';
                setTimeout(function() {
                    alertElement.style.display = 'none';
                }, 2000);
                valid = false;
            } else {
                document.querySelector('.alert-all-step2').style.display = 'none';
            }

            if (!valid) {
                return; // Exit function if fields are not filled
            }
        }else if (currentStep === 2) {
            let deskripsi = document.getElementById("deskripsi").value;

            let valid = true;

            if (!deskripsi) {
                let alertElement = document.querySelector('.alert-all-step3');
                alertElement.style.display = 'flex';
                setTimeout(function() {
                    alertElement.style.display = 'none';
                }, 2000);
                valid = false;
            } else {
                document.querySelector('.alert-all-step3').style.display = 'none';
            }

            if (!valid) {
                return; // Exit function if fields are not filled
            }
        }else if (currentStep === 3) {
            let frekuensi1 = document.getElementById("frekuensi1").checked;
            let frekuensi2 = document.getElementById("frekuensi2").checked;
            let frekuensi3 = document.getElementById("frekuensi3").checked;

            let valid = true;

            if (!frekuensi1 && !frekuensi2 && !frekuensi3) {
                let alertElement = document.querySelector('.alert-all-step4');
                alertElement.style.display = 'flex';
                setTimeout(function() {
                    alertElement.style.display = 'none';
                }, 2000);
                valid = false;
            } else {
                document.querySelector('.alert-all-step4').style.display = 'none';
            }

            if (!valid) {
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

    document.addEventListener('DOMContentLoaded', function () {
        showStep(currentStep);
    });

    document.getElementById('usia').addEventListener('keydown', function (e) {
    // Allow: backspace, delete, tab, escape, enter, ., and arrows
    if ([46, 8, 9, 27, 13, 110, 190].indexOf(e.keyCode) !== -1 ||
        // Allow: Ctrl+A, Command+A
        (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
        // Allow: home, end, left, right, down, up
        (e.keyCode >= 35 && e.keyCode <= 40)) {
        // Let it happen, don't do anything
        return;
    }
    
    // Prevent '-' character
    if (e.key === '-') {
        e.preventDefault();
        return;
    }
    
    // Ensure that it is a number and stop the keypress if not
    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
        e.preventDefault();
    }
});

document.getElementById('usia').addEventListener('input', function (e) {
    let value = e.target.value;
    if (value.length > 2) {
        e.target.value = value.slice(0, 2);
    }
});


        

    $(document).ready(function () {
        $('#email').on('input', function () {
            var email = $(this).val();
            $.ajax({
                url: '<?php echo base_url('survey/checkEmail'); ?>',
                method: 'POST',
                dataType: 'json',
                data: {
                    email: email
                },
                success: function (response) {
                    console.log(response)
                    if (response.exists == true) {
                        document.querySelector('.label-email-exist').style.display = 'block';
                        document.querySelector('.label-email').style.display = 'none';
                    } else {
                        document.querySelector('.label-email-exist').style.display = 'none';
                    }
                },
                error: function (xhr, status, error) {
                    console.error('AJAX Error:', error);
                }
            });
        });
    });

    document.addEventListener('DOMContentLoaded', function () {
    const checkboxes = document.querySelectorAll('input[name="faktor[]"]');
    const faktorLainCheckbox = document.getElementById('faktor7');
    const faktorLainInput = document.getElementById('faktor_lain');
    const faktorLainError = document.querySelector('.cb-other .form-label-error');

    function validateCheckboxes() {
        let checkedCount = 0;

        checkboxes.forEach(checkbox => {
            if (checkbox.checked) {
                checkedCount++;
            }
        });

        if (checkedCount < 1) {
            let alertElement = document.querySelector('.alert-all-step5');
            alertElement.innerHTML = "<i class='icon-alert'></i> Pertanyaan ini harus diisi!";
            alertElement.style.display = 'flex';
            alertElement.style.width = '242px';
            alertElement.style.left = '50%';
            setTimeout(function() {
                alertElement.style.display = 'none';
            }, 2000);
            valid = false;
            return;
        }else{
            document.querySelector('.alert-all-step5').style.display = 'none';
        }
        
        if (checkedCount < 3 && checkedCount >= 1) {
            let alertElement = document.querySelector('.alert-all-step5');
            alertElement.innerHTML = "<i class='icon-alert'></i> Pilih 3 faktor!";
            alertElement.style.display = 'flex';
            alertElement.style.width = '143px';

            // Apply 'left: 60%' only for mobile devices
            if (window.matchMedia("(max-width: 767px)").matches) {
                    alertElement.style.left = '60%';
            } else {
                alertElement.style.left = ''; // Remove the left style for non-mobile devices
            }

            if (faktorLainCheckbox.checked && !faktorLainInput.value.trim()) {
                faktorLainError.style.display = 'flex';
            } else {
                faktorLainError.style.display = 'none';
            }

            setTimeout(function() {
                alertElement.style.display = 'none';
            }, 2000);
            valid = false;
            return;
        }else{
            document.querySelector('.alert-all-step5').style.display = 'none';
        }

        if (faktorLainCheckbox.checked && !faktorLainInput.value.trim()) {
            faktorLainError.style.display = 'flex';
            return false;
        } else {
            faktorLainError.style.display = 'none';
        }

        return true;
    }

    function handleCheckboxChange() {
        if (faktorLainCheckbox.checked) {
            document.querySelector('.cb-other').classList.remove('hidden');
        } else {
            document.querySelector('.cb-other').classList.add('hidden');
            faktorLainInput.value = ''; // Clear the input when hidden
        }
    }

    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', handleCheckboxChange);
    });

    document.getElementById('submit_button').addEventListener('click', function (event) {
        if (!validateCheckboxes()) {
            event.preventDefault(); // Prevent form submission if validation fails
        }
    });
});

</script>