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
			
			<!-- Navigation -->
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
                                <a href="warnabarang.php">Warna Barang</a>
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
			
			<div id="page-wrapper">
				
				<div class="container-fluid">
					
					<!--Page Heading-->
					<div class ="row">
						<div class="col-lg-12">
						<!--	<h1 class="page-header">
								Dashboard
							</h1> -->
							<ol class="breadcrumb">
								<li class="active">
									<i class="fa fa-dashboard"></i> Dashboard
								</li>
							</ol>
						</div>
					</div>
					<!--/.row-->
					
					<div class="row">
						<div class="col-lg-3 col-md-6">
							<div class="panel panel-primary">
								<div class="panel-heading">
									<div class="row">
										<div class="col-xs-3">
											<i class="fa fa-comments fa-5x "></i>
										</div>
										<div class="col-xs-9 text-right">
											<div class="huge">69</div>
											<div>New Comments!</div>
										</div>
									</div>
								</div>
								<a href="#">
									<div class="panel-footer">
										<span class="pull-left">View Details</span>
										<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
										<div class="clearfix"></div>
									</div>
								</a>
							</div>
						</div>
						
						<div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">18</div>
                                        <div>New Tasks!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
						</div>
						
						<div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-shopping-cart fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">124</div>
                                        <div>New Orders!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
						</div>
						
						<div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-support fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">13</div>
                                        <div>Support Tickets!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
						</div>
						
						
						
					</div>
					<!--/.row-->
					
				<!-- tabel penjualan -->
				<div class = "row">
				  <div class="col-lg-8">
					<div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Tabel Penjualan atau Semacamnya
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Actions
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="#">Action</a>
                                        </li>
                                        <li><a href="#">Another action</a>
                                        </li>
                                        <li><a href="#">Something else here</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="morris-area-chart"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
				  </div>	
				
				<!-- col-lg-8 -->
				<!-- akhir tabel penjualan-->
				
				<div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> Penjualan Terakhir
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="list-group">
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-comment fa-fw"></i> Haris
                                    <span class="pull-right text-muted small"><em>4 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-twitter fa-fw"></i> Qory
                                    <span class="pull-right text-muted small"><em>12 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-envelope fa-fw"></i> Dhamar
                                    <span class="pull-right text-muted small"><em>27 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-tasks fa-fw"></i> Moyuba
                                    <span class="pull-right text-muted small"><em>43 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small"><em>11:32 AM</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-bolt fa-fw"></i> Server Crashed!
                                    <span class="pull-right text-muted small"><em>11:13 AM</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-warning fa-fw"></i> Server Not Responding
                                    <span class="pull-right text-muted small"><em>10:57 AM</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-shopping-cart fa-fw"></i> New Order Placed
                                    <span class="pull-right text-muted small"><em>9:49 AM</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-money fa-fw"></i> Payment Received
                                    <span class="pull-right text-muted small"><em>Yesterday</em>
                                    </span>
                                </a>
								<a href="#" class="list-group-item">
                                    <i class="fa fa-money fa-fw"></i> Dalban
                                    <span class="pull-right text-muted small"><em>Yesterday</em>
                                    </span>
                                </a>
                            </div>
                            <!-- /.list-group -->
                            <a href="#" class="btn btn-default btn-block">View All Alerts</a>
                        </div>
                        <!-- /.panel-body -->
                    </div>
				  </div>
				
				</div>
				<!------------------------- -->
				</div>
				<!--/.container-fluid-->
			
			</div>
			<!--/#page wrapper-->
			
			
		</div>
		<!-- /#wrapper -->
		
	<!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>
	
	<!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	
	<!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
</body>


</html>