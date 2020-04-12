<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<h3>Master Data SHTI</h3>

<body>
    <table>
        <tr>
            <th>No</th>
            <th>No IDLA</th>
            <th>Supplier</th>
            <th>Name Vessel</th>
            <th>Gross Tonnage</th>
            <th>Catch Method</th>
            <th>Length</th>
            <th>WPP</th>
            <th>Port Of Landing</th>
            <th>Captain</th>
            <th>Trip Date</th>
            <th>Until Date</th>
            <th>RFMO</th>
            <th>No RFMO</th>
            <th>ISSF</th>
            <th>No ISSF</th>
            <th>Species</th>
            <th>QTY</th>
            <th>FIP</th>
            <th>Area</th>
            <th>Note</th>
        </tr>
        <?php
        $no = 1;
        foreach ($shti as $s) : ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $s->no_idla ?></td>
                <td><?= $s->supplier ?></td>
                <td><?= $s->name_vessel ?></td>
                <td><?= $s->gt ?> GT</td>
                <td><?= $s->catch ?></td>
                <td><?= $s->length ?>M</td>
                <td><?= $s->wpp ?></td>
                <td><?= $s->port ?></td>
                <td><?= $s->captain ?></td>
                <td><?= $s->date('d F Y', $detail->trip) ?></td>
                <td><?= $s->date('d F Y', $detail->until) ?></td>
                <td><?= $s->rfmo ?></td>
                <td><?= $s->no_rfmo ?></td>
                <td><?= $s->issf ?></td>
                <td><?= $s->no_issf ?></td>
                <td><?= $s->species ?></td>
                <td><?= $s->qty ?></td>
                <td><?= $s->fip ?></td>
                <td><?= $s->area ?></td>
                <td><?= $s->note ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <Script type="text/javascript">
        window.print();
    </Script>
</body>

</html>