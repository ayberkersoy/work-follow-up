@extends('layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Kullanıcı Ekle
            </h1>
            <ol class="breadcrumb">
                <li><a href="anasayfa"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
                <li class="active">Kullanıcı Ekle</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Kullanıcı Ekle</h3>
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
                    <form action="kullanici-ekle" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <table class="table table-bordered">
                            <tr>
                                <td>
                                    <p>
                                        Adı
                                    </p>
                                </td>
                                <td>
                                    <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        Soyadı
                                    </p>
                                </td>
                                <td>
                                    <input type="text" name="surname" class="form-control" value="{{ old('surname') }}">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        Kullanıcı Adı
                                    </p>
                                </td>
                                <td>
                                    <input type="text" name="username" class="form-control" value="{{ old('username') }}">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        Telefon
                                    </p>
                                </td>
                                <td>
                                    <input type="text" name="phone" class="form-control" value="{{ old('phone') }}">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        E-mail
                                    </p>
                                </td>
                                <td>
                                    <input type="text" name="email" class="form-control" value="{{ old('email') }}">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        Şifre
                                    </p>
                                </td>
                                <td>
                                    <input type="text" name="password" class="form-control" value="{{ old('password') }}">
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