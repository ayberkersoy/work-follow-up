@extends('layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Muhasebe Notlar
            </h1>
            <ol class="breadcrumb">
                <li><a href="/"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
                <li class="active">Muhasebe Notlar</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Muhasebe Notlar</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <script type="text/javascript">
                        $(document).ready(function() {
                            $('#yoneticilerer').DataTable({
                                "order": [[ 0, "desc" ]]
                            });
                        });
                    </script>
                    <table id="yoneticilerer" class="table table-bordered table-striped table-hover dataTable">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Atayan Kişi</th>
                            <th>Not İçeriği</th>
                            <th>Detay/Onayla</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Atayan Kişi</th>
                            <th>Not İçeriği</th>
                            <th>Detay/Onayla</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($notes as $note)
                            @if($note->status == 0 && $note->note_category_id == 3)
                                <tr>
                                    <td>{{ $note->id }}</td>
                                    <td>{{ $note->user->username }}</td>
                                    <td>{{ substr($note->content, 0, 100) }}</td>
                                    <td>
                                        <form action="/notlar/{{ $note->id }}" method="post">
                                            {{ csrf_field() }}
                                            <a href="/not/{{ $note->id }}" class="btn btn-info"><i class="fa fa-eye"></i></a>
                                            <button class="btn btn-success" type="submit"><i class="fa fa-check"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endif
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