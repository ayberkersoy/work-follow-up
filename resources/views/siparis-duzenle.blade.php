@extends('layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Sipariş Düzenle
            </h1>
            <ol class="breadcrumb">
                <li><a href="anasayfa"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
                <li><a href="siparis-ekle">Siparişler</a></li>
                <li class="active">Sipariş Düzenle</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Sipariş Düzenle</h3>
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
                                        Ürün Adı
                                    </p>
                                </td>
                                <td>
                                    <input type="text" name="name" class="form-control" value="" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        Ürün Açıklaması
                                    </p>
                                </td>
                                <td>
                                    <input type="text" name="name" class="form-control" value="" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        Ürün Barkod Kodu
                                    </p>
                                </td>
                                <td>
                                    <input type="text" name="name" class="form-control" value="" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        Stok Sayısı
                                    </p>
                                </td>
                                <td>
                                    <input type="text" name="name" class="form-control" value="" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" value="Ekle" class="btn btn-success">
                                </td>
                            </tr>
                        </table>
                    </form>
                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
@endsection