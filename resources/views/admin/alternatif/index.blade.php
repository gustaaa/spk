@extends('layouts.dashboard')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="{{route('alternatif.create')}}" class="btn btn-primary float-right"><i class="fas fa-fw fa-plus-circle"></i>Tambah Data</a>
        <h5 class="m-0 font-weight-bold text-primary">Alternatif</h5>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
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
                        <th width="100px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no=1;
                    @endphp
                    @foreach ($mapel as $key=>$item)

                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->C1}}</td>
                        <td>{{$item->C2}}</td>
                        <td>{{$item->C3}}</td>
                        <td>{{$item->C4}}</td>
                        <td>{{$item->C5}}</td>
                        <td>{{$item->C6}}</td>
                        <td>{{$item->C7}}</td>
                        <td>{{$item->C8}}</td>
                        <td>{{$item->C9}}</td>
                        <td>{{$item->C10}}</td>
                        <td>{{$item->C11}}</td>
                        <td>{{$item->C12}}</td>
                        <td>
                            <div class="ml-4">
                                <a href="{{ route('alternatif.edit', $item->id ) }}" class="btn bg-gradient-success btn-sm text-white"><i class="fas fa-fw fa-edit"></i></a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection