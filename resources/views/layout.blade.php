<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Göltürkbükü Sitesi</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('dist/sweetalert.css') }}">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('dist/css/skins/_all-skins.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('plugins/iCheck/flat/blue.css') }}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{ asset('plugins/morris/morris.css') }}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{ asset('plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{ asset('plugins/datepicker/datepicker3.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker-bs3.css') }}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">

    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
    <!-- jQuery 2.1.4 -->
    <script src="{{ asset('plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>

    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">
    <header class="main-header">
        <!-- Logo -->
        <a href="anasayfa" class="logo">
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Göltürkbükü Sitesi</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{ asset('avatar.jpg') }}" class="user-image" alt="User Image">
                            <span class="hidden-xs">{{ Auth::user()->username }}</span>

                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="{{ asset('avatar.jpg') }}" class="img-circle" alt="User Image">
                                <p>
                                    {{ Auth::user()->username }}
                                </p>
                            </li>
                            <!-- Menu Body -->
                            @if(Auth::user()->isAdmin)
                                <li class="user-body">
                                    <div class="col-xs-6 text-center">
                                        <a href="/uye-duzenle">Üyeler</a>
                                    </div>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="/uye-duzenle" class="btn btn-default btn-flat">Profil</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="/cikis" class="btn btn-default btn-flat">Çıkış Yap</a>
                                    </div>
                                </li>
                            @else

                            @endif
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ asset('avatar.jpg') }}" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->username }}</p>
                </div>
            </div>
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header">MAIN NAVIGATION</li>
                <li class="active">
                    <a href="/">
                        <i class="fa fa-dashboard"></i> <span>Anasayfa</span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>Yönetim</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        @if(Auth::user()->isAdmin)
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-phone"></i> <span>SMS Bilgilendirme</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="/sms-gonder"><i class="fa fa-circle-o"></i> SMS Gönder</a></li>
                                    <li><a href="/sms-goruntule"><i class="fa fa-circle-o"></i> SMS Görüntüle</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-area-chart"></i> <span>Şikayet & Öneri</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="/sikayetler"><i class="fa fa-circle-o"></i> Şikayetler</a></li>
                                    <li><a href="/oneriler"><i class="fa fa-circle-o"></i> Öneriler</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-bar-chart"></i> <span>Anket</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="/anket-ekle"><i class="fa fa-circle-o"></i> Anket Ekle</a></li>
                                    <li><a href="/anketler"><i class="fa fa-circle-o"></i> Anket Düzenle/Sil</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-files-o"></i> <span>Dosya Paylaşım</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="/dosya-ekle"><i class="fa fa-circle-o"></i> Dosya Ekle</a></li>
                                    <li><a href="/dosya-duzenle"><i class="fa fa-circle-o"></i> Dosya Düzenle/Sil</a></li>
                                    <li><a href="/gelen-dosyalar"><i class="fa fa-circle-o"></i> Dosya Gör</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-user"></i>
                                    <span>Üyeler</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="/uye-ekle"><i class="fa fa-circle-o"></i> Üye Ekle</a></li>
                                    <li><a href="/uye-duzenle"><i class="fa fa-circle-o"></i> Üye Düzenle/Sil</a></li>
                                </ul>
                            </li>

                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-book"></i>
                                    <span>Yönetim Duyuruları</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="/user-uyuru-ekle"><i class="fa fa-circle-o"></i> Duyuru Ekle</a></li>
                                    <li><a href="/duyuru-duzenle?isUser=1"><i class="fa fa-circle-o"></i> Duyuru Düzenle/Sil</a></li>
                                </ul>
                            </li>
                        @else
                            <li><a href="/duyuru-duzenle?isUser=1"><i class="fa fa-circle-o"></i> Yönetim Duyurular</a></li>
                            <li class="treeview">
                                <a href="/dosyalar">
                                    <i class="fa fa-files-o"></i> <span>Dosyalar</span>
                                </a>
                            </li>
                            <li class="treeview">
                                <a href="/kullanici-anket">
                                    <i class="fa fa-bar-chart"></i> <span>Anketler</span>
                                </a>
                            </li>

                            <li class="treeview">
                                <a href="/kullanici-sikayet-ekle">
                                    <i class="fa fa-bar-chart"></i> <span>Şikayet Ekle</span>
                                </a>
                            </li>
                            <li class="treeview">
                                <a href="/kullanici-oneri-ekle">
                                    <i class="fa fa-bar-chart"></i> <span>Öneri Ekle</span>
                                </a>
                            </li>
                        @endif
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>Sipariş</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        @if(Auth::user()->isAdmin)
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-book"></i>
                                    <span>Ürünler</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="/urun-ekle"><i class="fa fa-circle-o"></i> Ürün Ekle</a></li>
                                    <li><a href="/urun-duzenle"><i class="fa fa-circle-o"></i> Ürün Düzenle/Sil</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="/excel-veri">
                                    <i class="fa fa-book"></i>
                                    <span>Excel Veri Aktar</span>
                                </a>
                            </li>
                            <li class="treeview">
                                <a href="/kategorilendir">
                                    <i class="fa fa-book"></i>
                                    <span>Ürün Kategorilendirme</span>
                                </a>
                            </li>
                            <li class="treeview">
                                <a href="/siparis-ekle">
                                    <i class="fa fa-bar-chart"></i> <span>Siparişler</span>
                                </a>
                            </li>
                            <li class="treeview">
                                <a href="/onaylanan-siparisler">
                                    <i class="fa fa-bar-chart"></i> <span>Onaylanan Siparişler</span>
                                </a>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-book"></i>
                                    <span>Sipariş Duyuruları</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="/duyuru-ekle"><i class="fa fa-circle-o"></i> Duyuru Ekle</a></li>
                                    <li><a href="/duyuru-duzenle?isUser=0"><i class="fa fa-circle-o"></i> Duyuru Düzenle/Sil</a></li>
                                </ul>
                            </li>
                        @else
                            <li class="treeview">
                                <a href="/urunler">
                                    <i class="fa fa-shopping-basket"></i> <span>Ürünler</span>
                                </a>
                            </li>
                            <li class="treeview">
                                <a href="/sepet">
                                    <i class="fa fa-shopping-basket"></i> <span>Sepetim</span>
                                </a>
                            </li>
                            <li><a href="/duyuru-duzenle?isUser=0"><i class="fa fa-circle-o"></i> Sipariş Duyurular</a></li>
                        @endif
                    </ul>
                </li>
                <li class="treeview">
                    <a href="/cikis">
                        <i class="fa fa-user"></i> <span>Çıkış Yap</span>
                    </a>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    @yield('content')

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2
        </div>
        <strong>Copyright &copy; 2014-2017 <a href="http://www.codestepajans.com" target="_blank">Code Step Ajans</a>.</strong> Tüm Hakları saklıdır.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
            <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane" id="control-sidebar-home-tab">
                <h3 class="control-sidebar-heading">Recent Activity</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript::;">
                            <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                                <p>Will be 23 on April 24th</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript::;">
                            <i class="menu-icon fa fa-user bg-yellow"></i>
                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
                                <p>New phone +1(800)555-1234</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript::;">
                            <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
                                <p>nora@example.com</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript::;">
                            <i class="menu-icon fa fa-file-code-o bg-green"></i>
                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
                                <p>Execution time 5 seconds</p>
                            </div>
                        </a>
                    </li>
                </ul><!-- /.control-sidebar-menu -->

                <h3 class="control-sidebar-heading">Tasks Progress</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript::;">
                            <h4 class="control-sidebar-subheading">
                                Custom Template Design
                                <span class="label label-danger pull-right">70%</span>
                            </h4>
                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript::;">
                            <h4 class="control-sidebar-subheading">
                                Update Resume
                                <span class="label label-success pull-right">95%</span>
                            </h4>
                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript::;">
                            <h4 class="control-sidebar-subheading">
                                Laravel Integration
                                <span class="label label-warning pull-right">50%</span>
                            </h4>
                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript::;">
                            <h4 class="control-sidebar-subheading">
                                Back End Framework
                                <span class="label label-primary pull-right">68%</span>
                            </h4>
                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                            </div>
                        </a>
                    </li>
                </ul><!-- /.control-sidebar-menu -->

            </div><!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class="tab-pane" id="control-sidebar-settings-tab">
                <form method="post">
                    <h3 class="control-sidebar-heading">General Settings</h3>
                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Report panel usage
                            <input type="checkbox" class="pull-right" checked>
                        </label>
                        <p>
                            Some information about this general settings option
                        </p>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Allow mail redirect
                            <input type="checkbox" class="pull-right" checked>
                        </label>
                        <p>
                            Other sets of options are available
                        </p>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Expose author name in posts
                            <input type="checkbox" class="pull-right" checked>
                        </label>
                        <p>
                            Allow the user to show his name in blog posts
                        </p>
                    </div><!-- /.form-group -->

                    <h3 class="control-sidebar-heading">Chat Settings</h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Show me as online
                            <input type="checkbox" class="pull-right" checked>
                        </label>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Turn off notifications
                            <input type="checkbox" class="pull-right">
                        </label>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Delete chat history
                            <a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                        </label>
                    </div><!-- /.form-group -->
                </form>
            </div><!-- /.tab-pane -->
        </div>
    </aside><!-- /.control-sidebar -->



    <div class="control-sidebar-bg"></div>
</div><!-- ./wrapper -->

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.5 -->
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="{{ asset('plugins/morris/morris.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('plugins/sparkline/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap -->
<script src="{{ asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('plugins/knob/jquery.knob.js') }}"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- datepicker -->
<script src="{{ asset('plugins/datepicker/bootstrap-datepicker.js') }}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<!-- Slimscroll -->
<script src="{{ asset('plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('plugins/fastclick/fastclick.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/app.min.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js') }}"></script>
<script src="{{ asset('plugins/select2/select2.full.min.js') }}"></script>
<script>
    $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();


    });
</script>

</body>
</html>