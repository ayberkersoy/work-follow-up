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
                            <th>Duyuru Düzenle/Sil</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Duyuru Başlığı</th>
                            <th>Duyuru İçeriği</th>
                            <th>Duyuru Düzenle/Sil</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($notifications as $notification)
                            <tr>

                                <td>{{ $notification->id }}</td>
                                <td>{{ $notification->title }}</td>
                                <td>{!! $notification->content !!}</td>
                                @if(Auth::user()->isAdmin)
                                <td>
                                    <a href="duyuru-detay/{{ $isUser }}/{{ $notification->id }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                    <form action="/duyuru-duzenle/{{ $isUser }}/{{ $notification->id }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                                    </form>
                                </td>
                                @else
                                    <td>
                                        <a href="/duyuru-detay/{{ $isUser }}/{{ $notification->id }}" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div><!-- /.box-body -->
                <div class="box-footer">

                </div><!-- /.box-footer-->
            </div><!-- /.box -->

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

@endsection