<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <?= $this->session->flashdata('message'); ?>
      <button class="btn btn-primary" data-toggle="modal" data-target="#UploadshtiModal"><i class="fas fa-plus"></i> New Upload File</button>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No IDLA</th>
              <th>File SHTI</th>
              <th>Date Upload</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($file_shti as $fs) : ?>
              <tr>
                <td>
                  <?= $fs->no_idla ?>
                </td>
                <td>
                  <?= $fs->shti; ?>
                  <?= anchor('upload_shti/download/' . $fs->shti, '<button class="btn btn-small text-primary"><i class="fas fa-download"></i></button>'); ?>
                </td>
                <td>
                  <?= date('d F Y', $fs->date_create) ?>
                </td>
                <td>
                  <?= anchor('upload_shti/edit/' . $fs->id_upload, '<button class="btn btn-small"><i class="fas fa-edit"></i></button>'); ?>
                  <?= anchor('upload_shti/delete/' . $fs->id_upload, '<button class="btn btn-small text-danger"><i class="fas fa-trash"></i></button>'); ?>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <a href="<?= base_url('shti'); ?>" class="btn btn-danger"><i class="fas fa-arrow-left"></i> Back</a>
    </div>
  </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->

<!-- Modal upload-->
<div class="modal fade" id="UploadshtiModal" tabindex="-1" role="dialog" aria-labelledby="UploadshtiModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="UploadshtiModal">Upload File</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-6">
            <?= form_open_multipart('upload_shti/add'); ?>
            <div class="form-group">
              <label for="no_idla">No IDLA</label>
              <select id="no_idla" class="form-control" name="no_idla">
                <option value="">--</option>
                <?php foreach ($shti as $s) : ?>
                  <option value="<?= $s['id_idla']; ?>"><?= $s['no_idla']; ?></option>
                <?php endforeach; ?>
              </select>
              <?= form_error('no_idla', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="shti" name="shti">
                <label class="custom-file-label" for="shti">Upload file SHTI</label>
              </div>
            </div>
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-window-close"></i> Close</button>
            <button type="submit" class="btn btn-primary" name="submit"><i class="far fa-save"></i> Save</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>