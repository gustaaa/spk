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
            </thead>

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
                    <th>Nama</th>
                    <th>WSM</th>
                    <th>WPM</th>
                    <th>WASPAS</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($data as $item)
            <tbody>
                <tr>
                    <td>{{$item->nama}}</td>
                    {{-- WSM --}}
                    <td>
                        {{(($item->C1 / $C1max['mapel'])*$weight1['kriterias'])+
                                (($item->C2 / $C2max['mapel'])*$weight2['kriterias'])+
                                (($item->C3 / $C3max['mapel'])*$weight3['kriterias'])+
                                (($item->C4 / $C4max['mapel'])*$weight4['kriterias'])+
                                (($item->C5 / $C5max['mapel'])*$weight5['kriterias'])+
                                (($item->C6 / $C6max['mapel'])*$weight6['kriterias'])+
                                (($item->C7 / $C7max['mapel'])*$weight7['kriterias'])+
                                (($item->C8 / $C8max['mapel'])*$weight8['kriterias'])+
                                (($item->C9 / $C9max['mapel'])*$weight9['kriterias'])+
                                (($item->C10 / $C10max['mapel'])*$weight10['kriterias'])+
                                (( $C11min['mapel'] / $item->C11 )*$weight11['kriterias'])+
                                (( $C12min['mapel'] / $item->C12 )*$weight12['kriterias'])}}
                    </td>
                    {{-- WPM --}}
                    <td>
                        {{(($item->C1 / $C1max['mapel'])**$weight1['kriterias'])*
                                (($item->C2 / $C2max['mapel'])**$weight2['kriterias'])+
                                (($item->C3 / $C3max['mapel'])**$weight3['kriterias'])+
                                (($item->C4 / $C4max['mapel'])**$weight4['kriterias'])+
                                (($item->C5 / $C5max['mapel'])**$weight5['kriterias'])+
                                (($item->C6 / $C6max['mapel'])**$weight6['kriterias'])+
                                (($item->C7 / $C7max['mapel'])**$weight7['kriterias'])+
                                (($item->C8 / $C8max['mapel'])**$weight8['kriterias'])+
                                (($item->C9 / $C9max['mapel'])**$weight9['kriterias'])+
                                (($item->C10 / $C10max['mapel'])**$weight10['kriterias'])+
                                (( $C11min['mapel'] / $item->C11 )**$weight11['kriterias'])+
                                (( $C12min['mapel'] / $item->C12 )**$weight12['kriterias'])}}
                    </td>
                    {{-- Qi --}}
                    <td>
                        {{
                            (($item->C1 / $C1max['mapel'])*$weight1['kriterias'])+
                                (($item->C2 / $C2max['mapel'])*$weight2['kriterias'])+
                                (($item->C3 / $C3max['mapel'])*$weight3['kriterias'])+
                                (($item->C4 / $C4max['mapel'])*$weight4['kriterias'])+
                                (($item->C5 / $C5max['mapel'])*$weight5['kriterias'])+
                                (($item->C6 / $C6max['mapel'])*$weight6['kriterias'])+
                                (($item->C7 / $C7max['mapel'])*$weight7['kriterias'])+
                                (($item->C8 / $C8max['mapel'])*$weight8['kriterias'])+
                                (($item->C9 / $C9max['mapel'])*$weight9['kriterias'])+
                                (($item->C10 / $C10max['mapel'])*$weight10['kriterias'])+
                                (( $C11min['mapel'] / $item->C11 )*$weight11['kriterias'])+
                                (( $C12min['mapel'] / $item->C12 )*$weight12['kriterias'])*0.5
                                    +
                                (($item->C1 / $C1max['mapel'])**$weight1['kriterias'])*
                                (($item->C2 / $C2max['mapel'])**$weight2['kriterias'])+
                                (($item->C3 / $C3max['mapel'])**$weight3['kriterias'])+
                                (($item->C4 / $C4max['mapel'])**$weight4['kriterias'])+
                                (($item->C5 / $C5max['mapel'])**$weight5['kriterias'])+
                                (($item->C6 / $C6max['mapel'])**$weight6['kriterias'])+
                                (($item->C7 / $C7max['mapel'])**$weight7['kriterias'])+
                                (($item->C8 / $C8max['mapel'])**$weight8['kriterias'])+
                                (($item->C9 / $C9max['mapel'])**$weight9['kriterias'])+
                                (($item->C10 / $C10max['mapel'])**$weight10['kriterias'])+
                                (( $C11min['mapel'] / $item->C11 )**$weight11['kriterias'])+
                                (( $C12min['mapel'] / $item->C12 )**$weight12['kriterias'])*0.5

                                }}
                    </td>
                </tr>
            </tbody>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection