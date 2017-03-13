@extends('layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Not Detay
            </h1>
            <ol class="breadcrumb">
                <li><a href="anasayfa"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
                <li><a href="/notlar">Notlar</a></li>
                <li class="active">Not Detay</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Not Detay</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <table class="table table-bordered">
                        <tr>
                            <td>
                                <p>
                                    Atayan Kişi
                                </p>
                            </td>
                            <td>
                                <p>
                                    {{ $note->fromUser->username }}
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>
                                    Atanan Kişi
                                </p>
                            </td>
                            <td>
                                <p>
                                    {{ $note->user->username }}
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>
                                    Not Kategorisi
                                </p>
                            </td>
                            <td>
                                <p>
                                    {{ $note->note->category->name }}
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>
                                    Not İçeriği
                                </p>
                            </td>
                            <td>
                                <p>
                                    {{ $note->note->content }}
                                </p>
                            </td>
                        </tr>
                        @if(!$note->note->discovery_id == 0)
                        <tr>
                            <td>
                                <p>
                                    İlgili Keşif Kalemi
                                </p>
                            </td>
                            <td>
                                <table class="table table-bordered table-hover table-striped">
                                    <tr>
                                        <td>İşin Adı</td>
                                        <td>Açıklaması</td>
                                        <td>Miktar</td>
                                        <td>Birim</td>
                                        <td>Birim Fiyat</td>
                                        <td>Toplam Tutar</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $note->note->dis->job }}</td>
                                        <td>{{ $note->note->dis->description }}</td>
                                        <td>{{ $note->note->dis->amount }}</td>
                                        <td>{{ $note->note->dis->unit }}</td>
                                        <td>{{ $note->note->dis->unit_price }}</td>
                                        <td>{{ $note->note->dis->amount*$note->note->dis->unit_price }}</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        @endif
                        <tr>
                            <td>
                                @if($note->note->status == 0)
                                    <form action="/notlar/{{ $note->note->id }}" method="post">
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-success">Onayla</button>
                                    </form>
                                @endif
                            </td>
                        </tr>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
@endsection