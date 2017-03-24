@extends('layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Not
            </h1>
            <ol class="breadcrumb">
                <li><a href="anasayfa"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
                <li class="active">Not</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Not</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    @if (session()->exists('success'))
                        <div class="alert alert-success"> {{ session()->get('success') }}</div>
                        {{ session()->forget('success') }}
                    @endif
                        <table class="table table-bordered">
                            <tr>
                                <th>İşin Adı</th>
                                <th>Açıklama</th>
                                <th>Miktar</th>
                                <th>Birim</th>
                                <th>Birim Fiyat</th>
                                <th>Toplam Tutar</th>
                            </tr>
                            <tr>
                                <td>{{ $progress->job }}</td>
                                <td>{{ $progress->description }}</td>
                                <td>{{ $progress->amount }}</td>
                                <td>{{ $progress->unit }}</td>
                                <td>{{ $progress->unit_price }}</td>
                                <td>{{ $progress->total }}</td>
                            </tr>
                        </table>
                        <br>
                    @if($notes->count())
                        <h3>Notlar</h3>
                        @foreach($notes as $note)
                            <table class="table table-bordered" style="border:2px solid #000 !important;">
                                <tr>
                                    <th>Not Kategori</th>
                                    <td>{{ $note->category->name }}</td>
                                </tr>
                                <tr>
                                    <th>Atayan Kişi</th>
                                    <td>{{ $note->user->username }}</td>
                                </tr>
                                <tr>
                                    <th>Atanan Kişi</th>
                                    <td>{{ $note->to_user->username }}</td>
                                </tr>
                                <tr>
                                    <th>Not İçeriği</th>
                                    <td>{{ $note->content }}</td>
                                </tr>
                                <tr>
                                    <th>Durum</th>
                                    <td>
                                        @if($note->status == 1)
                                            <span style="font-style: italic;">{{ $note->completed->username }} tarafından tamamlandı.</span>
                                        @else
                                            <form action="/hakedis-notlar/{{ $progress->id }}" method="post">
                                                {{ method_field('PATCH') }}
                                                {{ csrf_field() }}
                                                <input type="hidden" value="{{ $note->id }}" name="note">
                                                <button class="btn btn-success" type="submit">Tamamla</button>
                                            </form>
                                        @endif

                                    </td>
                                </tr>
                            </table>
                            <br>
                        @endforeach
                    @endif
                        <br>
                        <h3>Not Ekle</h3>
                    <form action="/hakedis-notlar/{{ $progress->id }}" method="post">
                        {{ csrf_field() }}
                        <table class="table table-bordered">
                            <tr>
                                <td>
                                    <p>
                                        Not Kategorisi
                                    </p>
                                </td>
                                <td>
                                    <select name="category" class="form-control" style="width: 100%">
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
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
                                    <p>
                                        Not
                                    </p>
                                </td>
                                <td>
                                    <input type="text" name="note" class="form-control" value="{{ old('note') }}" />
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