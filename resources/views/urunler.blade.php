@extends('layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Ürünler
            </h1>
            <ol class="breadcrumb">
                <li><a href="/"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
                <li class="active">Ürünler</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Ürünler</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">

                    <form action="/urunler" method="get">
                        <div class="form-group">
                            <label for="category">Kategori:</label>
                            <select name="category" class="form-control" id="category" onchange="this.form.submit()">
                                <option value="" selected>Tümü</option>
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
                        </div>
                    </form>
                    <br>
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (session()->exists('success'))
                        <div class="alert alert-success"> {{ session()->get('success') }}</div>
                        {{ session()->forget('success') }}
                    @endif
                    <script type="text/javascript">
                        $(document).ready(function() {
                            $('#yoneticilerer').DataTable();
                        });
                    </script>
                    <table id="yoneticilerer" class="display" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Ürün Başlığı</th>
                            <th>Ürün Fiyat</th>
                            <th>Ürün Sayı</th>
                            <th>Ürün Ekle</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Ürün Başlığı</th>
                            <th>Ürün Fiyat</th>
                            <th>Ürün Sayı</th>
                            <th>Ürün Ekle</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->fiyat }} TL</td>
                                <form action="/urunler/{{ $product->id }}" method="post">
                                    {{ csrf_field() }}
                                    <td><input type="text" class="form-control" name="urunSayi"></td>
                                    <td>
                                        <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i></button>
                                    </td>
                                </form>
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
