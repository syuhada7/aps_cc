<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-6">
            <?= form_open_multipart('upload_shti/update'); ?>
            <?php foreach ($file_shti as $fs) : ?>
                <div class="form-group">
                    <label for="name_vessel">No IDLA</label>
                    <input type="text" name="no_idla" id="no_idla" class="form-control" value="<?= $fs->no_idla ?>" readonly>
                </div>
                <div class="form-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="shti" name="shti" value="<?= $fs->shti ?>">
                        <label class="custom-file-label" for="shti"><?= $fs->shti ?></label>
                    </div>
                </div>
                <a type="button" class="btn btn-danger" href="<?= base_url('upload_shti/upload') ?>"><i class="fas fa-arrow-left"></i> Back</a>
                <button type="submit" class="btn btn-primary" name="submit"><i class="far fa-save"></i> Save</button>
            <?php endforeach; ?>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->