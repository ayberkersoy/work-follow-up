@extends('layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Duyurular
                <small>Duyuru Düzenle</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="/"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
                <li><a href="duyuru-duzenle">Duyurular</a></li>
                <li class="active">Duyuru Düzenle</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Duyuru Düzenle</h3>
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
                            <th>Duyuru Başlığı</th>
                            <th>Duyuru İçeriği</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Duyuru Başlığı</th>
                            <th>Duyuru İçeriği</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <tr>
                            <td>ID</td>
                            <td>Duyuru Başlığı</td>
                            <td>Duyuru İçeriği</td>
                        </tr>
                        </tbody>
                    </table>
                </div><!-- /.box-body -->
                <div class="box-footer">

                </div><!-- /.box-footer-->
            </div><!-- /.box -->

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

@endsection