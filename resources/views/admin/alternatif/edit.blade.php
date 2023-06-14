@extends('layouts.dashboard')
@section('content')
@if(count($errors)>0)
@foreach($errors->all() as $error)
<div class="alert alert-danger" role="alert">
    {{ $error }}
</div>
@endforeach
@endif

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session('success') }}
</div>

@endif
<div class="col-lg-12 order-lg-1">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Mapel</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('alternatif.update' , $mapel->id ) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" step="0.01" class="form-control" name="nama" value="{{ $mapel->nama }}">
                </div>
                <div class="form-group">
                    <label>H-Index Scopus</label>
                    <input type="text" step="0.01" class="form-control" name="C1" value="{{ $mapel->C1 }}">
                </div>
                <div class=" form-group">
                    <label>H-Index GS</label>
                    <input type="text" step="0.01" class="form-control" name="C2" value="{{ $mapel->C2 }}">
                </div>
                <div class=" form-group">
                    <label>Dok Scopus</label>
                    <input type="text" step="0.01" class="form-control" name="C3" value="{{ $mapel->C3 }}">
                </div>
                <div class=" form-group">
                    <label>Jurnal Terakreditasi</label>
                    <input type="text" step="0.01" class="form-control" name="C4" value="{{ $mapel->C4 }}">
                </div>
                <div class=" form-group">
                    <label>Dok Pengabdian</label>
                    <input type="text" step="0.01" class="form-control" name="C5" value="{{ $mapel->C5 }}">
                </div>
                <div class=" form-group">
                    <label>Sertifikat Kompetensi</label>
                    <input type="text" step="0.01" class="form-control" name="C6" value="{{ $mapel->C6 }}">
                </div>
                <div class=" form-group">
                    <label>Pembicara External</label>
                    <input type="text" step="0.01" class="form-control" name="C7" value="{{ $mapel->C7 }}">
                </div>
                <div class=" form-group">
                    <label>Keanggotaan Profesi Dosen</label>
                    <input type="text" step="0.01" class="form-control" name="C8" value="{{ $mapel->C8 }}">
                </div>
                <div class=" form-group">
                    <label>Jabatan Fungsional</label>
                    <input type="text" step="0.01" class="form-control" name="C9" value="{{ $mapel->C9 }}">
                </div>
                <div class=" form-group">
                    <label>Lama Mengajar</label>
                    <input type="text" step="0.01" class="form-control" name="C10" value="{{ $mapel->C10 }}">
                </div>
                <div class=" form-group">
                    <label>Umur</label>
                    <input type="text" step="0.01" class="form-control" name="C11" value="{{ $mapel->C11 }}">
                </div>
                <div class=" form-group">
                    <label>Surat Peringatan</label>
                    <input type="text" step="0.01" class="form-control" name="C12" value="{{ $mapel->C12 }}">
                </div>
                <div class=" form-group">
                    <button class="btn btn-primary btn-block">Update mapel</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection