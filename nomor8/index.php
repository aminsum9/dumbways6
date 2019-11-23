<?php
require "function.php";

$kategori = query("SELECT * FROM categories");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Nomor 8</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="container">
	<div id="tambah"><p>Tambah</p></div>
	<?php foreach($kategori as $row) : ?>
    <div class="kategori">
       <h1><?= $row["name"]; ?></h1>
	<ul>
		
		<?php for($i=0;$i<3;$i++) : ?>
		<li>
			<div class="konten">
				<div class="buku">
					<div class="gambar"></div>
					<div class="pinjam"></div>
					<div class="kembalikan"></div>
				</div>
			</div>
        </li>
        <?php endfor; ?>
	</ul>
    </div>
   <?php endforeach; ?>
</div>
</body>
</html>