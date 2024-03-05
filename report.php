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
    <tr >
    <td colspan="7" align="center" ><b>Jenis</b></td>
    </tr>
        <tr>
            <th align="center">No</th>
            <th align="center">Tanggal</th>
            <th align="left">Kategori</th>
            <th align="center">Keterangan</th>
            <th align="center">Pemasukan</th>
            <th align="center">Pengeluaran</th>
        </tr>
<?php

$laptopasus = 0;
$keyboardlogitech = 0;
$speaker = 0;
$printerepson = 0;


echo '<h2>Tugas 1 Pemrograman Web</h2>';
echo '<h3>Suryandari Puspita Hartiati (2210130007)</h3>';
$tokoelektronik = array(
    array("No"=>1,"Kategori"=>"pembayaran pesanan","Keterangan"=>" ","Pemasukan"=>1000000,"Pengeluaran"=>0),
    array("No"=>2,"Kategori"=>"pembayaran pesanan","Keterangan"=>"gaada","Pemasukan"=>100000,"Pengeluaran"=>0),
    array("No"=>3,"Kategori"=>"pembayaran pesanan","Keterangan"=>" ","Pemasukan"=>200000,"Pengeluaran"=>0),
    array("No"=>4,"Kategori"=>"pembayaran pesanan","Keterangan"=>"test pemasukan 090323","Pemasukan"=>89000,"Pengeluaran"=>0),
    array("No"=>5,"Kategori"=>"pembayaran pesanan","Keterangan"=>"test pengeluaran 090323","Pemasukan"=> 0,"Pengeluaran"=>21000),
    array("No"=>6,"Kategori"=>"pembayaran pesanan","Keterangan"=>"lunas yak","Pemasukan"=>165000,"Pengeluaran"=>0),
    array("No"=>7,"Kategori"=>"pembayaran pesanan","Keterangan"=>"lunas yak","Pemasukan"=>330000,"Pengeluaran"=>0),
    array("No"=>8,"Kategori"=>"pinjaman ulang","Keterangan"=>"tes","Pemasukan"=>100000,"Pengeluaran"=>0),
    array("No"=>9,"Kategori"=>"belanja modal","Keterangan"=>"tes card tahun","Pemasukan"=>100000,"Pengeluaran"=>0),
    array("No"=>10,"Kategori"=>"pembayaran pesanan","Keterangan"=>" ","Pemasukan"=>24032023,"Pengeluaran"=>0),
);

function format_rupiah($angka){
    $rupiah = "Rp. " . number_format($angka,0,',','.');
    return $rupiah;
}

// function subtotal($barang){
//     $subtotalz = $barang['Pemasukan'] * $barang['Jumlah'];
//     return $subtotalz;
// }

$arr = array('01-03-2023','01-03-2023','08-03-2023','09-03-2023','09-03-2023', '16-03-2023','16-03-2023','15-03-2023','16-02-2023','24-03-2023');

foreach ($tokoelektronik as $index => $barang)
{
    //$subtotal = subtotal($barang); 
    //$total += $subtotal;
    $pemasukan_format = format_rupiah($barang['Pemasukan']);
    //$subtotal_format = format_rupiah($subtotal);
    ?>
    <tr>
    <td><?php echo $barang["No"];?></td>
    <td><?php echo $arr[$index];?></td>
    <td><?php echo $barang["Kategori"];?></td>
    <td><?php echo$barang["Keterangan"];?></td>
    <td align="right"><?php echo$pemasukan_format;?></td>
    <td align="center"><?php echo$barang["Pengeluaran"];?></td>
    
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