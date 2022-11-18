@php
$nama = "Budi Santoso";
$nilai = 59.99;
@endphp
{{-- lulus jika nilai minimal 60 --}}
{{--
@if($nilai >= 60) @php $ket = "Lulus" @endphp
@else @php $ket = "Gagal" @endphp
@endif
--}}

@php $ket = ($nilai >= 60) ? "Lulus":"Gagal" @endphp

{{ $nama }} dengan nilai {{ $nilai}} dinyatakan {{ $ket }}