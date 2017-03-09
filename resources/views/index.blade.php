@extends('layout')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Yıltur Mimarlık
            </h1>

        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->

                <div class="row">
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-aqua">
                            <div class="inner">
                                <h3>22</h3>
                                <p>Siparişler</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-mouse-pointer"></i>
                            </div>
                        </div>
                    </div><!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-yellow">
                            <div class="inner">
                                <h3>55</h3>
                                <p>Kullanıcılar</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                        </div>
                    </div><!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-red">
                            <div class="inner">
                                <h3>123</h3>
                                <p>Ürün Sayısı</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-ios-book"></i>
                            </div>
                        </div>
                    </div><!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-green">
                            <div class="inner">
                                <h3>123123</h3>
                                <p>Duyuru Sayısı</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-play"></i>
                            </div>
                        </div>
                    </div><!-- ./col -->
                </div><!-- /.row -->
                <!-- Main row -->
                <div class="row">
                    <!-- Left col -->
                    <section class="col-lg-12 connectedSortable" style="background-color: #fff">
                        <div class="col-sm-12">
                            <h4>Son Kullanıcılar</h4>
                            <table class="table table-hover table-bordered table-striped">
                                <tr>
                                    <th>Kullanıcı ID</th>
                                    <th>Kullanıcı Adı</th>
                                    <th>İsim</th>
                                    <th>Soyisim</th>
                                    <th>Görüntüle</th>
                                </tr>

                            </table>
                        </div>
                        <div class="col-sm-12">
                            <h4>Son Siparişler</h4>
                            <table class="table table-hover table-bordered table-striped">
                                <tr>
                                    <th>Kullanıcı Adı</th>
                                    <th>Sipariş Tarihi</th>
                                    <th>Sipariş Saati - Açıklama</th>
                                    <th>Görüntüle</th>
                                </tr>

                            </table>
                        </div>
                    </section><!-- /.Left col -->
                </div><!-- /.row (main row) -->

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
@endsection