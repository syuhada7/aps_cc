<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-6">
            <?php foreach ($menu as $m) : ?>
                <form action="<?= base_url() . 'menu/update_menu'; ?>" method="post">
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="id" name="id" value="<?= $m->id ?>">
                        <label for="menu">Name menu</label>
                        <input type="text" class="form-control" id="menu" name="menu" value="<?= $m->menu ?>">
                        <?= form_error('menu', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <a class="btn btn-danger" href="<?= base_url('menu'); ?>"><i class="fas fa-arrow-left"></i> Back</a> |
                    <button type="submit" class="btn btn-primary" name="btnsave"><i class="fas fa-save"></i> Save</button>
                </form>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->