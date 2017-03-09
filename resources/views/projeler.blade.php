@extends('layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Projeler
            </h1>
            <ol class="breadcrumb">
                <li><a href="/"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
                <li class="active">Projeler</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Projeler</h3>
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
                            <th>Proje Adı</th>
                            <th>Firma Adı</th>
                            <th>Yetkili Kişi</th>
                            <th>Düzenle/Sil</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Proje Adı</th>
                            <th>Firma Adı</th>
                            <th>Yetkili Kişi</th>
                            <th>Düzenle/Sil</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($projects as $project)
                            <tr>
                                <td>{{ $project->id }}</td>
                                <td>{{ $project->project_name }}</td>
                                <td>{{ $project->firm_name }}</td>
                                <td>{{ $project->authorized }}</td>
                                <td>
                                    <a href="/uye-detay/{{ $project->id }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                    <form action="/uye-duzenle/{{ $project->id }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button class="btn btn-danger" type="submit"><i class="fa fa-trash-o"></i></button>
                                    </form>
                                </td>
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