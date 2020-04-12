<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <?= $this->session->flashdata('message'); ?>
      <button class="btn btn-primary" data-toggle="modal" data-target="#UploadModalLong"><i class="fas fa-plus"></i> New Upload File</button>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <th>File SIPI</th>
            <th>File Manning</th>
            <th>File SIUP</th>
            <th>File Pas Kapal</th>
            <th>File Surat Ukur</th>
            <th>Date Update</th>
            <th colspan="2">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($file_vessel as $fv) : ?>
              <tr>
                <td>
                  <?= $fv->sipi; ?>
                  <?= anchor('upload_vessel/download/' . $fv->sipi, '<button class="btn btn-small text-primary"><i class="fas fa-download"></i></button>'); ?>
                </td>
                <td>
                  <?= $fv->manning; ?>
                  <?= anchor('upload_vessel/download/' . $fv->manning, '<button class="btn btn-small text-primary"><i class="fas fa-download"></i></button>'); ?>
                </td>
                <td>
                  <?= $fv->siup ?>
                  <?= anchor('upload_vessel/download/' . $fv->siup, '<button class="btn btn-small text-primary"><i class="fas fa-download"></i></button>'); ?>
                </td>
                <td>
                  <?= $fv->pas_kapal ?>
                  <?= anchor('upload_vessel/download/' . $fv->pas_kapal, '<button class="btn btn-small text-primary"><i class="fas fa-download"></i></button>'); ?>
                </td>
                <td>
                  <?= $fv->ukur ?>
                  <?= anchor('upload_vessel/download/' . $fv->ukur, '<button class="btn btn-small text-primary"><i class="fas fa-download"></i></button>'); ?>
                </td>
                <td>
                  <?= date('d F Y', $fv->date_create) ?>
                </td>
                <td>
                  <?= anchor('upload_vessel/edit/' . $fv->id_upload, '<button class="btn btn-small"><i class="fas fa-edit"></i></button>'); ?>
                </td>
                <td onclick="javascript: return confirm('Are you sure delete Vessel <?= $fv->name_vessel ?> ?')">
                  <?= anchor('upload_vessel/delete/' . $fv->id_upload, '<button class="btn btn-small text-danger"><i class="fas fa-trash"></i></button>'); ?>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <a href="<?= base_url('vessel'); ?>" class="btn btn-danger"><i class="fas fa-arrow-left"></i> Back</a>
    </div>
  </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->

<!-- Modal upload-->
<div class="modal fade" id="UploadModalLong" tabindex="-1" role="dialog" aria-labelledby="UploadModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="UploadModalLongTitle">Upload File</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= form_open_multipart('upload_vessel/add'); ?>
        <div class="form-group">
          <label for="name_vessel">Name Vessel</label>
          <select name="name_vessel" id="name_vessel" class="form-control">
            <option>--</option>
            <?php foreach ($vessel as $v) : ?>
              <option value="<?= $v['name_vessel']; ?>"><?= $v['name_vessel']; ?></option>
            <?php endforeach; ?>
          </select>
          <?= form_error('name_vessel', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="sipi" name="sipi">
            <label class="custom-file-label" for="sipi">Upload file SIPI</label>
          </div>
        </div>
        <div class="form-group">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="manning" name="manning">
            <label class="custom-file-label" for="manning">Upload file Manning</label>
          </div>
        </div>
        <div class="form-group">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="siup" name="siup">
            <label class="custom-file-label" for="siup">Upload SIUP</label>
          </div>
        </div>
        <div class="form-group">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="pas_kapal" name="pas_kapal">
            <label class="custom-file-label" for="pas_kapal">Upload PAS Kapal</label>
          </div>
        </div>
        <div class="form-group">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="ukur" name="ukur">
            <label class="custom-file-label" for="ukur">Upload Surat Ukur</label>
          </div>
        </div>
        <button type="reset" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-window-close"></i> Close</button>
        <button type="submit" class="btn btn-primary" name="submit"><i class="far fa-save"></i> Save</button>
        </form>
      </div>
    </div>
  </div>
</div>