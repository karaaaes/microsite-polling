<div class="card-wrapper">
    <div class="card-row">
        <div class="card-full">
        <div class="alert alert-all-step4" style="display:none;"><i class="icon-alert"></i> Pertanyaan ini harus diisi!</div>
            <div class="card-form">
                <div class="form-group">
                    <label class="form-label">Dalam seminggu, berapa kali Anda membeli Frozen Food?</label>
                    <div>
                        <input type="radio" id="frekuensi1" name="frekuensi" value="0">
                        <label for="frekuensi1">1 - 2 kali</label> 
                    </div>
                    <div>
                        <input type="radio" id="frekuensi2" name="frekuensi" value="1"> 
                        <label for="frekuensi2">3 - 4 kali</label>
                    </div>
                    <div>
                        <input type="radio" id="frekuensi3" name="frekuensi" value="2"> 
                        <label for="frekuensi3">> 5 kali</label>
                    </div>
                    <label class="form-label-error label-frekuensi" style="display:none;">Frekuensi harus diisi</label>
                </div>
            </div>
        </div>
    </div>

    <div class="card-row center">
        <div class="btn-group">
            <!-- <button type="submit" class="btn-prev"><i class="icon-prev-b"></i> Sebelumnya</button> -->
            <!-- <button type="submit" class="btn-next">Selanjutnya <i class="icon-next-w"></i></button> -->
            <button type="button" class="btn-prev" onclick="previousStep()"><i class="icon-prev-b"></i> Sebelumnya</button>
            <button type="button" class="btn-next" onclick="nextStep()">Selanjutnya <i class="icon-next-w"></i></button>
        </div>
    </div>

    <div class="card-row center">
        <div class="card-logo">
            <div class="heading">Supported by:</div>
            <div class="logo-list">
                <div class="logo"><img src="<?= base_url() ?>public/assets/images/logo-inews.svg" alt="img info" width="78"
                        height="28"></div>
                <div class="logo"><img src="<?= base_url() ?>public/assets/images/logo-sindonews.svg" alt="img info"
                        width="178" height="33"></div>
                <div class="logo"><img src="<?= base_url() ?>public/assets/images/logo-okezone.svg" alt="img info" width="120"
                        height="28"></div>
            </div>
        </div>
    </div>
</div>