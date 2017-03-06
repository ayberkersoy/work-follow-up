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
                        @foreach($baskets as $basket)
                            <tr>
                                <td>{{ $basket->id }}</td>
                                <td>{{ $basket->product->name }}</td>
                                <td>{{ $basket->product->fiyat }} TL</td>
                                <td>{{ $basket->howMany }}</td>
                                <form action="/sepet/{{ $basket->id }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <td>
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                                    </td>
                                </form>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <h3><label class="label label-info">Toplam Tutar: {{ $total }} TL</label></h3>
                        <form action="/sepet-onay" method="post">
                            {{ csrf_field() }}
                            Açıklama:
                            <br><input type="text" class="form-control" name="desc" placeholder="Açıklama">
                            <br>
                            <button class="btn btn-success" type="submit">Sepeti Onayla</button>
                        </form>
                    <p>Ekmek ve su hariç öğlen 1'den sonra verilen siparişler ertesi gün teslim edilmektedir. </p>
                </div><!-- /.box-body -->
                <div class="box-footer">

                </div><!-- /.box-footer-->
            </div><!-- /.box -->

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

@endsection