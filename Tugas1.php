<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1 PHP</title>
    <style>
        table, tr{
            width: 50%;
            border: 1px solid black;
            border-collapse: collapse;
        }
        td, th{
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th align="center">No</th>
            <th align="center">Kode</th>
            <th align="left">Nama Barang</th>
            <th align="center">Harga</th>
            <th align="center">Jumlah</th>
            <th align="center">Sub Total</th>
        </tr>
<?php

$laptopasus = 0;
$keyboardlogitech = 0;
$speaker = 0;
$printerepson = 0;


echo '<h2>Tugas 1 Pemrograman Web</h2>';
echo '<h3>Suryandari Puspita Hartiati (2210130007)</h3>';
$tokoelektronik = array(
    array("No"=>1,"Kode"=>"B001","Nama Barang"=>"Laptop Asus","Harga"=>9000000,"Jumlah"=>3),
    array("No"=>2,"Kode"=>"B002","Nama Barang"=>"Keyboard Logitech","Harga"=>850000,"Jumlah"=>4),
    array("No"=>3,"Kode"=>"B003","Nama Barang"=>"Speaker","Harga"=>500000,"Jumlah"=>6),
    array("No"=>4,"Kode"=>"B004","Nama Barang"=>"Printer Epson","Harga"=>3000000,"Jumlah"=>7),
);

function format_rupiah($angka){
    $rupiah = "Rp. " . number_format($angka,0,',','.');
    return $rupiah;
}

function subtotal($barang){
    $subtotalz = $barang['Harga'] * $barang['Jumlah'];
    return $subtotalz;
}

$total = 0;

foreach ($tokoelektronik as $subAray)
{
    $subtotal = subtotal($subAray); 
    $total += $subtotal;
    $harga_format = format_rupiah($subAray['Harga']);
    $subtotal_format = format_rupiah($subtotal);
    ?>
    <tr>
    <td><?php echo $subAray["No"];?></td>
    <td><?php echo $subAray["Kode"];?></td>
    <td><?php echo$subAray["Nama Barang"];?></td>
    <td align="right"><?php echo$harga_format;?></td>
    <td align="center"><?php echo$subAray["Jumlah"];?></td>
    <td align="right"><?php echo $subtotal_format;?></td>
    </tr>
    <?php
}

$total_format = format_rupiah($total);
?>
<tr >
    <td colspan="5" align="right" ><b>TOTAL</b></td>
    <td align="right"><b><?php echo $total_format; ?></b></td>
</tr>
</table>
</body>
</html>