<!DOCTYPE html>
<html><head>
    <title></title>
</head><body>
<h3 style="text-align:center">Master Data Vessel</h3>
    <table>
        <tr>
            <th>No</th>
            <th>Name Vessel</th>
            <th>Gross Tonnage</th>
            <th>Net Tonnage</th>
            <th>Length</th>
            <th>Catch Method</th>
            <th>Registration Number</th>
            <th>Port Of Registry</th>
            <th>Place</th>
            <th>Year Of Build</th>
            <th>Base Harbour</th>
            <th>RFMO</th>
            <th>No RFMO</th>
            <th>ISSF</th>
            <th>No ISSF</th>
            <th>Owner</th>
            <th>Address</th>
            <th>No SIUP</th>
            <th>No SIPI</th>
            <th>Valid SIPI</th>
            <th>Until SIPI</th>
            <th>Status SIPI</th>
        </tr>
        <?php
        $no = 1;
        foreach ($vessel as $v) : ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $v->name_vessel ?></td>
                <td><?= $v->gt ?> GT</td>
                <td><?= $v->nt ?> NT</td>
                <td><?= $v->length ?> M</td>
                <td><?= $v->catch ?></td>
                <td><?= $v->regis ?></td>
                <td><?= $v->port ?></td>
                <td><?= $v->place ?></td>
                <td><?= $v->year ?></td>
                <td><?= $v->base ?></td>
                <td><?= $v->rfmo ?></td>
                <td><?= $v->no_rfmo ?></td>
                <td><?= $v->issf ?></td>
                <td><?= $v->no_issf ?></td>
                <td><?= $v->owner ?></td>
                <td><?= $v->address ?></td>
                <td><?= $v->no_siup ?></td>
                <td><?= $v->no_sipi ?></td>
                <td><?= $v->valid_sipi ?></td>
                <td><?= $v->until_sipi ?></td>
                <td><?= $v->status_sipi ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body></html>