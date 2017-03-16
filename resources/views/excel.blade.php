<table class="table table-bordered table-hover">
    <tr>
        <td colspan="4"><h3>YILTUR BAHADIR YILMAZ</h3></td>
    </tr>
    <tr>
        <td colspan="4"><h4>Mimarlik Proje ve İnsaat Tic. Ltd. Sti.</h4></td>
    </tr>
    <tr>
        <td colspan="5"><h5>Architecture Project and Constrution Trade, L.L.C.</h5></td>
    </tr>
    <tr>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td><h3>{{ $discovery[0]->project->firm_name }} - {{ $discovery[0]->project->project_name }}</h3></td>
    </tr>
    <tr>
        <td></td>
    </tr>
    <thead>
    <tr style="background-color: #005927; color: #fff">
        <th>POZ</th>
        <th>İşin Adı</th>
        <th>Açıklama</th>
        <th>Miktar</th>
        <th>Birim</th>
        <th>Birim Fiyat</th>
        <th>Toplam Tutar</th>
    </tr>
    </thead>
    <tbody>
    @foreach($discovery as $item)
        @php
            $x = 1;
            $y = 1;
        @endphp
        <tr style="background-color: #8a6d3b; color: #fff">
            <td><b>{{ $loop->iteration }}</b></td>
            <td colspan="6"><b>{{ $item->category->name }}</b></td>
        </tr>
        @if(!$loop->first)
            @php
                $x = $loop->iteration;
            @endphp
        @endif
        @foreach($discovery[$loop->index]->content as $value)
            <tr>
                <td>{{ $x }} - {{ $y++ }}</td>
                <td>{{ $value->job }}</td>
                <td>{{ $value->description }}</td>
                <td>{{ $value->amount }}</td>
                <td>{{ $value->unit }}</td>
                <td>{{ $value->unit_price }}</td>
                <td>{{ $value->total }}</td>
            </tr>
        @endforeach
    @endforeach
    </tbody>
</table>