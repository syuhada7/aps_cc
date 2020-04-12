<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-6">
            <?php foreach ($role as $r) : ?>
                <form action="<?= base_url() . 'admin/update_role'; ?>" method="post">
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="id" name="id" value="<?= $r->id ?>">
                        <label for="role">Name role</label>
                        <input type="text" class="form-control" id="role" name="role" value="<?= $r->role ?>">
                        <?= form_error('role', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <a class="btn btn-danger" href="<?= base_url('admin/role'); ?>"><i class="fas fa-arrow-left"></i> Back</a> |
                    <button type="submit" class="btn btn-primary" name="btnsave"><i class="fas fa-save"></i> Save</button>
                </form>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->