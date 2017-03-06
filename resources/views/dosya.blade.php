@extends('layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dosya
            </h1>
            <ol class="breadcrumb">
                <li><a href="anasayfa"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
                <li class="active">Dosya</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Dosya</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <form action="/dosya-detay/{{ $file->id }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <table class="table table-bordered">
                            <tr>
                                <td>
                                    <p>
                                        Dosya Başlığı
                                    </p>
                                </td>
                                <td>
                                    @if(Auth::user()->isAdmin)
                                        <input type="text" name="title" class="form-control" value="{{ $file->title }}" />
                                    @else
                                        {{ $file->title }}
                                    @endif

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        Dosya Açıklama
                                    </p>
                                </td>
                                <td>
                                    @if(Auth::user()->isAdmin)
                                        <input type="text" name="body" class="form-control" value="{{ $file->body }}" />
                                    @else
                                        {{ $file->body }}
                                    @endif

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        Dosya
                                    </p>
                                </td>
                                <td>
                                    @if(Auth::user()->isAdmin)
                                        <input type="file" name="dosya" class="form-control"/>
                                    @else
                                        <a href="{{ url($file->path) }}" class="btn btn-info">Dosya İndir</a>
                                        <a href="/kullanici-dosya-ekle" class="btn btn-info">Dosya Ekle</a>
                                    @endif

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    @if(Auth::user()->isAdmin)
                                        <input type="submit" value="Düzenle" class="btn btn-success">
                                    @else

                                    @endif
                                </td>
                            </tr>
                        </table>
                    </form>
                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
@endsection