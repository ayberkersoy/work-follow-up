@extends('layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Ürünler
                <small>Ürün Düzenle</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="/"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
                <li><a href="urun-duzenle">Ürünler</a></li>
                <li class="active">Ürün Düzenle</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Ürün Düzenle</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <script type="text/javascript">
                        $(document).ready(function() {
                            $('#yoneticilerer').DataTable();
                        });
                    </script>
                    <table id="yoneticilerer" class="display" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Barkod Kodu</th>
                            <th>Ürün Başlığı</th>
                            <th>Ürün Fiyat</th>
                            <th>Ürün Düzenle/Sil</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Barkod Kodu</th>
                            <th>Ürün Başlığı</th>
                            <th>Ürün Fiyat</th>
                            <th>Ürün Düzenle/Sil</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->barkod_code }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->fiyat }} TL</td>
                                <td>
                                    <a href="/urun-detay/{{ $product->id }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                    <form action="/urun-duzenle/{{ $product->id }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button class="btn btn-danger" type="submit"><i class="fa fa-trash-o"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div><!-- /.box-body -->
                <div class="box-footer">

                </div><!-- /.box-footer-->
            </div><!-- /.box -->

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

@endsection