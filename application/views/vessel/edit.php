<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="row">
    <div class="col-lg-6">
      <?php foreach ($vessel as $v) : ?>
        <form method="post" action="<?= base_url() . 'vessel/update'; ?>">
          <div class="form-group row">
            <label for="name_vessel">Name Vessel</label>
            <input type="hidden" class="form-control" name="id_vessel" value="<?= $v->id_vessel ?>">
            <input type="text" class="form-control" name="name_vessel" value="<?= $v->name_vessel ?>">
            <?= form_error('name_vessel', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <div class="form-group row">
            <div class="col-lg-3">
              <label for="gt">GT</label>
              <input type="number" class="form-control" id="gt" name="gt" value="<?= $v->gt ?>">
              <?= form_error('gt', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="col-lg-3">
              <label for="nt">NT</label>
              <input type="number" class="form-control" id="nt" name="nt" value="<?= $v->nt ?>">
              <?= form_error('nt', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="col-lg-3">
              <label for="length">Length</label>
              <input type="number" class="form-control" id="length" name="length" value="<?= $v->length ?>">
              <?= form_error('length', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-lg-6">
              <label for="catch">Catch Method</label>
              <select id="catch" class="form-control" name="catch" value="<?= $v->catch ?>">
                <option value="Pole And Line">Pole And Line</option>
                <option value="Purse Seine">Purse Seine</option>
                <option value="Hand Line">Hand Line</option>
                <option value="Others">Others</option>
              </select>
              <?= form_error('catch', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-lg">
              <label for="regis">Registration Number</label>
              <input type="number" class="form-control" id="regis" name="regis" value="<?= $v->regis ?>">
              <?= form_error('regis', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-lg">
              <label for="port">Port Of Registry</label>
              <input type="number" class="form-control" id="port" name="port" value="<?= $v->port ?>">
              <?= form_error('port', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-lg">
              <label for="place">Place</label>
              <input type="text" class="form-control" id="place" name="place" value="<?= $v->place ?>">
              <?= form_error('place', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="col-lg">
              <label for="year">Year Of Build</label>
              <input type="date" class="form-control" id="year" name="year" value="<?= $v->year ?>">
              <?= form_error('year', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-lg">
              <label for="base">Base Harbour</label>
              <input type="text" class="form-control" id="base" name="base" value="<?= $v->base ?>">
              <?= form_error('base', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-lg-3">
              <label for="rfmo">RFMO</label>
              <select id="rfmo" class="form-control" name="rfmo" value="<?= $v->rfmo ?>">
                <option value="IOTC">IOTC</option>
                <option value="CCSBT">CCSBT</option>
                <option value="WCPFC">WCPFC</option>
                <option value="IATTC">IATTC</option>
              </select>
              <?= form_error('rfmo', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="col-lg-6">
              <label for="no_rfmo">No RFMO</label>
              <input type="number" class="form-control" id="no_rfmo" name="no_rfmo" value="<?= $v->no_rfmo ?>">
              <?= form_error('no_rfmo', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-lg-3">
              <label for="issf">ISSF</label>
              <select id="issf" class="form-control" name="issf" value="<?= $v->issf ?>">
                <option value="UVI">UVI</option>
                <option value="IMO">IMO</option>
                <option value="TUVI">TUVI</option>
              </select>
              <?= form_error('issf', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="col-lg-6">
              <label for="no_issf">No ISSF</label>
              <input type="number" class="form-control" id="no_issf" name="no_issf" value="<?= $v->no_issf ?>">
              <?= form_error('no_issf', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-lg">
              <label for="owner">Owner</label>
              <input type="text" class="form-control" id="owner" name="owner" value="<?= $v->owner ?>">
              <?= form_error('owner', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-lg">
              <label for="address">Address</label>
              <textarea class="form-control" id="address" rows="3" name="address"><?= $v->address ?></textarea>
              <?= form_error('address', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-lg">
              <label for="no_siup">No SIUP</label>
              <input type="number" class="form-control" id="no_siup" name="no_siup" value="<?= $v->no_siup ?>">
              <?= form_error('no_siup', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-lg">
              <label for="no_sipi">No SIPI</label>
              <input type="number" class="form-control" id="no_sipi" name="no_sipi" value="<?= $v->no_sipi ?>">
              <?= form_error('no_sipi', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-lg">
              <label for="valid_sipi">Valid SIPI</label>
              <input type="date" class="form-control" id="valid_sipi" name="valid_sipi" value="<?= $v->valid_sipi ?>">
              <?= form_error('valid_sipi', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="col-lg">
              <label for="until_sipi">Until SIPI</label>
              <input type="date" class="form-control" id="until_sipi" name="until_sipi" value="<?= $v->until_sipi ?>">
              <?= form_error('until_sipi', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-lg-6">
              <label for="status_sipi">Status SIPI</label>
              <select id="status_sipi" class="form-control" name="status_sipi" value="<?= $v->status_sipi ?>">
                <option value="ALL">ALL</option>
                <option value="Expired">Expired</option>
                <option value="Not Expired">Not Expired</option>
              </select>
              <?= form_error('status_sipi', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
          </div>
          <a class="btn btn-danger" href="<?= base_url('vessel'); ?>"><i class="fas fa-arrow-left"></i> Back</a> |
          <button type="submit" class="btn btn-primary" name="btnsave"><i class="fas fa-edit"></i> Change</button>
        </form>
      <?php endforeach; ?>
    </div>
  </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->