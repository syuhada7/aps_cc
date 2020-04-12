<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-6">
            <form action="<?= base_url() . 'menu/update_submenu' ?>" method="post">
                <div class="body">
                    <?php foreach ($submenu as $sm) : ?>
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="id" name="id" value="<?= $sm->id ?>" required>
                            <input type="text" class="form-control" id="title" name="title" value="<?= $sm->title ?>" required>
                        </div>
                        <div class="form-group">
                            <select name="menu" id="menu" class="form-control" required>
                                <option value="">Select Menu</option>
                                <?php foreach ($menu as $m) : ?>
                                    <option value="<?= $m->id ?>"><?= $m->menu ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="url" name="url" value="<?= $sm->url ?>" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="icon" name="icon" value="<?= $sm->icon ?>" required>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked required>
                                <label class="form-check-label" for="is_active">Active ?</label>
                            </div>
                        </div>
                </div>
                <a class="btn btn-danger" href="<?= base_url('menu/submenu'); ?>"><i class="fas fa-arrow-left"></i> Back</a> |
                <button type="submit" class="btn btn-primary" name="btnsave"> <i class="fas fa-save"></i> Save</button>
            <?php endforeach; ?>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->