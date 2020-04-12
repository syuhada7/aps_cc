<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <table class="table">
        <tr>
            <th>No IDLA</th>
            <td><?= $detail->no_idla ?></td>
        </tr>
        <tr>
            <th>Supplier</th>
            <td><?= $detail->supplier ?></td>
        </tr>
        <tr>
            <th>Name Vessel</th>
            <td><?= $detail->name_vessel ?></td>
        </tr>
        <tr>
            <th>Gross Tonnage</th>
            <td><?= $detail->gt ?> GT</td>
        </tr>
        <tr>
            <th>Catch Method</th>
            <td><?= $detail->catch ?></td>
        </tr>
        <tr>
            <th>Length</th>
            <td><?= $detail->length ?> M</td>
        </tr>
        <tr>
            <th>WPP</th>
            <td><?= $detail->wpp ?></td>
        </tr>
        <tr>
            <th>Port Of Landing</th>
            <td><?= $detail->port ?></td>
        </tr>
        <tr>
            <th>Captain</th>
            <td><?= $detail->captain ?></td>
        </tr>
        <tr>
            <th>Trip Date</th>
            <td><?= $detail->trip ?></td>
        </tr>
        <tr>
            <th>Until Date</th>
            <td><?= $detail->until ?></td>
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
            <th>Species</th>
            <td><?= $detail->species ?></td>
        </tr>
        <tr>
            <th>QTY</th>
            <td><?= $detail->qty ?></td>
        </tr>
        <tr>
            <th>FIP</th>
            <td><?= $detail->fip ?></td>
        </tr>
        <tr>
            <th>Area</th>
            <td><?= $detail->area ?></td>
        </tr>
        <tr>
            <th>Note</th>
            <td><?= $detail->note ?></td>
        </tr>
    </table>
    <a href="<?= base_url('shti'); ?>" class="btn btn-danger"><i class="fas fa-arrow-left"></i> Back</a>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content