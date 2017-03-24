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
                    <a href="/hakedis-excel/{{ $discovery[0]->project->id }}" class="btn btn-success">Excel</a>
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr style="background-color: #005927; color: #fff; height:20px !important;">
                            <th>POZ</th>
                            <th>İşin Adı</th>
                            <th>Açıklama</th>
                            <th>Miktar</th>
                            <th>Birim</th>
                            <th>Birim Fiyat</th>
                            <th>Toplam Tutar</th>
                            <th>Maliyet</th>
                            <th>Fark</th>
                            <th>İşlem</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($discovery as $item)
                            @php
                                $x = 1;
                                $y = 1;
                                $z = 1;
                            @endphp
                            <tr style="background-color: #8a6d3b; color: #fff; height:20px !important;">
                                <td><b>{{ $loop->iteration }}</b></td>
                                <td colspan="8"><b>{{ $item->category->name }}</b></td>
                                <td><a style="color:#fff;" id="{{ $item->id }}"><i class="fa fa-plus"></i></a></td>
                                <!--<td><a href="/proje-hakedis-ekle/{{ $discovery[0]->project->id }}/{{ $item->id }}" style="color:#fff;"><i class="fa fa-plus"></i></a></td>-->
                            </tr>
                            @if(!$loop->first)
                                @php
                                    $x = $loop->iteration;
                                @endphp
                            @endif
                            @foreach($discovery[$loop->index]->content as $value)
                                @if($value->status == 1)
                                    @php
                                        $y++;
                                    @endphp
                                    <tr style="height:20px !important;">
                                        <td>{{ $x }} - {{ $loop->iteration }}</td>
                                        <td>{{ $value->job }}</td>
                                        <td>{{ $value->description }}</td>
                                        <td>{{ $value->amount }}</td>
                                        <td>{{ $value->unit }}</td>
                                        <td>{{ $value->unit_price }}</td>
                                        <td>{{ $value->total }}</td>
                                        @if($value->progress->count())
                                            <td>{{ $value->progress->sum('total') }}</td>
                                            <td>{{ $value->total-$value->progress->sum('total') }}</td>
                                        @else
                                            <td>0</td>
                                            <td>0</td>
                                        @endif
                                        <td>
                                            <form action="/hakedis/{{ $value->id }}/{{ $discovery[0]->project->id }}" method="post">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <a id="{{ $value->id }}" style="color:#000;"><i class="fa fa-plus"></i></a> &nbsp;
                                                <a href="/hakedis-duzenle/{{ $value->id }}" style="color:#000;"><i class="fa fa-edit"></i></a> &nbsp;
                                                <button type="submit"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @foreach($value->progress as $progres)
                                        @if(!$loop->first)
                                            @php
                                                $z = $y;
                                            @endphp
                                        @endif
                                        <tr style="background-color: #f0f0f0;">
                                            <form action="/hakedis-alt/{{ $progres->id }}/edit" method="post">
                                                {{ csrf_field() }}
                                                <td>{{ $x }} - {{ $z }} - {{ $loop->iteration }}</td>
                                                <td><input type="text" value="{{ $progres->job }}" placeholder="İşin Adı" name="job"></td>
                                                <td><input type="text" value="{{ $progres->description }}" placeholder="Açıklama" name="description"></td>
                                                <td><input type="text" value="{{ $progres->amount }}" placeholder="Miktar" name="amount"></td>
                                                <td><input type="text" value="{{ $progres->unit }}" placeholder="Birim" name="unit"></td>
                                                @if($progres->unit_price == NULL)
                                                    <td><input type="text" value="{{ $progres->unit_price }}" placeholder="Birim Fiyat" name="unit_price" style="background-color: #981500; color:#fff;"></td>
                                                @else
                                                    <td><input type="text" value="{{ $progres->unit_price }}" placeholder="Birim Fiyat" name="unit_price"></td>
                                                @endif
                                                <td>{{ $progres->total }}</td>
                                                <td>
                                                    <a href="/hakedis-notlar/{{ $progres->id }}"><i class="fa fa-comment"></i> {{ $progres->note->count() }}</a>
                                                </td>
                                                <td>
                                                    <button type="submit"><i class="fa fa-edit"></i></button>
                                                </td>
                                            </form>
                                                <td>
                                                    @if($progres->unit_price != NULL AND $progres->status == 0)
                                                        <form action="/hakedis-alt/{{ $progres->id }}/success" method="post">
                                                            {{ csrf_field() }}
                                                            <button><i class="fa fa-check"></i></button>
                                                        </form>
                                                    @elseif($progres->status == 1)
                                                        <i class="fa fa-check"></i>
                                                    @endif
                                                </td>
                                        </tr>
                                    @endforeach
                                @endif
                                <script type="text/javascript">
                                    $(document).ready(function(){

                                        $("#{{ $value->id }}").click(function() {
                                            $("#form{{ $value->id }}").show();
                                        });
                                        $("#{{ $item->id }}").click(function() {
                                            $("#form{{ $item->id }}").show();
                                        });
                                    });
                                </script>
                                    <tr style="display: none; !important;" id="form{{ $value->id }}">
                                        <form action="/hakedis-alt/{{ $value->id }}" method="post">
                                            {{ csrf_field() }}
                                            <td></td>
                                            <td>
                                                <input type="text" name="job" placeholder="İşin Adı" class="form-control">
                                            </td>
                                            <td>
                                                <input type="text" name="description" placeholder="Açıklama" class="form-control">
                                            </td>
                                            <td>
                                                <input type="text" name="amount" placeholder="Miktar" class="form-control">
                                            </td>
                                            <td>
                                                <input type="text" name="unit" placeholder="Birim" class="form-control">
                                            </td>
                                            <td>
                                                <input type="text" name="unit_price" placeholder="Birim Fiyat" class="form-control">
                                            </td>
                                            <td>
                                                <button type="submit"><i class="fa fa-plus"></i></button>
                                            </td>
                                        </form>
                                    </tr>

                            @endforeach
                            <tr style="display: none; !important;" id="form{{ $item->id }}">
                                <form action="proje-hakedis-ekle/{{ $discovery[0]->project->id }}/{{ $item->id }}" method="post">
                                    {{ csrf_field() }}
                                    <td></td>
                                    <td>
                                        <input type="text" name="job" placeholder="İşin Adı" class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" name="description" placeholder="Açıklama" class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" name="amount" placeholder="Miktar" class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" name="unit" placeholder="Birim" class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" name="unit_price" placeholder="Birim Fiyat" class="form-control">
                                    </td>
                                    <td>
                                        <button type="submit"><i class="fa fa-plus"></i></button>
                                    </td>
                                </form>
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