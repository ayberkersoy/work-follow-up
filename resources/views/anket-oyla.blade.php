@extends('layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Anket Oyla
            </h1>
            <ol class="breadcrumb">
                <li><a href="anasayfa"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
                <li class="active">Anket Oyla</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Anket Oyla</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <form action="/anket-oyle/{{ $anket->id }}" method="post">
                        {{ csrf_field() }}
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
                                        <th>Cevaplar</th>
                                    </tr>
                                    @foreach($anket->answer as $answer)
                                        <tr>
                                            <td><input type="radio"  name="{{ $answer->question_id }}" value="{{ $answer->answer }}"> {{ $answer->answer }}</td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <td>Diğer: <input type="text" class="form-control" name="other"></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="submit" class="btn btn-success">Oyla</button>
                            </td>
                        </tr>
                    </table>
                    </form>
                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
@endsection