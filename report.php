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


$arr = array('01-03-2023','01-03-2023','08-03-2023','09-03-2023','09-03-2023', '16-03-2023','16-03-2023','15-03-2023','16-02-2023','24-03-2023');

$total_pemasukan = 0;
$total_pengeluaran = 0;
$total_saldo = 0;

foreach ($tokoelektronik as $index => $barang)
{
    $pemasukan_format = "-";
    if ($barang['Pemasukan'] != 0) {
        $pemasukan_format = format_rupiah($barang['Pemasukan']);
        $total_pemasukan += $barang['Pemasukan'];
    }
    $pengeluaran_format = "-";
    if ($barang['Pengeluaran'] != 0) {
        $pengeluaran_format = format_rupiah($barang['Pengeluaran']);
        $total_pengeluaran == $barang['Pengeluaran'];
    }
    ?>
    <tr>
    <td><?php echo $barang["No"];?></td>
    <td><?php echo $arr[$index];?></td>
    <td><?php echo $barang["Kategori"];?></td>
    <td><?php echo$barang["Keterangan"];?></td>
    <td align="left"><?php echo$pemasukan_format;?></td>
    <td align="lefts"><?php echo$pengeluaran_format;?></td>
    
    </tr>
    <?php
}

$total_pemasukan_format = format_rupiah($total_pemasukan);
$total_pengeluaran_format = format_rupiah($total_pengeluaran);
$total_saldo_format = format_rupiah($total_saldo);
?>
<tr >
    <td colspan="4" align="right" ><b>TOTAL</b></td>
    <td align="center"><b><?php echo $total_pemasukan_format; ?></b></td>
    <td align="center"><b><?php echo $pengeluaran_format; ?></b></td>
</tr>
<tr >
    <td colspan="4" align="right" ><b>SALDO</b></td>
    <td colspan = "5" align="center"><b><?php echo $total_saldo_format;?></b></td>
</tr>
</table>
</body>
</html>