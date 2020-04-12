  <!-- Begin Page Content -->
  <div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <?= form_error('vessel', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
        <?= $this->session->flashdata('message'); ?>
        <button class="btn btn-primary" data-toggle="modal" data-target="#NewVesselModalLong"><i class="fas fa-plus"></i> Add New</button> |
        <a class="btn btn-warning" href="<?= base_url('upload_vessel/upload'); ?>"><i class="fas fa-upload"></i> Upload File</a> |
        <a href="<?= base_url('vessel/print'); ?>" class="btn btn-success"><i class="fas fa-print"></i> Print</a> |
        <a href="<?= base_url('vessel/pdf'); ?>" class="btn btn-secondary"><i class="fa fa-file"></i> Export PDF</a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTablevessel" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Name Vessel</th>
                <th>No SIPI</th>
                <th>Status SIPI</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($vessel as $v) : ?>
                <tr>
                  <td><?= $v->name_vessel ?></td>
                  <td><?= $v->no_sipi ?></td>
                  <td><?= $v->status_sipi ?></td>
                  <td colspan="2">
                    <?= anchor('vessel/detail/' . $v->id_vessel, '<button class="btn btn-small"><i class="fas fa-info-circle"></i></button>'); ?>
                    <?= anchor('vessel/edit/' . $v->id_vessel, '<button class="btn btn-small"><i class="fas fa-edit"></i></button>'); ?>
                    <?= anchor('vessel/delete/' . $v->id_vessel, '<button class="btn btn-small text-danger"><i class="fas fa-trash"></i></button>'); ?>
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

  <!-- Modal Input Vessel-->
  <div class="modal fade" id="NewVesselModalLong" tabindex="-1" role="dialog" aria-labelledby="NewVesselModalLong" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="NewVesselModalLong">Input New Vessel</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post" action="<?= base_url() . 'vessel/add' ?>">
            <div class="form-group">
              <label for="name_vessel">Name Vessel</label>
              <input type="text" class="form-control" name="name_vessel" required>
              <?= form_error('name_vessel', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group row">
              <div class="col-lg-3">
                <label for="gt">GT</label>
                <input type="number" class="form-control" id="gt" name="gt" required>
                <?= form_error('gt', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="col-lg-3">
                <label for="nt">NT</label>
                <input type="number" class="form-control" id="nt" name="nt" required>
                <?= form_error('nt', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="col-lg-3">
                <label for="length">Length</label>
                <input type="number" class="form-control" id="length" name="length" required>
                <?= form_error('length', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-lg-6">
                <label for="catch">Catch Method</label>
                <select id="catch" class="form-control" name="catch" required>
                  <option>--</option>
                  <option>Pole And Line</option>
                  <option>Purse Seine</option>
                  <option>Hand Line</option>
                  <option>Others</option>
                </select>
                <?= form_error('catch', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-lg">
                <label for="regis">Registration Number</label>
                <input type="number" class="form-control" id="regis" name="regis" required>
                <?= form_error('regis', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-lg">
                <label for="port">Port Of Registry</label>
                <input type="number" class="form-control" id="port" name="port" required>
                <?= form_error('port', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-lg">
                <label for="place">Place</label>
                <input type="text" class="form-control" id="place" name="place" required>
                <?= form_error('place', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="col-lg">
                <label for="year">Year Of Build</label>
                <input type="date" class="form-control" id="year" name="year" required>
                <?= form_error('year', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-lg">
                <label for="base">Base Harbour</label>
                <input type="text" class="form-control" id="base" name="base" required>
                <?= form_error('base', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-lg-3">
                <label for="rfmo">RFMO</label>
                <select id="rfmo" class="form-control" name="rfmo" required>
                  <option>--</option>
                  <option>IOTC</option>
                  <option>CCSBT</option>
                  <option>WCPFC</option>
                  <option>IATTC</option>
                </select>
                <?= form_error('rfmo', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="col-lg-6">
                <label for="no_rfmo">No RFMO</label>
                <input type="number" class="form-control" id="no_rfmo" name="no_rfmo" required>
                <?= form_error('no_rfmo', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-lg-3">
                <label for="issf">ISSF</label>
                <select id="issf" class="form-control" name="issf" required>
                  <option>--</option>
                  <option>UVI</option>
                  <option>IMO</option>
                  <option>TUVI</option>
                </select>
                <?= form_error('issf', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="col-lg-6">
                <label for="no_issf">No ISSF</label>
                <input type="number" class="form-control" id="no_issf" name="no_issf" required>
                <?= form_error('no_issf', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-lg">
                <label for="owner">Owner</label>
                <input type="text" class="form-control" id="owner" name="owner" required>
                <?= form_error('owner', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-lg">
                <label for="address">Address</label>
                <textarea class="form-control" id="address" rows="3" name="address" required></textarea>
                <?= form_error('address', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-lg">
                <label for="no_siup">No SIUP</label>
                <input type="number" class="form-control" id="no_siup" name="no_siup" required>
                <?= form_error('no_siup', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-lg">
                <label for="no_sipi">No SIPI</label>
                <input type="number" class="form-control" id="no_sipi" name="no_sipi" required>
                <?= form_error('no_sipi', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-lg">
                <label for="valid_sipi">Valid SIPI</label>
                <input type="date" class="form-control" id="valid_sipi" name="valid_sipi" required>
                <?= form_error('valid_sipi', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="col-lg">
                <label for="until_sipi">Until SIPI</label>
                <input type="date" class="form-control" id="until_sipi" name="until_sipi" required>
                <?= form_error('until_sipi', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-lg-6">
                <label for="status_sipi">Status SIPI</label>
                <select id="status_sipi" class="form-control" name="status_sipi" required>
                  <option>--</option>
                  <option>ALL</option>
                  <option>Expired</option>
                  <option>Not Expired</option>
                </select>
                <?= form_error('status_sipi', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
            </div>
            <button type="reset" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-window-close"></i> Close</button> |
            <button type="submit" class="btn btn-primary" name="btnsave"><i class="far fa-save"></i> Save</button>
          </form>
        </div>
      </div>
    </div>
  </div>