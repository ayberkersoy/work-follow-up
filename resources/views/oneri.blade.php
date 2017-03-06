@extends('layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Öneri Detay
            </h1>
            <ol class="breadcrumb">
                <li><a href="anasayfa"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
                <li><a href="/oneriler">Öneriler</a></li>
                <li class="active">Öneri Detay</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Öneri Detay</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <table class="table table-bordered">
                        <tr>
                            <td>
                                <p>
                                    Kullanıcı Adı
                                </p>
                            </td>
                            <td>
                                <p>
                                    <b><a href="/uye-detay/{{ $oneri->user_id }}">{{ $oneri->user->username }}</a></b>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>
                                    Öneri Başlığı
                                </p>
                            </td>
                            <td>
                                <p>
                                    <b>{{ $oneri->title }}</b>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>
                                    Öneri İçeriği
                                </p>
                            </td>
                            <td>
                                <p>
                                    <b>{{ $oneri->body }}</b>
                                </p>
                            </td>
                        </tr>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
@endsection