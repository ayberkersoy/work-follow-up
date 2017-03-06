@extends('layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Sipariş Görüntüle
            </h1>
            <ol class="breadcrumb">
                <li><a href="anasayfa"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
                <li><a href="urun-duzenle">Siparişler</a></li>
                <li class="active">Sipariş Görüntüle</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Sipariş Görüntüle</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <form action="/urun-ekle" method="post">
                        {{ csrf_field() }}
                        <table class="table table-bordered">
                            <tr>
                                <td>
                                    <p>
                                        Kullanıcı Adı
                                    </p>
                                </td>
                                <td>
                                    <p><b>{{ $order->user->username }}</b></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        Sipariş Tarihi
                                    </p>
                                </td>
                                <td>
                                    <p><b>{{ $order->created_at->format('d/m/Y') }}</b></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        Sipariş Saati
                                    </p>
                                </td>
                                <td>
                                     <p><b>{{ $order->orderHour }}</b></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        Blok
                                    </p>
                                </td>
                                <td>
                                    <p><b>{{ $order->user->block }}</b></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        Daire
                                    </p>
                                </td>
                                <td>
                                    <p><b>{{ $order->user->flat }}</b></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        Sipariş
                                    </p>
                                </td>
                                <td>
                                    <table class="table table-bordered">
                                        @foreach($products as $adu)
                                        <tr>
                                            <th>{{ $adu->product->name }}</th>
                                            <th>{{ $adu->howMany }} adet</th>
                                        </tr>
                                        @endforeach
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </form>
                    <form action="/siparis-goruntule-tamamlandi/{{ $order->id }}/{{ $order->user->id }}" method="post">
                        {{ csrf_field() }}
                        <button class="btn btn-success" type="submit">Sipariş Onayla</button>
                    </form>
                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
@endsection