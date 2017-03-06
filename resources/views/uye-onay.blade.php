@extends('layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Üyeler
                <small>Üye Düzenle</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="/"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
                <li><a href="uye-duzenle">Üyeler</a></li>
                <li class="active">Üye Düzenle</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Üye Düzenle</h3>
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
                            <th>Kullanıcı Adı</th>
                            <th>Adı</th>
                            <th>Soyadı</th>
                            <th>Blok</th>
                            <th>Daire</th>
                            <th>Aktivasyon</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Kullanıcı Adı</th>
                            <th>Adı</th>
                            <th>Soyadı</th>
                            <th>Blok</th>
                            <th>Daire</th>
                            <th>Aktivasyon</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->surname }}</td>
                                <td>{{ $user->block }}</td>
                                <td>{{ $user->flat }}</td>
                                <td>
                                    <form action="/uye-onay/{{ $user->id }}" method="post">
                                        {{ csrf_field() }}
                                        <button class="btn btn-success" type="submit"><i class="fa fa-check"></i></button>
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