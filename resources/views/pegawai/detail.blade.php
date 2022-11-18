@extends('admin.index')
@section('content')
<section class="section profile">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                    <img src="{{ url('admin/img/profile-img.jpg') }}" alt="Profile" class="rounded-circle">
                    <h2>{{ $row->nama }}</h2>
                    <h3>{{ $row->jabatan->nama }}</h3>
                </div>
                <div class="card-body">
                    <div class="alert alert-secondary">
                        NIP: {{ $row->nip }}
                        <br />Divisi: {{ $row->divisi->nama }}
                        <br />Jenis Kelamin: {{ $row->gender }}
                        <br />Tempat Lahir: {{ $row->tmp_lahir }}
                        <br />Tanggal Lahir: {{ $row->tgl_lahir }}
                        <br />Alamat: {{ $row->alamat }}
                    </div>
                    <a class="btn btn-info btn-sm" title="Kembali" href=" {{ url('pegawai') }}">
                        <i class="bi bi-arrow-left-square"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>



@endsection