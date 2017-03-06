@extends('layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Duyuru Ekle
            </h1>
            <ol class="breadcrumb">
                <li><a href="anasayfa"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
                <li><a href="duyuru-ekle">Duyurular</a></li>
                <li class="active">Duyuru Ekle</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Duyuru Ekle</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <form action="/duyuru-ekle" method="post">
                        {{ csrf_field() }}
                        <table class="table table-bordered">
                            <tr>
                                <td>
                                    <p>
                                        Duyuru Başlığı
                                    </p>
                                </td>
                                <td>
                                    <input type="text" name="title" class="form-control" value="" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        Duyuru İçeriği
                                    </p>
                                </td>
                                <td>
                                    <script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
                                    <textarea name="desc" id="ckeditor" class="ckeditor" cols="30" rows="10"></textarea>
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