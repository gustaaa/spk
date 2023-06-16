@extends('layouts.dashboard')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-primary">Alternatif</h4>
        <div class="float-right">
            <button id="showFormButton" class="btn btn-primary active import d-inline">
                <i class="fa fa-fw fa-download" aria-hidden="true"></i> Import Excel
            </button>
            <a href="{{ route('alternatif.export') }}" class="btn btn-info btn-primary active btn-rounded d-inline">
                <i class="fa fa-upload" aria-hidden="true"></i> Export Data</a>
            <a href="{{ route('alternatif.create') }}" class="btn btn-primary d-inline">
                <i class="fas fa-fw fa-plus-circle"></i> Tambah Data
            </a>
            <form id="clearForm" action="{{ route('alternatif.clear') }}" method="POST" class="d-inline">
                @csrf
                <button id="clearDataButton" class="btn btn-danger ml-2" type="submit">
                    <i class="fa fa-trash" aria-hidden="true"></i> Clear Data
                </button>
            </form>
        </div>

        <div id="formContainer" style="display: none;">
            <form action="/data-import" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file">
                <input type="submit" value="Import">
            </form>
        </div>

        <script>
            var showFormButton = document.getElementById('showFormButton');
            var formContainer = document.getElementById('formContainer');

            showFormButton.addEventListener('click', function() {
                showFormButton.style.display = 'none';
                formContainer.style.display = 'block';
            });

            var clearForm = document.getElementById('clearForm');
            clearForm.addEventListener('submit', function(event) {
                event.preventDefault();

                var confirmation = confirm("Apakah Anda yakin ingin menghapus data?");

                if (confirmation) {
                    fetch("{{ route('alternatif.clear') }}", {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            }
                        })
                        .then(response => response.json())
                        .then(data => {
                            console.log(data.message);
                            setTimeout(function() {
                                location.reload();
                            }, 1000);
                        })
                        .catch(error => {
                            console.error('Error:', error);
                        });
                }
            });
        </script>

    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th style="color: navy;">No</th>
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
                        <th style="color: navy;" width="100px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($mapel as $key => $item)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->C1 }}</td>
                        <td>{{ $item->C2 }}</td>
                        <td>{{ $item->C3 }}</td>
                        <td>{{ $item->C4 }}</td>
                        <td>{{ $item->C5 }}</td>
                        <td>{{ $item->C6 }}</td>
                        <td>{{ $item->C7 }}</td>
                        <td>{{ $item->C8 }}</td>
                        <td>{{ $item->C9 }}</td>
                        <td>{{ $item->C10 }}</td>
                        <td>{{ $item->C11 }}</td>
                        <td>{{ $item->C12 }}</td>
                        <td>
                            <div class="ml-4">
                                <a href="{{ route('alternatif.edit', $item->id) }}" class="btn bg-gradient-success btn-sm text-white"><i class="fas fa-fw fa-edit"></i></a>
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