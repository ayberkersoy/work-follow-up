@extends('layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Anket Detay
            </h1>
            <ol class="breadcrumb">
                <li><a href="anasayfa"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
                <li><a href="/anketler">Anket</a></li>
                <li class="active">Anket Detay</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Anket Detay</h3>
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
                                    Anket Başlığı
                                </p>
                            </td>
                            <td>
                                <p>
                                    <b>{{ $anket->title }}</b>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>
                                    Anket Açıklama
                                </p>
                            </td>
                            <td>
                                <p>
                                    <b>{{ $anket->body }}</b>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>
                                    Anket Cevaplar
                                </p>
                            </td>
                            <td>
                                <table class="table table-stripped table-hover">
                                    <tr>
                                        <th>Toplam</th>
                                        <td>
                                            <table class="table table-stripped">
                                                <tr>
                                                    <th>Cevap</th>
                                                    <th>Verilen Oy</th>
                                                </tr>
                                                <tr>
                                                    <td>{{ $anket->answer[0]->answer }}</td>
                                                    <td>{{ $cevap1 }}</td>
                                                </tr>
                                                <tr>
                                                    <td>{{ $anket->answer[1]->answer }}</td>
                                                    <td>{{ $cevap2 }}</td>
                                                </tr>
                                            </table>

                                        </td>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th>Kullanıcı Adı</th>
                                        <th>Cevap</th>
                                        <th>Diğer</th>
                                    </tr>
                                    @foreach($anket->useranswer as $answer)
                                        <tr>
                                            <td>{{ $answer->user->username }}</td>
                                            <td>{{ $answer->answer->answer }}</td>
                                            <td>{{ $answer->other }}</td>
                                        </tr>
                                    @endforeach

                                </table>
                            </td>
                        </tr>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
@endsection