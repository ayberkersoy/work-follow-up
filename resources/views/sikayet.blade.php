@extends('layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Şikayet Detay
            </h1>
            <ol class="breadcrumb">
                <li><a href="anasayfa"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
                <li><a href="/sikayetler">Şikayetler</a></li>
                <li class="active">Şikayet Detay</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Şikayet Detay</h3>
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
                                    <b><a href="/uye-detay/{{ $sikayet->user_id }}">{{ $sikayet->user->username }}</a></b>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>
                                    Şikayet Başlığı
                                </p>
                            </td>
                            <td>
                                <p>
                                    <b>{{ $sikayet->title }}</b>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>
                                    Şikayet İçeriği
                                </p>
                            </td>
                            <td>
                                <p>
                                    <b>{{ $sikayet->body }}</b>
                                </p>
                            </td>
                        </tr>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
@endsection