@extends('layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Duyuru Düzenle
            </h1>
            <ol class="breadcrumb">
                <li><a href="anasayfa"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
                <li><a href="duyuru-ekle">Duyurular</a></li>
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
                    <form action="/duyuru-detay/{{ $isUser }}/{{ $notification->id }}" method="post">
                        {{ csrf_field() }}
                        <table class="table table-bordered">
                            <tr>
                                <td>
                                    <p>
                                        Duyuru Başlığı
                                    </p>
                                </td>
                                <td>
                                    @if(Auth::user()->isAdmin)
                                        <input type="text" name="title" class="form-control" value="{{ $notification->title }}" />
                                    @else
                                        {!! $notification->title !!}
                                    @endif

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        Duyuru İçeriği
                                    </p>
                                </td>
                                <td>
                                    @if(Auth::user()->isAdmin)
                                        <script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
                                        <textarea name="desc" id="ckeditor" class="ckeditor" cols="30" rows="10">{{ $notification->content }}</textarea>
                                    @else
                                        {!! $notification->content !!}
                                    @endif

                                </td>
                            </tr>
                            @if(Auth::user()->isAdmin)
                                <tr>
                                    <td>
                                        <input type="submit" value="Düzenle" class="btn btn-success">
                                    </td>
                                </tr>
                            @else

                            @endif

                        </table>
                    </form>
                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
@endsection