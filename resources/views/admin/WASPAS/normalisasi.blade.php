<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Normalisasi</h5>
    </div>
    <div class="card-body">
        <table class="table table-bordered" id="" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>C1</th>
                    <th>C2</th>
                    <th>C3</th>
                    <th>C4</th>
                    <th>C5</th>
                    <th>C6</th>
                    <th>C7</th>
                    <th>C8</th>
                    <th>C9</th>
                    <th>C10</th>
                    <th>C11</th>
                    <th>C12</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($data as $item)
            <tbody>


                <td>{{ $item->nama }}</td>
                <td>{{ $item->C1 / $C1max['mapel'] }}</td>
                <td>{{ $item->C2 / $C2max['mapel'] }}</td>
                <td>{{ $item->C3 / $C3max['mapel'] }}</td>
                <td>{{ $item->C4 / $C4max['mapel'] }}</td>
                <td>{{ $item->C5 / $C5max['mapel'] }}</td>
                <td>{{ $item->C6 / $C6max['mapel'] }}</td>
                <td>{{ $item->C7 / $C7max['mapel'] }}</td>
                <td>{{ $item->C8 / $C8max['mapel'] }}</td>
                <td>{{ $item->C9 / $C9max['mapel'] }}</td>
                <td>{{ $item->C10 / $C10max['mapel'] }}</td>
                <td>{{ $C11min['mapel'] /  $item->C11}}</td>
                <td>{{ $C12min['mapel'] /  $item->C12}}</td>

                </tr>
            </tbody>
            @endforeach

            </tbody>
        </table>
    </div>
</div>