@extends('layouts.dashboard')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Bobot</h5>
    </div>
    <div class="card-body">
        <table class="table table-bordered" id="" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th style="color: navy;">W1</th>
                    <th style="color: navy;">W2</th>
                    <th style="color: navy;">W3</th>
                    <th style="color: navy;">W4</th>
                    <th style="color: navy;">W5</th>
                    <th style="color: navy;">W6</th>
                    <th style="color: navy;">W7</th>
                    <th style="color: navy;">W8</th>
                    <th style="color: navy;">W9</th>
                    <th style="color: navy;">W10</th>
                    <th style="color: navy;">W11</th>
                    <th style="color: navy;">W12</th>
                </tr>
            </thead>
            <tbody>
            <tbody>
                <tr>
                    <th>{{ $weight1['kriterias'] }}</th>
                    <th>{{ $weight2['kriterias'] }}</th>
                    <th>{{ $weight3['kriterias'] }}</th>
                    <th>{{ $weight4['kriterias'] }}</th>
                    <th>{{ $weight5['kriterias'] }}</th>
                    <th>{{ $weight6['kriterias'] }}</th>
                    <th>{{ $weight7['kriterias'] }}</th>
                    <th>{{ $weight8['kriterias'] }}</th>
                    <th>{{ $weight9['kriterias'] }}</th>
                    <th>{{ $weight10['kriterias'] }}</th>
                    <th>{{ $weight11['kriterias'] }}</th>
                    <th>{{ $weight12['kriterias'] }}</th>
                </tr>
            </tbody>

        </table>

    </div>
</div>

@include('admin.waspas.normalisasi')

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Penilaian Dosen</h5>
    </div>
    <div class="card-body">
        <table class="table table-bordered" id="" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th style="color: navy;">Nama</th>
                    <th style="color: navy;">WSM</th>
                    <th style="color: navy;">WPM</th>
                    <th style="color: navy;">WASPAS</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($data as $item)
            <tbody>
                <tr>
                    <td>{{ $item->nama }}</td>
                    {{-- WSM --}}
                    <td>
                        {{ number_format(
                                ($item->C1 / $C1max['mapel']) * $weight1['kriterias'] +
                                    ($item->C2 / $C2max['mapel']) * $weight2['kriterias'] +
                                    ($item->C3 / $C3max['mapel']) * $weight3['kriterias'] +
                                    ($item->C4 / $C4max['mapel']) * $weight4['kriterias'] +
                                    ($item->C5 / $C5max['mapel']) * $weight5['kriterias'] +
                                    ($item->C6 / $C6max['mapel']) * $weight6['kriterias'] +
                                    ($item->C7 / $C7max['mapel']) * $weight7['kriterias'] +
                                    ($item->C8 / $C8max['mapel']) * $weight8['kriterias'] +
                                    ($item->C9 / $C9max['mapel']) * $weight9['kriterias'] +
                                    ($item->C10 / $C10max['mapel']) * $weight10['kriterias'] +
                                    ($C11min['mapel'] / $item->C11) * $weight11['kriterias'] +
                                    ($C12min['mapel'] / $item->C12) * $weight12['kriterias'],
                                3,
                            ) }}
                    </td>
                    {{-- WPM --}}
                    <td>
                        {{ number_format(
                                ($item->C1 / $C1max['mapel']) ** $weight1['kriterias'] +
                                    ($item->C2 / $C2max['mapel']) ** $weight2['kriterias'] +
                                    ($item->C3 / $C3max['mapel']) ** $weight3['kriterias'] +
                                    ($item->C4 / $C4max['mapel']) ** $weight4['kriterias'] +
                                    ($item->C5 / $C5max['mapel']) ** $weight5['kriterias'] +
                                    ($item->C6 / $C6max['mapel']) ** $weight6['kriterias'] +
                                    ($item->C7 / $C7max['mapel']) ** $weight7['kriterias'] +
                                    ($item->C8 / $C8max['mapel']) ** $weight8['kriterias'] +
                                    ($item->C9 / $C9max['mapel']) ** $weight9['kriterias'] +
                                    ($item->C10 / $C10max['mapel']) ** $weight10['kriterias'] +
                                    ($C11min['mapel'] / $item->C11) ** $weight11['kriterias'] +
                                    ($C12min['mapel'] / $item->C12) ** $weight12['kriterias'],
                                3,
                            ) }}
                    </td>
                    {{-- Qi --}}
                    <td>
                        {{ number_format(
                                (($item->C1 / $C1max['mapel']) * $weight1['kriterias'] +
                                    ($item->C2 / $C2max['mapel']) * $weight2['kriterias'] +
                                    ($item->C3 / $C3max['mapel']) * $weight3['kriterias'] +
                                    ($item->C4 / $C4max['mapel']) * $weight4['kriterias'] +
                                    ($item->C5 / $C5max['mapel']) * $weight5['kriterias'] +
                                    ($item->C6 / $C6max['mapel']) * $weight6['kriterias'] +
                                    ($item->C7 / $C7max['mapel']) * $weight7['kriterias'] +
                                    ($item->C8 / $C8max['mapel']) * $weight8['kriterias'] +
                                    ($item->C9 / $C9max['mapel']) * $weight9['kriterias'] +
                                    ($item->C10 / $C10max['mapel']) * $weight10['kriterias'] +
                                    ($C11min['mapel'] / $item->C11) * $weight11['kriterias'] +
                                    ($C12min['mapel'] / $item->C12) * $weight12['kriterias']) *
                                    0.5 +
                                    (($item->C1 / $C1max['mapel']) ** $weight1['kriterias'] +
                                        ($item->C2 / $C2max['mapel']) ** $weight2['kriterias'] +
                                        ($item->C3 / $C3max['mapel']) ** $weight3['kriterias'] +
                                        ($item->C4 / $C4max['mapel']) ** $weight4['kriterias'] +
                                        ($item->C5 / $C5max['mapel']) ** $weight5['kriterias'] +
                                        ($item->C6 / $C6max['mapel']) ** $weight6['kriterias'] +
                                        ($item->C7 / $C7max['mapel']) ** $weight7['kriterias'] +
                                        ($item->C8 / $C8max['mapel']) ** $weight8['kriterias'] +
                                        ($item->C9 / $C9max['mapel']) ** $weight9['kriterias'] +
                                        ($item->C10 / $C10max['mapel']) ** $weight10['kriterias'] +
                                        ($C11min['mapel'] / $item->C11) ** $weight11['kriterias'] +
                                        ($C12min['mapel'] / $item->C12) ** $weight12['kriterias']) *
                                        0.5,
                                3,
                            ) }}
                    </td>
                </tr>
            </tbody>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Ranking</h5>
    </div>
    <div class="card-body">
        <table class="table table-bordered" id="" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th style="color: navy;">Nama</th>
                    <th style="color: navy;">Hasil</th>
                    <th style="color: navy;">Rangking</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sortedData = $data->sortByDesc(function ($item) use ($C1max, $C2max, $C3max, $C4max, $C5max, $C6max, $C7max, $C8max, $C9max, $C10max, $C11min, $C12min, $weight1, $weight2, $weight3, $weight4, $weight5, $weight6, $weight7, $weight8, $weight9, $weight10, $weight11, $weight12) {
                    return ($item->C1 / $C1max['mapel']) * $weight1['kriterias'] +
                        ($item->C2 / $C2max['mapel']) * $weight2['kriterias'] +
                        ($item->C3 / $C3max['mapel']) * $weight3['kriterias'] +
                        ($item->C4 / $C4max['mapel']) * $weight4['kriterias'] +
                        ($item->C5 / $C5max['mapel']) * $weight5['kriterias'] +
                        ($item->C6 / $C6max['mapel']) * $weight6['kriterias'] +
                        ($item->C7 / $C7max['mapel']) * $weight7['kriterias'] +
                        ($item->C8 / $C8max['mapel']) * $weight8['kriterias'] +
                        ($item->C9 / $C9max['mapel']) * $weight9['kriterias'] +
                        ($item->C10 / $C10max['mapel']) * $weight10['kriterias'] +
                        ($C11min['mapel'] / $item->C11) * $weight11['kriterias'] +
                        ($C12min['mapel'] / $item->C12) * $weight12['kriterias'] * 0.5 +
                        ($item->C1 / $C1max['mapel']) ** $weight1['kriterias'] * ($item->C2 / $C2max['mapel']) ** $weight2['kriterias'] +
                        ($item->C3 / $C3max['mapel']) ** $weight3['kriterias'] +
                        ($item->C4 / $C4max['mapel']) ** $weight4['kriterias'] +
                        ($item->C5 / $C5max['mapel']) ** $weight5['kriterias'] +
                        ($item->C6 / $C6max['mapel']) ** $weight6['kriterias'] +
                        ($item->C7 / $C7max['mapel']) ** $weight7['kriterias'] +
                        ($item->C8 / $C8max['mapel']) ** $weight8['kriterias'] +
                        ($item->C9 / $C9max['mapel']) ** $weight9['kriterias'] +
                        ($item->C10 / $C10max['mapel']) ** $weight10['kriterias'] +
                        ($C11min['mapel'] / $item->C11) ** $weight11['kriterias'] +
                        ($C12min['mapel'] / $item->C12) ** $weight12['kriterias'] * 0.5;
                });
                $counter = 1;
                ?>
                @foreach ($sortedData as $item)
                <tr class="{{ $counter <= 3 ? 'table-primary' : '' }}">
                    <td>{{ $item->nama }}</td>
                    <td>
                        {{ number_format(
                            (($item->C1 / $C1max['mapel']) * $weight1['kriterias'] +
                                ($item->C2 / $C2max['mapel']) * $weight2['kriterias'] +
                                ($item->C3 / $C3max['mapel']) * $weight3['kriterias'] +
                                ($item->C4 / $C4max['mapel']) * $weight4['kriterias'] +
                                ($item->C5 / $C5max['mapel']) * $weight5['kriterias'] +
                                ($item->C6 / $C6max['mapel']) * $weight6['kriterias'] +
                                ($item->C7 / $C7max['mapel']) * $weight7['kriterias'] +
                                ($item->C8 / $C8max['mapel']) * $weight8['kriterias'] +
                                ($item->C9 / $C9max['mapel']) * $weight9['kriterias'] +
                                ($item->C10 / $C10max['mapel']) * $weight10['kriterias'] +
                                ($C11min['mapel'] / $item->C11) * $weight11['kriterias'] +
                                ($C12min['mapel'] / $item->C12) * $weight12['kriterias']) *
                                0.5 +
                                (($item->C1 / $C1max['mapel']) ** $weight1['kriterias'] +
                                    ($item->C2 / $C2max['mapel']) ** $weight2['kriterias'] +
                                    ($item->C3 / $C3max['mapel']) ** $weight3['kriterias'] +
                                    ($item->C4 / $C4max['mapel']) ** $weight4['kriterias'] +
                                    ($item->C5 / $C5max['mapel']) ** $weight5['kriterias'] +
                                    ($item->C6 / $C6max['mapel']) ** $weight6['kriterias'] +
                                    ($item->C7 / $C7max['mapel']) ** $weight7['kriterias'] +
                                    ($item->C8 / $C8max['mapel']) ** $weight8['kriterias'] +
                                    ($item->C9 / $C9max['mapel']) ** $weight9['kriterias'] +
                                    ($item->C10 / $C10max['mapel']) ** $weight10['kriterias'] +
                                    ($C11min['mapel'] / $item->C11) ** $weight11['kriterias'] +
                                    ($C12min['mapel'] / $item->C12) ** $weight12['kriterias']) *
                                    0.5,
                            3,
                        ) }}
                    </td>
                    <td>{{ $counter }}</td>
                </tr>
                <?php $counter++; ?>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection