 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <div class="row">
         <div class="col-lg-6">
             <?php foreach ($shti as $s) : ?>
                 <form method="post" action="<?= base_url() . 'shti/update'; ?>">
                     <div class="form-group">
                         <input type="hidden" class="form-control" id="id_idla" name="id_idla" value="<?= $s->id_idla ?>">
                         <label for="no_idla">No IDLA/SKPI</label>
                         <input type="text" class="form-control" id="no_idla" name="no_idla" value="<?= $s->no_idla ?>">
                         <?= form_error('no_idla', '<small class="text-danger pl-3">', '</small>'); ?>
                     </div>
                     <div class="form-group">
                         <label for="supplier">Supplier</label>
                         <input type="text" class="form-control" id="supplier" name="supplier" value="<?= $s->supplier ?>">
                         <?= form_error('supplier', '<small class="text-danger pl-3">', '</small>'); ?>
                     </div>
                     <div class="form-group row">
                         <div class="col-lg-9">
                             <label for="name_vessel">Vessel Name</label>
                             <select id="name_vessel" class="form-control" name="name_vessel" value="<?= $s->name_vessel ?>">
                                 <?php foreach ($vessel as $v) : ?>
                                     <option value="<?= $v['name_vessel']; ?>"><?= $v['name_vessel']; ?></option>
                                 <?php endforeach; ?>
                             </select>
                             <?= form_error('name_vessel', '<small class="text-danger pl-3">', '</small>'); ?>
                         </div>
                         <div class="col-lg-3">
                             <label for="gt">GT</label>
                             <input type="number" class="form-control" id="gt" name="gt" value="<?= $s->gt ?>" readonly>
                         </div>
                     </div>
                     <div class="form-group row">
                         <div class="col-lg-9">
                             <label for="Catch">Catch Method</label>
                             <input type="text" class="form-control" id="catch" name="catch" value="<?= $s->catch ?>" readonly>
                         </div>
                         <div class="col-lg-3">
                             <label for="lenght">Length</label>
                             <input type="number" class="form-control" id="length" name="length" value="<?= $s->length ?>" readonly>
                         </div>
                     </div>
                     <div class="form-group row">
                         <div class="col-lg-3">
                             <label for="wpp">WPP</label>
                             <select id="wpp" class="form-control" name="wpp" value="<?= $s->wpp ?>">
                                 <option>57</option>
                                 <option>71</option>
                             </select>
                         </div>
                         <div class="col-lg">
                             <label for="port">Port Of Landing Fish</label>
                             <input type="number" class="form-control" id="port" name="port" value="<?= $s->port ?>">
                         </div>
                     </div>
                     <div class="form-group row">
                         <div class="col-lg">
                             <label for="Captain">Captain Name</label>
                             <input type="text" class="form-control" id="captain" name="captain" value="<?= $s->captain ?>">
                         </div>
                     </div>
                     <div class="form-group row">
                         <div class="col-lg">
                             <label for="trip">Tripdates</label>
                             <input type="date" class="form-control" id="trip" name="trip" value="<?= $s->trip ?>">
                         </div>
                         <div class="col-lg">
                             <label for="until">S/D</label>
                             <input type="date" class="form-control" id="until" name="until" value="<?= $s->until ?>">
                         </div>
                     </div>
                     <div class="form-group row">
                         <div class="col-lg-6">
                             <label for="species">Species</label>
                             <select id="species" class="form-control" name="species" value="<?= $s->species ?>">
                                 <?php foreach ($fish as $f) : ?>
                                     <option value="<?= $f['name_fish']; ?>"><?= $f['name_fish']; ?></option>
                                 <?php endforeach; ?>
                             </select>
                         </div>
                         <div class="col-lg-4">
                             <label for="qty">Qty</label>
                             <input type="number" class="form-control" name="qty" id="qty" value="<?= $s->qty ?>">
                         </div>
                     </div>
                     <div class="form-group row">
                         <div class="col-lg-6">
                             <label for="rfmo">RFMO</label>
                             <input type="text" class="form-control" id="rfmo" name="rfmo" value="<?= $s->rfmo ?>" readonly>
                         </div>
                         <div class="col-lg-6">
                             <label for="no_rfmo">No RFMO</label>
                             <input type="number" class="form-control" id="no_rfmo" name="no_rfmo" value="<?= $s->no_rfmo ?>" readonly>
                         </div>
                     </div>
                     <div class="form-group row">
                         <div class="col-lg-6">
                             <label for="issf">ISSF</label>
                             <input type="text" class="form-control" id="issf" name="issf" value="<?= $s->issf ?>" readonly>
                         </div>
                         <div class="col-lg-6">
                             <label for="no_issf">No ISSF</label>
                             <input type="number" class="form-control" id="no_issf" name="no_issf" value="<?= $s->no_issf ?>" readonly>
                         </div>
                     </div>
                     <div class="form-group row">
                         <div class="col-lg-4">
                             <label for="fip">FIP</label>
                             <select id="fip" class="form-control" name="fip" value="<?= $s->fip ?>">
                                 <option>YES</option>
                                 <option>N/A</option>
                             </select>
                         </div>
                         <div class="col-lg">
                             <label for="area">Area</label>
                             <input type="text" class="form-control" id="area" name="area" value="<?= $s->area ?>">
                         </div>
                     </div>
                     <div class="form-group row">
                         <div class="col-lg">
                             <label for="note">Spesial Notes</label>
                             <textarea class="form-control" id="note" rows="3" name="note"><?= $s->note ?></textarea>
                         </div>
                     </div>
                     <div class="form-group">
                         <a href="<?= base_url('shti'); ?>" class="btn btn-danger"><i class="fas fa-arrow-left"></i> Back</a> |
                         <button type="submit" class="btn btn-primary" name="btnsave"><i class="far fa-save"></i> Save</button>
                     </div>
                 </form>
             <?php endforeach; ?>
         </div>
     </div>
 </div>
 <!-- /.container-fluid -->
 </div>
 <!-- End of Main Content -->