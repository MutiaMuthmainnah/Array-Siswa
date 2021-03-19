<?php 	error_reporting(0); ?>
<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<title>Form Belanja</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-8">
    	<form class="form-horizontal" method="POST" action="form_belanja.php">
			<fieldset>
				<legend>Form Belanja</legend>

				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="Nama">Costomer</label>  
				  <div class="col-md-4">
				  <input id="nama" name="nama" type="text" placeholder="Nama Customer" class="form-control input-md" required="">
				    
				  </div>
				</div>

				<!-- Multiple Radios (inline) -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="radios">Produk</label>
				  <div class="col-md-4"> 
				    <label class="radio-inline" for="radios">
				      <input type="radio" name="radios" id="radios" value="TV" checked="checked">
				      TV
				    </label> 
				    <label class="radio-inline" for="radios">
				      <input type="radio" name="radios" id="radios" value="Kulkas">
				      Kulkas
				    </label> 
				    <label class="radio-inline" for="radios">
				      <input type="radio" name="radios" id="radios" value="Mesin cuci">
				      Mesin cuci
				    </label>
				  </div>
				</div>

				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="jumlah">Jumlah</label>  
				  <div class="col-md-4">
				  <input id="jumlah" name="jumlah" type="text" placeholder="Jumlah" class="form-control input-md" required="">
				    
				  </div>
				</div>

				<!-- Button -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="button"></label>
				  <div class="col-md-4">
				    <button id="proses" name="proses" class="btn btn-primary">Kirim</button>
				  </div>
				</div>
			</fieldset>
		</form>
		<?php 
    	$proses= $_POST ['proses'];
    	$name= $_POST ['nama'];
    	$produk= $_POST ['radios'];
    	$jumlah= $_POST ['jumlah'];

    	echo 'Proses'.$proses;
    	echo '<br/>Customer :'.$name;
    	echo '<br/>Produk :'.$produk;
    	echo '<br/>Jumlah :'.$jumlah;
    	
    	function rupiah($angka){
    		$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
    		return $hasil_rupiah;
    	}
    	if ($produk=='tv'){
    		$total = 4200000 * $jumlah;
    		echo '<br/> Total Belanja : '.rupiah($total);
    	}
    	elseif ($produk=='kulkas'){
    		$total = 3100000 * $jumlah;
    		echo '<br/> Total Belanja : '.rupiah($total);
    	}
    	else {
    		$total = 3800000 * $jumlah;
    		echo '<br/> Total Belanja : '.rupiah($total);
    	}
     ?>
    </div>
    
    <div class="col-4">
    	<ul class="list-group">
		  <li class="list-group-item active" aria-current="true">Daftar Harga</li>
		  <li class="list-group-item">TV : 4.200.000</li>
		  <li class="list-group-item">Kulkas : 3.100.000</li>
		  <li class="list-group-item">Mesin Cuci : 3.800.000</li>
		  <li class="list-group-item active">Harga Dapat Berubah Setiap Saat</li>
		</ul>
    </div>
    
  </div>
</div>
</body>
</html>