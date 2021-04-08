<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Data User</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="../assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
	<link href="../assets/plugins/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/plugins/font-awesome/5.0/css/fontawesome-all.min.css" rel="stylesheet" />
	<link href="../assets/plugins/ionicons/css/ionicons.min.css" rel="stylesheet" />
	<link href="../assets/plugins/animate/animate.min.css" rel="stylesheet" />
	<link href="../assets/css/apple/style.min.css" rel="stylesheet" />
	<link href="../assets/css/apple/style-responsive.min.css" rel="stylesheet" />
	<link href="../assets/css/apple/theme/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="../assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/plugins/DataTables/extensions/Buttons/css/buttons.bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="../assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade in page-sidebar-fixed page-header-fixed">
		<!-- begin #header -->
		<div id="header" class="header navbar-default">
			<!-- begin navbar-header -->
			<div class="navbar-header">
				<a href="index.html" class="navbar-brand"><span class="navbar-logo"><i class="ion-ios-cloud"></i></span> <b>Ez</b> Food</a>
				<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<!-- end navbar-header -->
			
			<!-- begin header-nav -->
			<ul class="navbar-nav navbar-right">
				<li>
					<form class="navbar-form">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Enter keyword" />
							<button type="submit" class="btn btn-search"><i class="ion-ios-search-strong"></i></button>
						</div>
					</form>
				</li>
				<li class="dropdown">
					<a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle icon">
						<i class="ion-ios-bell"></i>
						<span class="label">1</span>
					</a>
					<ul class="dropdown-menu media-list dropdown-menu-right">
						<li class="dropdown-header">NOTIFICATIONS (1)</li>
						<li class="media">
							<a href="javascript:;">
								<div class="media-left">
									<img src="../assets/img/user/user-1.jpg" class="media-object" alt="" />
									<i class="fab fa-facebook-messenger text-primary media-object-icon"></i>
								</div>
								<div class="media-body">
									<h6 class="media-heading">Udin</h6>
									<p>Satu orderan baru.</p>
									<div class="text-muted f-s-11">3 minutes ago</div>
								</div>
							</a>
						</li>
						
						<li class="dropdown-footer text-center">
							<a href="order.html">View more</a>
						</li>
					</ul>
				</li>
				<li class="dropdown navbar-user">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
						<img src="../assets/img/user/user-13.jpg" alt="" /> 
						<span class="d-none d-md-inline">Makmur Mulyono</span> <b class="caret"></b>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<a href="user.html" class="dropdown-item">Edit Profile</a>
						<a href="javascript:;" class="dropdown-item">Setting</a>
						<div class="dropdown-divider"></div>
						<a href="login_v2.html" class="dropdown-item">Log Out</a>
					</div>
				</li>
			</ul>
			<!-- end header navigation right -->
		</div>
		<!-- end #header -->
		
		<!-- begin #sidebar -->
		<div id="sidebar" class="sidebar">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->
				<ul class="nav">
					<li class="nav-profile">
						<a href="javascript:;" data-toggle="nav-profile">
							<div class="cover with-shadow"></div>
							<div class="image">
								<img src="../assets/img/user/user-13.jpg" alt="" />
							</div>
							<div class="info">
								<b class="caret"></b>
								Makmur Mulyono
								<small>Administrator</small>
							</div>
						</a>
					</li>
					<li>
						<ul class="nav nav-profile">
                            <li><a href="javascript:;"><i class="ion-ios-cog-outline"></i> Settings</a></li>
                            <li><a href="javascript:;"><i class="ion-ios-compose-outline"></i> Send Feedback</a></li>
                            <li><a href="javascript:;"><i class="ion-ios-help-outline"></i> Helps</a></li>
                        </ul>
					</li>
				</ul>
				<!-- end sidebar user -->
				<!-- begin sidebar nav -->
			<ul class="nav">
          		<li class="nav-header">Navigation</li>
         		<li><a href="../Dashboard"><i class="ion-ios-pulse-strong bg-red"></i> <span>Dashboard</span></a></li>
          		<li class="has-sub active">
            	<a href="javascript:;">
                <b class="caret"></b>
                <i class="ion-android-restaurant bg-gradient-green"></i>
                <span >Data Menu</span>
              </a>
            <ul class="sub-menu">
            	<li><a href="../menu/tambah-menu">Tambah Menu</a></li>
                <li><a href="../menu/data-menu">Data Menu</a></li>
                <li><a href="../kategori/tambah-kategori">Tambah Kategori</a></li>
                <li><a href="../kategori/menu-kategori">Data Kategori</a></li>
            </ul>
          </li>

		  <li><a href="../pelanggan/data-pelanggan"><i class="ion-person bg-purple"></i> <span>Data Pelanggan</span></a></li>
          <li class="active"><a href="../user/data-user"><i class="ion-person-stalker bg-gradient-orange"></i> <span>Data User</span></a></li>
          <li><a href="../order/data-order"><i class="ion-ios-cart bg-gradient-blue"></i> <span>Data Order</span></a></li>
			        <!-- begin sidebar minify button -->
					<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="ion-ios-arrow-left"></i> <span>Collapse</span></a></li>
			        <!-- end sidebar minify button -->
				</ul>
				<!-- end sidebar nav -->
			</div>
			<!-- end sidebar scrollbar -->
		</div>
		<div class="sidebar-bg"></div>
		<!-- end #sidebar -->
		
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
				<li class="breadcrumb-item"><a href="javascript:;">Kelola Data User</a></li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Kelola Data User</h1>
			<!-- end page-header -->
			
			<!-- begin row -->
			<div class="row">
			    
			    <!-- begin col-10 -->
			    <div class="col-lg-12">
			        <!-- begin panel -->
                    <div class="panel panel-inverse">
                        <!-- begin panel-heading -->
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Data User</h4>
                        </div>
                        <!-- end panel-heading -->
                          <br><a href="tambah_user.html"><div class="pull-left"><button type="button" class="btn btn-success m-r-5 m-b-5" style="margin-left: 15px">Tambah User</div></a><br>    
                        <!-- begin panel-body -->
                       <div class="panel-body">
                            <table id="data-table-buttons" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                    	<th width="1%">No</th>                             
                                    	<th width="5%" data-orderable="false">Gambar</th>
                                    	<th class="text-nowrap">Kode User</th>
                                        <th class="text-nowrap">Nama User</th>
                                        <th class="text-nowrap">Username</th>
                                        <th class="text-nowrap">Gmail</th>
                                        <th class="text-nowrap">Hak Akses</th>
                                        <th class="text-nowrap">Status</th>
                                        <th class="text-nowrap">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    	<td width="1%" class="f-s-600 text-inverse">1</td>                                 	
                                    	<td width="5%" class="with-img"><img src="../assets/img/user/user-13.jpg" class="img-rounded height-60" /></td>
                                    	<td>USR001</td>
                                        <td>Makmur Mulyono</td>
                                        <td>makmur2321</td>
                                        <td>makmurmulyono@gmail.com</td>
                                        <td>Superadmin</td>
                                        <td>Aktif</td>
                                        <td><a href="edit-user.html"><button type="button" class="btn btn-xs btn-warning">Edit</button></a>

	                   					<button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#modal_hapus"> Hapus</button>
                                    </tr>    

                                    <tr>
                                    	<td width="1%" class="f-s-600 text-inverse">2</td>                                 	
                                    	<td width="5%" class="with-img"><img src="../assets/img/user/user-1.jpg" class="img-rounded height-60" /></td>
                                    	<td>USR002</td>
                                        <td>Udin</td>
                                        <td>Udin0987</td>
                                        <td>Udin0987@gmail.com</td>
                                        <td>Operator</td>
                                        <td>Aktif</td>
                                        <td><a href="edit-user.html"><button type="button" class="btn btn-xs btn-warning">Edit</button></a>

	                   					<button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#modal_hapus"> Hapus</button>
                                    </tr>                          
                                </tbody>
                            </table>
                        </div>
                        <!-- end panel-body -->
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-10 -->
            </div>
            <!-- end row -->
		</div>
		<!-- end #content -->
		
        <!-- begin theme-panel -->
        <div class="theme-panel theme-panel-lg">
            <a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="ion-ios-cog"></i></a>
            <div class="theme-panel-content">
                <h5 class="m-t-0">Color Theme</h5>
                <ul class="theme-list clearfix">
                    <li><a href="javascript:;" class="bg-red" data-theme="red" data-theme-file="../assets/css/apple/theme/red.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Red">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-pink" data-theme="pink" data-theme-file="../assets/css/apple/theme/pink.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Pink">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-orange" data-theme="orange" data-theme-file="../assets/css/apple/theme/orange.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Orange">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-yellow" data-theme="yellow" data-theme-file="../assets/css/apple/theme/yellow.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Yellow">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-lime" data-theme="lime" data-theme-file="../assets/css/apple/theme/lime.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Lime">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-green" data-theme="green" data-theme-file="../assets/css/apple/theme/green.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Green">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-teal" data-theme="teal" data-theme-file="../assets/css/apple/theme/teal.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Teal">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-aqua" data-theme="aqua" data-theme-file="../assets/css/apple/theme/aqua.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Aqua">&nbsp;</a></li>
                    <li class="active"><a href="javascript:;" class="bg-blue" data-theme="default" data-theme-file="../assets/css/apple/theme/default.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Default">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-purple" data-theme="purple" data-theme-file="../assets/css/apple/theme/purple.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Purple">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-indigo" data-theme="indigo" data-theme-file="../assets/css/apple/theme/indigo.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Indigo">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-black" data-theme="black" data-theme-file="../assets/css/apple/theme/black.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Black">&nbsp;</a></li>
                </ul>
                <div class="divider"></div>
                <div class="row m-t-10">
                    <div class="col-md-6 control-label text-inverse f-w-600">Header Styling</div>
                    <div class="col-md-6">
                        <select name="header-styling" class="form-control form-control-sm">
                            <option value="1">default</option>
                            <option value="2">inverse</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-6 control-label text-inverse f-w-600">Header</div>
                    <div class="col-md-6">
                        <select name="header-fixed" class="form-control form-control-sm">
                            <option value="1">fixed</option>
                            <option value="2">default</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-6 control-label text-inverse f-w-600">Sidebar Styling</div>
                    <div class="col-md-6">
                        <select name="sidebar-styling" class="form-control form-control-sm">
                            <option value="1">default</option>
                            <option value="2">grid</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-6 control-label text-inverse f-w-600">Sidebar</div>
                    <div class="col-md-6">
                        <select name="sidebar-fixed" class="form-control form-control-sm">
                            <option value="1">fixed</option>
                            <option value="2">default</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-6 control-label text-inverse f-w-600">Sidebar Gradient</div>
                    <div class="col-md-6">
                        <select name="content-gradient" class="form-control form-control-sm">
                            <option value="1">disabled</option>
                            <option value="2">enabled</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-6 control-label text-inverse f-w-600">Direction</div>
                    <div class="col-md-6">
                        <select name="direction" class="form-control form-control-sm">
                            <option value="1">LTR</option>
                            <option value="2">RTL</option>
                        </select>
                    </div>
                </div>
                <div class="divider"></div>
                <h5>THEME VERSION</h5>
                <div class="theme-version">
                	<a href="../template_html/index_v2.html">
                		<span style="background-image: url(../assets/img/theme/default.jpg);"></span>
                	</a>
                	<a href="../template_transparent/index_v2.html">
                		<span style="background-image: url(../assets/img/theme/transparent.jpg);"></span>
                	</a>
                </div>
                <div class="theme-version">
                	<a href="../template_apple/index_v2.html" class="active">
                		<span style="background-image: url(../assets/img/theme/apple.jpg);"></span>
                	</a>
                	<a href="../template_material/index_v2.html">
                		<span style="background-image: url(../assets/img/theme/material.jpg);"></span>
                	</a>
                </div>
                <div class="divider"></div>
                <div class="row m-t-10">
                    <div class="col-md-12">
                        <a href="javascript:;" class="btn btn-inverse btn-block btn-rounded" data-click="reset-local-storage"><b>Reset Local Storage</b

                        	></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end theme-panel -->
		
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->

	<div class="modal fade" id="modal_hapus" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
			    <div class="modal-dialog">
			    <div class="modal-content">
			    <div class="modal-header">
			       
			        <h3 class="modal-title" id="myModalLabel">Hapus User</h3>
			         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			    </div>

			    <form class="form-horizontal" role="form" method="" action="" enctype="multipart/form-data">
			        <div class="modal-body">
									<div class="form-group">
										<div class="alert alert-danger m-b-0">
										<label for="regular13" class="col-xs-8 control-label"></label>
										<div class="col-xs-8">
											<input type="hidden" name=" " value="">
											<input type="hidden" name=" " value="">
											<p>Apakah Anda yakin mau menghapus data ini ?</p>
										</div>
									</div>
	
			        </div>
			    </div>
			        <div class="modal-footer">
			            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
			            <button class="btn btn-primary" type="submit"><span class="fa fa-trash"></span> Hapus</button>
			        </div>
			    </form>
	
	
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="../assets/plugins/jquery/jquery-3.2.1.min.js"></script>
	<script src="../assets/plugins/jquery-ui/jquery-ui.min.js"></script>
	<script src="../assets/plugins/bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
	<!--[if lt IE 9]>
		<script src="../assets/crossbrowserjs/html5shiv.js"></script>
		<script src="../assets/crossbrowserjs/respond.min.js"></script>
		<script src="../assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="../assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="../assets/plugins/js-cookie/js.cookie.js"></script>
	<script src="../assets/js/theme/apple.min.js"></script>
	<script src="../assets/js/apps.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="../assets/plugins/DataTables/media/js/jquery.dataTables.js"></script>
	<script src="../assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/Buttons/js/dataTables.buttons.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/Buttons/js/buttons.bootstrap.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/Buttons/js/buttons.flash.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/Buttons/js/jszip.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/Buttons/js/pdfmake.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/Buttons/js/vfs_fonts.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/Buttons/js/buttons.html5.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/Buttons/js/buttons.print.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
	<script src="../assets/js/demo/table-manage-buttons.demo.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<script>
		$(document).ready(function() {
			App.init();
			TableManageButtons.init();
		});
	</script>
</body>
</html>
