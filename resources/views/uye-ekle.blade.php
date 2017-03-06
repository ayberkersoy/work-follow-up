@extends('layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Üye Ekle
            </h1>
            <ol class="breadcrumb">
                <li><a href="anasayfa"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
                <li><a href="uye-ekle">Üyeler</a></li>
                <li class="active">Üye Ekle</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Üye Ekle</h3>
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
                    <form action="uye-ekle" method="post">
                        {{ csrf_field() }}
                        <table class="table table-bordered">
                            <tr>
                                <td>
                                    <p>
                                        Kullanıcı Adı
                                    </p>
                                </td>
                                <td>
                                    <input type="text" name="username" class="form-control" value="{{ old('username') }}" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        E-mail Adresi
                                    </p>
                                </td>
                                <td>
                                    <input type="text" name="email" class="form-control" value="" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        Telefon Numarası
                                    </p>
                                </td>
                                <td>
                                    <input type="text" name="telephone" class="form-control" value="" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        Şifre
                                    </p>
                                </td>
                                <td>
                                    <input type="password" name="password" class="form-control" value="" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        Blok
                                    </p>
                                </td>
                                <td>
                                    <input type="text" name="block" class="form-control" value="" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        Daire
                                    </p>
                                </td>
                                <td>
                                    <input type="text" name="flat" class="form-control" value="" />
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