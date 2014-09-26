<!DOCTYPE html>
<html lang = "en">
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		
		<title>Clowor Admin Template</title>
		
		<!-- Bootstrap Core CSS -->
		<link href = "css/bootstrap.min.css" rel="stylesheet">
		<link href = "css/bootstrap.css" rel="stylesheet">
		<!-- Custom CSS -->
		<link href = "css/sb-admin.css" rel="stylesheet">

		<!-- Morris Chart CSS -->
		<link href = "css/plugin/morris.css" rel="stylesheet">
		
		<!-- Custom Fonts -->
		<link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div id="wrapper">
		<!--Navigation-->
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class = "navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
					
				<a class="navbar-brand" href="index.html">CLOWOR</a>
			</div>
			
			<!--Top Menu Item -->
			<ul class ="nav navbar-right top-nav">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Ce-Ye <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li>
							<a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
						</li>
						<li>
							<a href="#"><i class="fa fa-fw fa-gear"></i> Setting</a>
						</li>
						<li class="divider"></li>
						<li>
							<a href="#"><i class="fa fa-fw fa-power-off"></i> Logout</a>
						</li>
					</ul>
				</li>	
			</ul>
			
			<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->	
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav side-nav">
					<li class="active">
                        <a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-shopping-cart"></i> POS (Penjualan)</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-shopping-cart"></i> Master Barang (Stok) <i class="fa fa-fw fa-caret-down"></i></a>
						<ul id="demo" class="collapse">
                            <li>
                                <a href="barang.html">Barang</a>
                            </li>
                            <li>
                                <a href="#">Jenis Barang</a>
                            </li>
							<li>
                                <a href="warnabarang.html">Warna Barang</a>
                            </li>
							<li>
                                <a href="#">Ukuran</a>
                            </li>
							<li>
                                <a href="#">Supplier</a>
                            </li>
							<li>
                                <a href="#">Diskon Global Barang</a>
                            </li>
                        </ul>	
					</li>
                    <li>
                       <a href="javascript:;" data-toggle="collapse" data-target="#demo2"><i class="fa fa-fw fa-edit"></i> Master Pembeli <i class="fa fa-fw fa-caret-down"></i></a>
						<ul id="demo2" class="collapse">
                            <li>
                                <a href="#">Pembeli</a>
                            </li>
                            <li>
                                <a href="#">Jenis Pembeli</a>
                            </li>
						</ul>	
					</li>
                    <li>
                        <a href="bootstrap-elements.html"><i class="fa fa-fw fa-money"></i> Laporan</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo3"><i class="fa fa-fw fa-file-o"></i> Alat & Pengaturan <i class="fa fa-fw fa-caret-down"></i></a>
						<ul id="demo3" class="collapse">
                            <li>
                                <a href="#">User & Akun</a>
                            </li>
                            <li>
                                <a href="#">Backup</a>
                            </li>
						</ul>
					</li>
					<!--<li>
                        <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Tools</a>
                    </li>
					<li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo9"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo9" class="collapse">
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                        </ul>
                    </li> -->
                    
				</ul>			
			</div>			
		<!-- /.navbar-collapse -->
		</nav>
		<!-- page-wrapper-->
		<div id="page-wrapper">
			<div class="container-fluid">
				<!--Page Heading-->
				<!--<div class ="row">
					<div class="col-lg-12">
						<h1 class="page-header">
							Menu Warna Barang
						</h1> 
						<!-- <ol class="breadcrumb">
							<li class="active">
								<i class="fa fa-dashboard"></i> Dashboard
							</li>
						</ol> 
					</div>
				</div>-->
				
				<div class="row">
					<div class="col-lg-12">
						<h3 class="page-header2">
							Tambah Warna
						</h3>
					</div>
				</div>
				
				<div class="row">	
					<div class ="col-lg-12">
						<div class="page-header2">
							<div class="col-lg-2">
								<form role="form">
									<div class="from-group">
										<input class="form-control" placeholder="Kode Warna. . .">
									</div>
								</form>
							</div>
							<div class="col-lg-3">
								<form role="form">
									<div class="from-group">
										<input class="form-control" placeholder="Nama Warna Barang. . .">
									</div>
								</form>
							</div>
							<div class="col-lg-2">
								<button type="button" class="btn btn-primary">Tambah Warna</button>
							</div>
						</div>	
					</div>
				</div>
					
			
				
				<div class="border2">
					<div class="row">
						<div class="col-lg-12">
							<h3 class="page-header3">
								Tabel Warna Barang
							</h3>
						</div>
					</div>
					<div class="row">
					<div class ="col-lg-12" >
						<div class="table-responsive">
							<table class="table table-bordered table-hover">
								<thead>
									<tr>
										<th>Kode Warna</th>
										<th>Warna Barang</th>
										<th>Jumlah Barang</th>
										<th>Aksi</th>
										
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>BLK</td>
										<td>Hitam</td>
										<td>100</td>
										<td>	
												<button type="button" class="btn btn-primary">Hapus</button>
												<button type="button" class="btn btn-primary">Edit</button>											
										</td>
									</tr>
								</tbody>
								<tbody>
									<tr>
										<td>GRN</td>
										<td>Hijau</td>
										<td>5</td>
										<td>
											<button type="button" class="btn btn-primary">Hapus</button>
											<button type="button" class="btn btn-primary">Edit</button>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
					
				</div>
		
			</div>
		</div>
		

	</div>
	
	<!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>
	
	<!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>