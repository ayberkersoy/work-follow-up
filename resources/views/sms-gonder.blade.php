@extends('layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                SMS Gönder
            </h1>
            <ol class="breadcrumb">
                <li><a href="anasayfa"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
                <li class="active">SMS Gönder</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">SMS Gönder</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <form action="/sms-gonder" method="post">
                        {{ csrf_field() }}
                        <table class="table table-bordered">
                            <tr>
                                <td>
                                    <p>
                                        Kullanıcı
                                    </p>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control select2" style="width: 100%;">
                                            <option selected="selected">Ad Soyad - Blok - Daire</option>
                                            <option>Ad Soyad - Blok - Daire</option>
                                            <option>Ad Soyad - Blok - Daire</option>
                                            <option>Ad Soyad - Blok - Daire</option>
                                            <option>Ad Soyad - Blok - Daire</option>
                                            <option>Ad Soyad - Blok - Daire</option>
                                            <option>Ad Soyad - Blok - Daire</option>
                                        </select>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        SMS İçeriği
                                    </p>
                                </td>
                                <td>
                                    <input type="text" name="name" class="form-control" value="" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" value="Gönder" class="btn btn-success">
                                </td>
                            </tr>
                        </table>
                    </form>
                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
@endsection