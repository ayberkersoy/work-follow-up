@extends('layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Anketler
            </h1>
            <ol class="breadcrumb">
                <li><a href="/"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
                <li class="active">Anketler</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Anketler</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    @if (session()->exists('success'))
                        <div class="alert alert-info"> {{ session()->get('success') }}</div>
                        {{ session()->forget('success') }}
                    @endif
                    <script type="text/javascript">
                        $(document).ready(function() {
                            $('#yoneticilerer').DataTable();
                        });
                    </script>
                    <table id="yoneticilerer" class="display" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Anket Adı</th>
                            <th>Anket Cevap Sayısı</th>
                            <th>Tarih</th>
                            <th>Detay</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Anket Adı</th>
                            <th>Anket Cevap Sayısı</th>
                            <th>Tarih</th>
                            <th>Detay</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($anketler as $anket)
                            <tr>
                                <td>{{ $anket->id }}</td>
                                <td>{{ $anket->title }}</td>
                                <td>{!! $anket->useranswer->count() !!}</td>
                                <td>{!! $anket->created_at->format('d/m/Y H:i') !!}</td>
                                <td>
                                    <a href="/anket-oyla/{{ $anket->id }}" class="btn btn-success"><i class="fa fa-eye"></i></a>
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