      <!-- Begin Page Content -->
      <div class="container-fluid">

          <!-- Page Heading -->

          <h5>Role : <?= $role['role']; ?></h5>
          <div class="row">
              <div class="col-lg-6">
                  <?= $this->session->flashdata('message'); ?>
                  <table class="table table-hover">
                      <thead>
                          <tr>
                              <th scope="col">#</th>
                              <th scope="col">Menu</th>
                              <th scope="col">Access</th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php $i = 1; ?>
                          <?php foreach ($menu as $m) : ?>
                              <tr>
                                  <th scope="row"><?= $i; ?></th>
                                  <td><?= $m['menu']; ?></td>
                                  <td>
                                      <div class="form-check">
                                          <input type="checkbox" class="form-check-input" <?= check_access($role['id'], $m['id']); ?> data-role="<?= $role['id']; ?>" data-menu="<?= $m['id']; ?>">
                                      </div>
                                  </td>
                              </tr>
                              <?php $i++; ?>
                          <?php endforeach; ?>
                      </tbody>
                  </table>
                  <div class="row">
                      <a href="<?= base_url('admin/role'); ?>" class="btn btn-danger"><i class="fas fa-arrow-left"></i> Back</a>
                  </div>
              </div>
          </div>
      </div>
      <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->