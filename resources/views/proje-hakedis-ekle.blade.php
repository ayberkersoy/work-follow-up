@extends('layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Hakediş Ekle
            </h1>
            <ol class="breadcrumb">
                <li><a href="anasayfa"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
                <li class="active">Hakediş Ekle</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Hakediş Ekle</h3>
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
                    <form action="/proje-hakedis-ekle/{{ $project_id }}/{{ $discovery_id }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <table class="table table-bordered">
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
                                    <p>Not Kategori</p>
                                </td>
                                <td>
                                    <select name="note_category_id" class="select2" style="width: 100%">
                                        @foreach($notecategories as $notecategory)
                                            <option value="{{ $notecategory->id }}">{{ $notecategory->name }}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        Atanacak Kişi/Kişiler
                                    </p>
                                </td>
                                <td>
                                    <select name="users[]" class="form-control" multiple>
                                        @foreach($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->username }}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Not</p>
                                </td>
                                <td>
                                    <input type="text" name="body" class="form-control">
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