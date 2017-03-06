@extends('layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Ürün Detay
            </h1>
            <ol class="breadcrumb">
                <li><a href="anasayfa"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
                <li><a href="urun-duzenle">Ürünler</a></li>
                <li class="active">Ürün Detay</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Ürün Detay</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <form action="/urun-detay/{{ $product->id }}" method="post">
                        {{ csrf_field() }}
                        <table class="table table-bordered">
                            <tr>
                                <td>
                                    <p>
                                        Ürün Adı
                                    </p>
                                </td>
                                <td>
                                    <input type="text" name="name" class="form-control" value="{{ $product->name }}" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        Ürün Fiyat
                                    </p>
                                </td>
                                <td>
                                    <input type="text" name="description" class="form-control" value="{{ $product->fiyat }}" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        Ürün Barkod Kodu
                                    </p>
                                </td>
                                <td>
                                    <input type="text" name="barkod_code" class="form-control" value="{{ $product->barkod_code }}" />
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
                                        <option value="1">Gıda</option>
                                        <option value="2">Manav</option>
                                        <option value="3">Et ve Et Mamülleri</option>
                                        <option value="4">Şarküteri</option>
                                        <option value="5">İçecek</option>
                                        <option value="6">Bisküvi-Çikolata</option>
                                        <option value="7">Unlu Mamüller</option>
                                        <option value="8">Temizlik</option>
                                        <option value="9">Kişisel Temizlik</option>
                                        <option value="10">Züccaciye</option>
                                        <option value="11">Çocuk</option>
                                        <option value="12">Doğal Ürünler</option>
                                        <option value="13">Tekstil</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" value="Düzenle" class="btn btn-success">
                                </td>
                            </tr>
                        </table>
                    </form>
                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
@endsection