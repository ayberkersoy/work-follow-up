@extends('layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Hakediş Düzenle
            </h1>
            <ol class="breadcrumb">
                <li><a href="anasayfa"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
                <li class="active">Hakediş Düzenle</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Hakediş Düzenle</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
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
                    <form action="/hakedis-duzenle/{{ $discovery->id }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <table class="table table-bordered">
                            <tr>
                                <td>
                                    <p>İşin Adı</p>
                                </td>
                                <td>
                                    <input type="text" name="job" class="form-control" value="{{ $discovery->job }}">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Açıklama</p>
                                </td>
                                <td>
                                    <input type="text" name="description" class="form-control" value="{{ $discovery->description }}">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Miktar</p>
                                </td>
                                <td>
                                    <input type="text" name="amount" class="form-control" value="{{ $discovery->amount }}">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Birim</p>
                                </td>
                                <td>
                                    <input type="text" name="unit" class="form-control" value="{{ $discovery->unit }}">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Birim Fiyat</p>
                                </td>
                                <td>
                                    <input type="text" name="unit_price" class="form-control" value="{{ $discovery->unit_price }}">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Maliyet Birim Fiyat</p>
                                </td>
                                <td>
                                    <input type="text" name="last_unit_price" class="form-control" value="{{ $discovery->last_unit_price }}">
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
    <script>
        $(function () {
            //Initialize Select2 Elements
            $(".select2").select2();

        });
    </script>
@endsection