<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-6">
            <?= form_open_multipart('upload_vessel/update'); ?>
            <?php foreach ($file_vessel as $fv) : ?>
                <div class="form-group">
                    <label for="name_vessel">Name Vessel</label>
                    <input type="text" name="name_vessel" id="name_vessel" class="form-control" value="<?= $fv->name_vessel ?>" readonly>
                    <?= form_error('name_vessel', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="sipi" name="sipi" value="<?= $fv->sipi ?>">
                        <label class="custom-file-label" for="sipi"><?= $fv->sipi ?></label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="manning" name="manning" value="<?= $fv->manning ?>">
                        <label class="custom-file-label" for="manning"><?= $fv->manning ?></label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="siup" name="siup" value="<?= $fv->siup ?>">
                        <label class="custom-file-label" for="siup"><?= $fv->siup ?></label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="pas_kapal" name="pas_kapal" value="<?= $fv->pas_kapal ?>">
                        <label class="custom-file-label" for="pas_kapal"><?= $fv->pas_kapal ?></label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="ukur" name="ukur" value="<?= $fv->ukur ?>">
                        <label class="custom-file-label" for="ukur"><?= $fv->ukur ?></label>
                    </div>
                </div>
                <a type="button" class="btn btn-danger" href="<?= base_url('upload_vessel/upload') ?>"><i class="fas fa-arrow-left"></i> Back</a>
                <button type="submit" class="btn btn-primary" name="submit"><i class="far fa-save"></i> Save</button>
            <?php endforeach; ?>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->