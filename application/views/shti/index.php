  <!-- Begin Page Content -->
  <div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <?= form_error('shti', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
        <?= $this->session->flashdata('message'); ?>
        <button class="btn btn-primary" data-toggle="modal" data-target="#NewShtiModalLong"><i class="fas fa-plus"></i> Add New</button> |
        <a class="btn btn-warning" href="<?= base_url('upload_shti/upload'); ?>"><i class="fas fa-upload"></i> Upload File</a> |
        <a href="<?= base_url('shti/print'); ?>" class="btn btn-success"><i class="fas fa-print"></i> Print</a> |
        <a href="<?= base_url('shti/pdf'); ?>" class="btn btn-secondary"><i class="fa fa-file"></i> Export PDF</a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTableshti" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No. IDLA/SKPI</th>
                <th>Supplier</th>
                <th>Name Vessel</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($shti as $s) : ?>
                <tr>
                  <td><?= $s->no_idla ?></td>
                  <td><?= $s->supplier ?></td>
                  <td><?= $s->name_vessel ?></td>
                  <td colspan="2">
                    <?= anchor('shti/detail/' . $s->id_idla, '<button class="btn btn-small"><i class="fas fa-info-circle"></i></button>'); ?>
                    <?= anchor('shti/edit/' . $s->id_idla, '<button class="btn btn-small"><i class="fas fa-edit"></i></button>'); ?>
                    <?= anchor('shti/delete/' . $s->id_idla, '<button class="btn btn-small text-danger"><i class="fas fa-trash"></i></button>'); ?>
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
  <!-- End of Main Content-->

  <!-- Modal Input SHTI-->
  <div class="modal fade" id="NewShtiModalLong" tabindex="-1" role="dialog" aria-labelledby="NewShtiModalLong" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="NewShtiModalLong">Input New SHTI</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post" class="formSHTI" action="<?= base_url() . 'shti/add' ?>">
            <div class="form-group">
              <label for="no_idla">No IDLA/SKPI</label>
              <input type="text" class="form-control" id="no_idla" name="no_idla">
              <?= form_error('no_idla', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
              <label for="supplier">Supplier</label>
              <input type="text" class="form-control" id="supplier" name="supplier">
              <?= form_error('supplier', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group row">
              <div class="col-lg-9">
                <label for="name_vessel">Vessel Name</label>
                <select id="name_vessel" class="form-control" name="name_vessel">
                  <option value="">--</option>
                  <?php foreach ($vessel as $v) : ?>
                    <option value="<?= $v['name_vessel']; ?>"><?= $v['name_vessel']; ?></option>
                  <?php endforeach; ?>
                </select>
                <?= form_error('name_vessel', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="col-lg-3">
                <label for="gt">GT</label>
                <input type="number" class="form-control" id="gt" name="gt" readonly>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-lg-9">
                <label for="Catch">Catch Method</label>
                <input type="text" class="form-control" id="catch" name="catch" readonly>
              </div>
              <div class="col-lg-3">
                <label for="lenght">Length</label>
                <input type="number" class="form-control" id="length" name="length" readonly>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-lg-3">
                <label for="wpp">WPP</label>
                <select id="wpp" class="form-control" name="wpp">
                  <option>--</option>
                  <option>57</option>
                  <option>71</option>
                </select>
                <?= form_error('wpp', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="col-lg">
                <label for="port">Port Of Landing Fish</label>
                <input type="number" class="form-control" id="port" name="port">
                <?= form_error('port', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-lg">
                <label for="Captain">Captain Name</label>
                <input type="text" class="form-control" id="captain" name="captain">
                <?= form_error('captain', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-lg">
                <label for="trip">Tripdates</label>
                <input type="date" class="form-control" id="trip" name="trip">
                <?= form_error('trip', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="col-lg">
                <label for="until">S/D</label>
                <input type="date" class="form-control" id="until" name="until">
                <?= form_error('until', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-lg-6">
                <label for="species">Species Fish</label>
                <select id="species" class="form-control" name="species">
                  <option>--</option>
                  <?php foreach ($fish as $f) : ?>
                    <option value="<?= $f['name_fish']; ?>"><?= $f['name_fish']; ?></option>
                  <?php endforeach; ?>
                </select>
                <?= form_error('species', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <button class="append">Tes append</button>
              <div class="col-lg-4">
                <button class="after">Tes after</button>
                <label for="qty">Qty</label>
                <input type="number" class="form-control" name="qty" id="qty">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-lg-6">
                <label for="rfmo">RFMO</label>
                <input type="text" class="form-control" id="rfmo" name="rfmo" readonly>
              </div>
              <div class="col-lg-6">
                <label for="no_rfmo">No RFMO</label>
                <input type="number" class="form-control" id="no_rfmo" name="no_rfmo" readonly>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-lg-6">
                <label for="issf">ISSF</label>
                <input type="text" class="form-control" id="issf" name="issf" readonly>
              </div>
              <div class="col-lg-6">
                <label for="no_issf">No ISSF</label>
                <input type="number" class="form-control" id="no_issf" name="no_issf" readonly>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-lg-3">
                <label for="fip">FIP AREA</label>
                <select id="fip" class="form-control" name="fip">
                  <option>--</option>
                  <option>YES</option>
                  <option>N/A</option>
                </select>
                <?= form_error('fip', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="col-lg">
                <label for="area">Area</label>
                <input type="text" class="form-control" id="area" name="area">
                <?= form_error('area', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-lg">
                <label for="note">Spesial Notes</label>
                <textarea class="form-control" id="note" rows="3" name="note"></textarea>
                <?= form_error('note', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
            </div>
            <button type="reset" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-window-close"></i> Close</button> |
            <button type="submit" class="btn btn-primary" name="btnsave"><i class="far fa-save"></i> Save</button>
        </div>
        </form>
      </div>
    </div>
  </div>