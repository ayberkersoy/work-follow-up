@extends('layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                {{ $discovery[0]->project->project_name }}
            </h1>
            <ol class="breadcrumb">
                <li><a href="/"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
                <li class="active">{{ $discovery[0]->project->project_name }}</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">{{ $discovery[0]->project->project_name }}</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr style="background-color: #005927; color: #fff">
                                <th>POZ</th>
                                <th>İşin Adı</th>
                                <th>Açıklama</th>
                                <th>Miktar</th>
                                <th>Birim</th>
                                <th>Birim Fiyat</th>
                                <th>Toplam Tutar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($discovery as $item)
                                @php
                                    $x = 1;
                                    $y = 1;
                                @endphp
                                <tr style="background-color: #8a6d3b; color: #fff">
                                    <td><b>{{ $x++ }}</b></td>
                                    <td colspan="6"><b>{{ $item->category->name }}</b></td>
                                </tr>
                                @foreach($discovery[$loop->index]->content as $value)
                                    <tr>
                                        <td>{{ $x }} - {{ $y++ }}</td>
                                        <td>{{ $value->job }}</td>
                                        <td>{{ $value->description }}</td>
                                        <td>{{ $value->amount }}</td>
                                        <td>{{ $value->unit }}</td>
                                        <td>{{ $value->unit_price }}</td>
                                        <td>{{ $value->amount*$value->unit_price }}</td>
                                    </tr>
                                @endforeach
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