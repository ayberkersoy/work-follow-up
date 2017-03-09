@extends('layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Proje Ekle
            </h1>
            <ol class="breadcrumb">
                <li><a href="anasayfa"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
                <li><a href="projeler">Projeler</a></li>
                <li class="active">Proje Ekle</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Proje Ekle</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="proje-ekle" method="post">
                        {{ csrf_field() }}
                        <table class="table table-bordered">
                            <tr>
                                <td>
                                    <p>
                                        Firma Adı*
                                    </p>
                                </td>
                                <td>
                                    <input type="text" name="firm_name" class="form-control" value="{{ old('firm_name') }}" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        Proje Adı*
                                    </p>
                                </td>
                                <td>
                                    <input type="text" name="project_name" class="form-control" value="{{ old('project_name') }}" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        Proje Adresi*
                                    </p>
                                </td>
                                <td>
                                    <input type="text" name="address" class="form-control" value="{{ old('address') }}" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        Proje Yetklisi*
                                    </p>
                                </td>
                                <td>
                                    <input type="text" name="authorized" class="form-control" value="{{ old('authorized') }}" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        Başlama Tarihi
                                    </p>
                                </td>
                                <td>
                                    <input type="date" name="start_date" class="form-control" value="" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        Teslim Tarihi
                                    </p>
                                </td>
                                <td>
                                    <input type="date" name="end_date" class="form-control" value="" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" value="Ekle" class="btn btn-success">
                                </td>
                            </tr>
                        </table>
                    </form>
                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
@endsection