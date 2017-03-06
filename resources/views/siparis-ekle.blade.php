@extends('layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Siparişler
            </h1>
            <ol class="breadcrumb">
                <li><a href="/"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
                <li><a href="siparis-duzenle">Siparişler</a></li>
                <li class="active">Siparişler</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Siparişler</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <script type="text/javascript">
                        $(document).ready(function() {
                            $('#yoneticilerer').DataTable({
                                "order": [[ 0, "desc" ]]
                            });
                        });
                    </script>
                    <table id="yoneticilerer" class="display" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Kullanıcı Adı</th>
                            <th>Sipariş Saati</th>
                            <th>Sipariş Tarihi</th>
                            <th>Sipariş Görüntüle</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Kullanıcı Adı</th>
                            <th>Sipariş Saati</th>
                            <th>Sipariş Tarihi</th>
                            <th>Sipariş Görüntüle</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->user->username }}</td>
                                <td>{{ $order->orderHour }}</td>
                                <td>{{ $order->created_at->format('d/m/Y') }}</td>
                                <td>
                                    <a href="/siparis-goruntule/{{ $order->id }}/{{ $order->user_id }}" class="btn btn-success"><i class="fa fa-eye"></i></a>
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