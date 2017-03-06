@extends('layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Ürün Ekle
            </h1>
            <ol class="breadcrumb">
                <li><a href="anasayfa"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
                <li><a href="urun-duzenle">Ürünler</a></li>
                <li class="active">Ürün Ekle</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Ürün Ekle</h3>
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
                                        Ürün Fiyatı
                                    </p>
                                </td>
                                <td>
                                    <input type="text" name="price" class="form-control" value="" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        Ürün Barkod Kodu
                                    </p>
                                </td>
                                <td>
                                    <input type="text" name="barkod_code" class="form-control" value="" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        Ürün Kategori
                                    </p>
                                </td>
                                <td>
                                    <select name="category_id" class="form-control">
                                        <option value="1">Kategori1</option>
                                        <option value="2">Kategori2</option>
                                        <option value="3">Kategori3</option>
                                    </select>
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