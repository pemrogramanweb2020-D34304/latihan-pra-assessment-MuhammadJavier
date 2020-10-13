<?php 

$buku = array(
		array('judul' => 'Sherelock Holmes', 'pengarang' => 'Arthur Conan Doyle', 'harga' => '50000', 'stok' => '20'),
		array('judul' => 'Arsene Lupin', 'pengarang' => 'Maurice LeBlanc', 'harga' => '250000', 'stok' => '50') ,
		array('judul' => 'Game Of Throne', 'pengarang' => 'George R.R. Martin', 'harga'=> '125000', 'stok' => '60'),
	);


$pembelian = array(
	         array('judul' => 'Sherelock Holmes', 'jumlah' => '5' ),
	         array('judul' => 'Arsene Lupin', 'jumlah' => '2' ),
	         array('judul' => 'Game Of Throne', 'jumlah' => '4' ),
		 );
		 


echo "<center><table border='1' cellpadding='10'>";
echo "<tr>";
echo "<th><i>Judul Buku</i></th>";
echo "<th><i>Nama Pengarang</i></th>";
echo "<th><i>Harga Buku</i></th>";
echo "<th><i>Stok Buku</i></th>";
echo "</tr>";


$jumlahstok = 0;

foreach($buku as $tampilan) { 
  echo "<tr>";
  echo "<td>".$tampilan["judul"]."</td>";
  echo "<td>".$tampilan["pengarang"]."</td>";
  echo "<td>".$tampilan["harga"]."</td>";
  echo "<td>".$tampilan["stok"]."</td>";
  echo "</tr>";
  $jumlahstok += $tampilan["stok"];

}

echo "<th colspan = '3'>Semua Stok Buku</th>";
echo "<td>$jumlahstok</td>";



?>
