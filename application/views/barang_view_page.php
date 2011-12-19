<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
?>


<input disabled type="hidden" id="recNum" value="<?php echo $rec ?>"/>
<table cellspacing="1" cellpadding="1" class="sample1">
    <thead>
        <tr>
            <th width="50">No</th>
            <th width="50">PLU</th>
            <th width="500">NAMA BARANG</th>
            <th width="100">SATUAN</th>
            <th style="text-align: right" width="100">HARGA</th>
        </tr>
    </thead>
    <tbody>
<?php foreach ($query as $qry => $row): ?>
            <tr>
                <td><?= ($qry + 1) + $offset ?></td>
            <td><?= $row['plu'] ?></td>
            <td><?= $row['descp'] ?></td>
            <td><?= $row['satuan'] ?></td>
            <td style="text-align: right"><?= rupiah_format($row['harga']) ?></td>
        </tr>
<?php endforeach; ?>
    </tbody>
</table>