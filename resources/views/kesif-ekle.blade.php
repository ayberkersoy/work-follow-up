@extends('layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Keşif Ekle
            </h1>
            <ol class="breadcrumb">
                <li><a href="anasayfa"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
                <li class="active">Keşif Ekle</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Keşif Ekle</h3>
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
                    @if (session()->exists('success'))
                        <div class="alert alert-success"> {{ session()->get('success') }}</div>
                        {{ session()->forget('success') }}
                    @endif
                    <form action="kesif-ekle" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <table class="table table-bordered">
                            <tr>
                                <td>
                                    <p>
                                        Proje Adı
                                    </p>
                                </td>
                                <td>
                                    <select name="project_id" class="select2" style="width: 100%">
                                        @foreach($projects as $project)
                                            <option value="{{ $project->id }}">{{ $project->project_name }}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        Ana Başlık
                                    </p>
                                </td>
                                <td>
                                    <select name="dis_category_id" class="select2" style="width: 100%">
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>İşin Adı</p>
                                </td>
                                <td>
                                    <input type="text" name="job" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Açıklama</p>
                                </td>
                                <td>
                                    <input type="text" name="description" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Miktar</p>
                                </td>
                                <td>
                                    <input type="text" name="amount" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Birim</p>
                                </td>
                                <td>
                                    <input type="text" name="unit" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Birim Fiyat</p>
                                </td>
                                <td>
                                    <input type="text" name="unit_price" class="form-control">
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
    <script>
        $(function () {
            //Initialize Select2 Elements
            $(".select2").select2();

        });
    </script>
@endsection