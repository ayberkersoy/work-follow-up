@extends('layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Gelen Dosyalar
            </h1>
            <ol class="breadcrumb">
                <li><a href="anasayfa"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
                <li><a href="dosya-duzenle">Dosyalar</a></li>
                <li class="active">Gelen Dosyalar</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Gelen Dosyalar</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    {{ csrf_field() }}
                    <table class="table table-bordered">
                        <tr>
                            <td>
                                <p>
                                    Kullanıcı Adı
                                </p>
                            </td>
                            <td>
                                <p><b>{{ $file->user->username }}</b></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>
                                    Tarih
                                </p>
                            </td>
                            <td>
                                <p><b>{{ $file->created_at->format('d/m/Y H:i') }}</b></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>
                                    Dosya Adı
                                </p>
                            </td>
                            <td>
                                <p><b>{{ $file->title }}</b></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>
                                    Dosya Açıklaması
                                </p>
                            </td>
                            <td>
                                <p><b>{{ $file->body }}</b></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>
                                    Dosya
                                </p>
                            </td>
                            <td>
                                <p><a href="{{ url($file->path) }}" class="btn btn-info">Dosya İndir</a></p>
                            </td>
                        </tr>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
@endsection