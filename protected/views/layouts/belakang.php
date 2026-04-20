<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Rumah Sakit Pelita Insani Martapura</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link rel="icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/logo-xs.png" type="image/x-icon">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/adminlte/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/adminlte/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/adminlte/bower_components/select2/dist/css/select2.min.css"> 
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/fixedcolumns/3.2.4/css/fixedColumns.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/adminlte/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/adminlte/dist/css/skins/_all-skins.min.css">
    <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/adminlte/plugins/iCheck/all.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Multi Level Accordion CSS 
  <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css">-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <style type="text/css">
    .ds-descrp {
      margin: 10px;
    }
    .table thead,
  .table th {text-align: center;}

  </style>
 
</head>
<body class="hold-transition skin-black-light fixed sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo Yii::app()->request->baseUrl; ?>/" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><!--<b>P</b>D--><img style="max-height:30px" src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo-xs.png"></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">PELITA<b>INSANI</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <?php               
    if (Yii::app()->user->isGuest) { ?>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li>
          <a href="site/login">Login</a>
          </li>
        </ul>
      </div>
    <?php } else { ?>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Notifications: style can be found in dropdown.less -->
          <!--
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>-->
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/adminlte/dist/img/user.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo Yii::app()->user->getUn(); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/adminlte/dist/img/user.png" class="img-circle" alt="User Image">

                <p>
                  <?php echo Yii::app()->user->getUn(); ?>
                    <small><?= Yii::app()->user->getNama(); ?></small>
                  
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <!--<div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>-->
                <div class="pull-right">
                  <a href="<?php echo Yii::app()->request->baseUrl; ?>/site/logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    <?php } ?>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- search form -->
      <!--<form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>-->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->

      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/adminlte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?= Yii::app()->user->getNama(); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <ul class="sidebar-menu" data-widget="tree">
        <li>
          <a href="<?php echo Yii::app()->request->baseUrl; ?>/konten/admin">
            <i class="fa fa-newspaper-o"></i> <span>INFO</span>
          </a>
        </li>
        <li>
          <a href="<?php echo Yii::app()->request->baseUrl; ?>/fasilitas/admin">
            <i class="fa fa-medkit"></i> <span>FASILITAS</span>
          </a>
        </li>
        <li>
          <a href="<?php echo Yii::app()->request->baseUrl; ?>/jadwalpoli/admin">
            <i class="fa fa-hospital-o"></i> <span>POLIKLINIK</span>
          </a>
        </li>
        <li>
          <a href="<?php echo Yii::app()->request->baseUrl; ?>/dokter/admin">
            <i class="fa fa-user-md"></i> <span>DOKTER</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-file-picture-o"></i> <span>GALERI</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/galeri/admin"><i class="fa fa-caret-right"></i>GALERI KEGIATAN</a></li>
            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/slider/admin"><i class="fa fa-caret-right"></i>SLIDER</a></li>
          </ul>
        </li>
        <li>
          <a href="<?php echo Yii::app()->request->baseUrl; ?>/klaim/admin">
          <i class="fa fa-archive"></i> <span>KLAIM</span>
          </a>
        </li>
        <!-- <li>
          <a href="?r=instansi/index">
            <i class="fa fa-institution"></i> <span>KONTAK</span>
          </a> -->
        </li>
        <?php if(Yii::app()->user->level == 0) { ?>
        <li>
          <a href="<?php echo Yii::app()->request->baseUrl; ?>/user/admin">
            <i class="fa fa-info-circle"></i> <span>USER</span>
          </a>
        </li>
      <?php } ?>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <?php echo $content ?>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <!--<div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>-->
    <strong>Copyright &copy;<script>document.write(new Date().getFullYear());</script> <a href="<?php echo Yii::app()->request->baseUrl; ?>/">CV. Borneo Media Teknologi</a></strong> | Rumah Sakit Pelita Insani Martapura
  </footer>
</div>
<!-- ./wrapper -->
<?php Yii::app()->clientScript->registerCoreScript("jquery");?>
<!-- jQuery 3 -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/adminlte/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- DataTables -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/fixedcolumns/3.2.6/js/dataTables.fixedColumns.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- Select2 -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/adminlte/bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/adminlte/bower_components/chart.js/Chart.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/Chart.bundle.js"></script>
<!-- FastClick -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/adminlte/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/adminlte/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/adminlte/dist/js/demo.js"></script>
<!-- Multi Level Accordion JS -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/modernizr.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/main.js"></script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree();
    $('#example1').DataTable({
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : false,
      'autoWidth'   : false
    });    
  })
</script>


  <script type="text/javascript">
        $.fn.extend({
    treed: function (o) {
      
      var openedClass = 'glyphicon-minus-sign';
      var closedClass = 'glyphicon-plus-sign';
      
      if (typeof o != 'undefined'){
        if (typeof o.openedClass != 'undefined'){
        openedClass = o.openedClass;
        }
        if (typeof o.closedClass != 'undefined'){
        closedClass = o.closedClass;
        }
      };
      
        //initialize each of the top levels
        var tree = $(this);
        tree.addClass("indikator-tree");
        tree.find('li').has("ul").each(function () {
            var branch = $(this); //li with children ul
            branch.prepend("<i class='indicator glyphicon " + closedClass + "'></i>");
            branch.addClass('branch');
            branch.on('click', function (e) {
                if (this == e.target) {
                    var icon = $(this).children('i:first');
                    icon.toggleClass(openedClass + " " + closedClass);
                    $(this).children().children().toggle();
                }
            })
            branch.children().children().toggle();
        });
        //fire event from the dynamically added icon
      tree.find('.branch .indicator').each(function(){
        $(this).on('click', function () {
            $(this).closest('li').click();
        });
      });
        //fire event to open branch if the li contains an anchor instead of text
        tree.find('.branch>a').each(function () {
            $(this).on('click', function (e) {
                $(this).closest('li').click();
                e.preventDefault();
            });
        });
        //fire event to open branch if the li contains a button instead of text
        tree.find('.branch>button').each(function () {
            $(this).on('click', function (e) {
                $(this).closest('li').click();
                e.preventDefault();
            });
        });
    }
});

//Initialization of treeviews
$('.select2').select2();

  </script>
</body>
</html>
