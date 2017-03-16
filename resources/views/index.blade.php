@extends('layout')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Yıltur Mimarlık
            </h1>

        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->

                <div class="row">
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-aqua">
                            <div class="inner">
                                <h3>{{ $projects->count() }}</h3>
                                <p>Proje</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-mouse-pointer"></i>
                            </div>
                        </div>
                    </div><!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-yellow">
                            <div class="inner">
                                <h3>{{ $notes->count() }}</h3>
                                <p>Not</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                        </div>
                    </div><!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-red">
                            <div class="inner">
                                <h3>{{ $discoveries->count() }}</h3>
                                <p>Keşif</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-ios-book"></i>
                            </div>
                        </div>
                    </div><!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-green">
                            <div class="inner">
                                <h3>{{ $success->count() }}</h3>
                                <p>Onaylanan İş</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-play"></i>
                            </div>
                        </div>
                    </div><!-- ./col -->
                </div><!-- /.row -->
                <!-- Main row -->
                <div class="row">
                    <!-- Left col -->
                    <section class="col-lg-12 connectedSortable" style="background-color: #fff">
                        <div class="col-sm-12">
                            <h4>Son Projeler</h4>
                            <table class="table table-hover table-bordered table-striped">
                                <tr>
                                    <th>Proje Adı</th>
                                    <th>Firma Adı</th>
                                    <th>Yetkili Kişi</th>
                                    <th>Başlama Tarihi</th>
                                    <th>Bitiş Tarihi</th>
                                    <th>Görüntüle</th>
                                </tr>
                                <tr>
                                    @foreach($projects as $project)
                                        <td>{{ $project->project_name }}</td>
                                        <td>{{ $project->firm_name }}</td>
                                        <td>{{ $project->authorized }}</td>
                                        <td>{{ $project->start_date }}</td>
                                        <td>{{ $project->end_date }}</td>
                                        <td>
                                            <a href="/proje-detay/{{ $project->id }}"><i class="fa fa-eye"></i></a>
                                        </td>
                                    @endforeach
                                </tr>
                            </table>
                        </div>
                        <div class="col-sm-12">
                            <h4>Son Notlar</h4>
                            <table class="table table-hover table-bordered table-striped">
                                <tr>
                                    <th>Atayan Kişi</th>
                                    <th>Atanan Kişi</th>
                                    <th>Not Kategorisi</th>
                                    <th>Not İçeriği</th>
                                    <th>Görüntüle</th>
                                </tr>
                                @foreach($notes as $note)
                                    @if($note->note->status == 0)
                                        <tr>
                                            <td>{{ $note->fromUser->username }}</td>
                                            <td>{{ $note->user->username }}</td>
                                            <td>{{ $note->note->category->name }}</td>
                                            <td>{{ substr($note->note->content, 0, 100) }}</td>
                                            <td>
                                                <a href="/not/{{ $note->id }}"><i class="fa fa-eye"></i></a>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </table>
                        </div>
                    </section><!-- /.Left col -->
                </div><!-- /.row (main row) -->

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
@endsection