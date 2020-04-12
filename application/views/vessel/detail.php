<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <table class="table">
        <tr>
            <th>Name Vessel</th>
            <td><?= $detail->name_vessel ?></td>
        </tr>
        <tr>
            <th>Groos Tonnage</th>
            <td><?= $detail->gt ?> GT</td>
        </tr>
        <tr>
            <th>Net Tonnage</th>
            <td><?= $detail->nt ?> NT</td>
        </tr>
        <tr>
            <th>Lengt</th>
            <td><?= $detail->length ?> M</td>
        </tr>
        <tr>
            <th>Catch Method</th>
            <td><?= $detail->catch ?></td>
        </tr>
        <tr>
            <th>Registration Number</th>
            <td><?= $detail->regis ?></td>
        </tr>
        <tr>
            <th>Port Of Registry</th>
            <td><?= $detail->port ?></td>
        </tr>
        <tr>
            <th>Place</th>
            <td><?= $detail->place ?></td>
        </tr>
        <tr>
            <th>Year Of Build</th>
            <td><?= $detail->year ?></td>
        </tr>
        <tr>
            <th>Base Harbour</th>
            <td><?= $detail->base ?></td>
        </tr>
        <tr>
            <th>RFMO</th>
            <td><?= $detail->rfmo ?></td>
        </tr>
        <tr>
            <th>No RFMO</th>
            <td><?= $detail->no_rfmo ?></td>
        </tr>
        <tr>
            <th>ISSF</th>
            <td><?= $detail->issf ?></td>
        </tr>
        <tr>
            <th>No ISSF</th>
            <td><?= $detail->no_issf ?></td>
        </tr>
        <tr>
            <th>Owner</th>
            <td><?= $detail->owner ?></td>
        </tr>
        <tr>
            <th>Address</th>
            <td><?= $detail->address ?></td>
        </tr>
        <tr>
            <th>No SIUP</th>
            <td><?= $detail->no_siup ?></td>
        </tr>
        <tr>
            <th>No SIPI</th>
            <td><?= $detail->no_sipi ?></td>
        </tr>
        <tr>
            <th>Valid SIPI</th>
            <td><?= $detail->valid_sipi ?></td>
        </tr>
        <tr>
            <th>Until SIPI</th>
            <td><?= $detail->until_sipi ?></td>
        </tr>
        <tr>
            <th>Status SIPI</th>
            <td><?= $detail->status_sipi ?></td>
        </tr>
    </table>
    <a href="<?= base_url('vessel'); ?>" class="btn btn-danger"><i class="fas fa-arrow-left"></i> Back</a>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content