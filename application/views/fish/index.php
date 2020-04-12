      <!-- Begin Page Content -->
      <div class="container-fluid">

        <!-- Page Heading -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <?= $this->session->flashdata('message'); ?>
            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newfishModal">Add New Fish</a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTablefish" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Qty</th>
                    <th>Photo</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($fish as $f) : ?>
                    <tr>
                      <td><?= $f->name_fish ?></td>
                      <td><?= $f->qty ?></td>
                      <td><img src="<?= base_url('assets/img/fish/') . $f->photo; ?>" width="80px"></td>
                      <td>
                        <?= anchor('fish/delete/' . $f->id_fish, '<button class="btn btn-small text-danger"><i class="fas fa-trash"></i></button>'); ?>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->

      <!-- Modal New-->
      <div class="modal fade" id="newfishModal" tabindex="-1" role="dialog" aria-labelledby="newfishModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="newfishModal">Add New Fish</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <?= form_open_multipart('fish/add'); ?>
            <div class="modal-body">
              <div class="form-group">
                <input type="text" class="form-control" id="name_fish" name="name_fish" placeholder="Fish name" required>
              </div>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="photo" name="photo">
                <label class="custom-file-label" for="photo">Upload Photo</label>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-window-close"></i> Close</button>
              <button type="submit" class="btn btn-primary" name="btnadd"><i class="fas fa-save"></i> Add</button>
            </div>
            </form>
          </div>
        </div>
      </div>