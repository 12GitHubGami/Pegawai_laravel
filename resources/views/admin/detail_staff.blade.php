@extends('admin.index')
@section('content')
<section class="section profile">
    <div class="row">
        <div class="col-xl-12">

            <div class="card">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                    <img src="{{ url('admin/img/profile-img.jpg') }}" alt="Profile" class="rounded-circle">
                    <h2>{{ $row->name }}</h2>
                    <h3>{{ $row->nip }}</h3>
                    <div class=" alert alert-primary" role="alert">
                        Jenis Kelamin: {{ $row->gender }}
                        <br />Alamat: {{ $row->alamat }}
                        <br />Email: {{ $row->email }}
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>



@endsection