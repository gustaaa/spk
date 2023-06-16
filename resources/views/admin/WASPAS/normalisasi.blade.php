<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Max</h5>
    </div>
    <div class="card-body">
        <table class="table table-bordered" id="" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th style="color: navy;">C1</th>
                    <th style="color: navy;">C2</th>
                    <th style="color: navy;">C3</th>
                    <th style="color: navy;">C4</th>
                    <th style="color: navy;">C5</th>
                    <th style="color: navy;">C6</th>
                    <th style="color: navy;">C7</th>
                    <th style="color: navy;">C8</th>
                    <th style="color: navy;">C9</th>
                    <th style="color: navy;">C10</th>
                </tr>
            </thead>
            <tbody>
            <tbody>
                <td>{{ number_format($C1max['mapel'], 1) }}</td>
                <td>{{ number_format($C2max['mapel'], 1) }}</td>
                <td>{{ number_format($C3max['mapel'], 1) }}</td>
                <td>{{ number_format($C4max['mapel'], 1) }}</td>
                <td>{{ number_format($C5max['mapel'], 1) }}</td>
                <td>{{ number_format($C6max['mapel'], 1) }}</td>
                <td>{{ number_format($C7max['mapel'], 1) }}</td>
                <td>{{ number_format($C8max['mapel'], 1) }}</td>
                <td>{{ number_format($C9max['mapel'], 1) }}</td>
                <td>{{ number_format($C10max['mapel'], 1) }}</td>

                </tr>
            </tbody>

            </tbody>
        </table>
    </div>
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Min</h5>
    </div>
    <div class="card-body">
        <table class="table table-bordered" id="" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th style="color: navy;">C11</th>
                    <th style="color: navy;">C12</th>
                </tr>
            </thead>
            <tbody>
            <tbody>
                <td>{{ number_format($C11min['mapel'], 1) }}</td>
                <td>{{ number_format($C12min['mapel'], 1) }}</td>
                </tr>
            </tbody>

            </tbody>
        </table>
    </div>
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Normalisasi</h5>
    </div>
    <div class="card-body">
        <table class="table table-bordered" id="" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th style="color: navy;">Nama</th>
                    <th style="color: navy;">C1</th>
                    <th style="color: navy;">C2</th>
                    <th style="color: navy;">C3</th>
                    <th style="color: navy;">C4</th>
                    <th style="color: navy;">C5</th>
                    <th style="color: navy;">C6</th>
                    <th style="color: navy;">C7</th>
                    <th style="color: navy;">C8</th>
                    <th style="color: navy;">C9</th>
                    <th style="color: navy;">C10</th>
                    <th style="color: navy;">C11</th>
                    <th style="color: navy;">C12</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($data as $item)
            <tbody>


                <td>{{ $item->nama }}</td>
                <td>{{ number_format($item->C1 / $C1max['mapel'], 3) }}</td>
                <td>{{ number_format($item->C2 / $C2max['mapel'], 3) }}</td>
                <td>{{ number_format($item->C3 / $C3max['mapel'], 3) }}</td>
                <td>{{ number_format($item->C4 / $C4max['mapel'], 3) }}</td>
                <td>{{ number_format($item->C5 / $C5max['mapel'], 3) }}</td>
                <td>{{ number_format($item->C6 / $C6max['mapel'], 3) }}</td>
                <td>{{ number_format($item->C7 / $C7max['mapel'], 3) }}</td>
                <td>{{ number_format($item->C8 / $C8max['mapel'], 3) }}</td>
                <td>{{ number_format($item->C9 / $C9max['mapel'], 3) }}</td>
                <td>{{ number_format($item->C10 / $C10max['mapel'], 3) }}</td>
                <td>{{ number_format($C11min['mapel'] / $item->C11, 3) }}</td>
                <td>{{ number_format($C12min['mapel'] / $item->C12, 3) }}</td>

                </tr>
            </tbody>
            @endforeach

            </tbody>
        </table>
    </div>
</div>