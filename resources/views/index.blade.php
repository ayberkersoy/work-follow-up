@extends('layout')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Deniz Sitesi
            </h1>

        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            @if(Auth::user()->isAdmin)
                <div class="row">
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-aqua">
                            <div class="inner">
                                <h3>{{ $orderCount }}</h3>
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
                                <h3>{{ $userCount }}</h3>
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
                                <h3>{{ $productCount }}</h3>
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
                                <h3>{{ $notiCount }}</h3>
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
                                @foreach($lastFiveUser as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->username }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->surname }}</td>
                                        <td><a href="/uye-detay/{{ $user->id }}"><i class="fa fa-eye"></i></a></td>
                                    </tr>
                                @endforeach
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
                                @foreach($lastFiveOrder as $order)
                                    <tr>
                                        <td>{{ $order->user->username }}</td>
                                        <td>{{ $order->created_at->format('d/m/Y') }}</td>
                                        <td>{{ $order->orderHour }}</td>
                                        <td><a href="/siparis-goruntule/{{ $order->id }}/{{ $order->user_id }}"><i class="fa fa-eye"></i></a></td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </section><!-- /.Left col -->
                </div><!-- /.row (main row) -->
            @else
                <div class="row">
                    <div class="col-md-4 col-md-offset-1">
                        <center><a href="/duyuru-duzenle?isUser=1" style="color: black;"><i class="fa fa-user" style="font-size: 300px !important; color: #34495e !important;"></i></a></center><br>
                        <center><a href="/duyuru-duzenle?isUser=1" style="font-size:24px">Yönetim Duyuruları</a></center>
                    </div>
                    <div class="col-md-4">
                        <center><a href="/duyuru-duzenle?isUser=0" style="color: black;"><i class="fa fa-shopping-basket" style="font-size: 300px !important; color: #3498db !important;"></i></a></center><br>
                        <center><a href="/duyuru-duzenle?isUser=0" style="font-size:24px">Sipariş ve Duyurular</a></center>
                    </div>
                </div><!-- /.row -->
            @endif


        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
@endsection