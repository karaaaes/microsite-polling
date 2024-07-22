<div class="card-wrapper active-step">
    <div class="card-row">
        <div class="card-full">
        <div class="alert alert-all" style="display:none;"><i class="icon-alert"></i> Pertanyaan ini harus diisi!</div>
            <div class="card-title-red">Data Diri</div>
            <div class="card-form">
                <div class="form-group">
                    <label class="form-label">Nama</label>
                    <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan nama Anda">
                    <label class="form-label-error label-nama" style="display:none;">Nama harus diiisi</label>
                </div>
                <div class="form-group">
                    <label class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Masukkan email Anda">
                    <label class="form-label-error label-email" style="display:none;">Email harus diisi</label>
                    <label class="form-label-error label-email-exist" style="display:none;">Email sudah ada</label>
                </div>
                <div class="form-group">
                    <label class="form-label">Usia</label>
                    <input type="number" id="usia" name="usia" min="0" maxlength="2" class="form-control" placeholder="Masukkan usia Anda">
                    <label class="form-label-error label-usia" style="display:none;">Usia harus diisi</label>
                </div>
                <div class="form-group">
                    <label class="form-label">Domisili</label>
                    <div>
                        <input type="radio" id="domisili1" name="domisili" value="0">
                        <label for="domisili1">JABODETABEK</label>
                    </div>
                    <div>
                        <input type="radio" id="domisili2" name="domisili" value="1">
                        <label for="domisili2">Luar JABODETABEK</label>
                    </div>
                    <label class="form-label-error label-domisili" style="display:none;">Domisili harus diisi</label>
                </div>
            </div>
        </div>
    </div>

    <div class="card-row center">
        <div class="btn-group">
            <button type="button" class="btn-next" id="nextStep1" onclick="nextStep()">Selanjutnya <i class="icon-next-w"></i></button>
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