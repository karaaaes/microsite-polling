<div class="card-wrapper">
    <div class="card-row">
        <div class="card-full">
        <div class="alert alert-all-step3" style="display:none;"><i class="icon-alert"></i> Pertanyaan ini harus diisi!</div>
            <div class="card-form">
                <div class="form-group">
                    <label class="form-label">Jenis Frozen Food apa yang pernah Anda beli?</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Masukkan jawaban Anda"></textarea>
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