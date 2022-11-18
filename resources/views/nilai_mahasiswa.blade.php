@php
$no = 1;
$judul =['No','Nama','Nilai','Keterangan','Grade','Predikat'];
@endphp
<h3 align="center">Daftar Nilai Mahasiswa</h3>
<table border="1" align="center" width="40%" cellpadding="10">
    <thead>
        <tr bgcolor="orange">
            @foreach($judul as $jdl)
            <th>{{ $jdl }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @php
        $no = 1;
        @endphp
        @foreach($siswa as $data)
            @php
            //tentukan kelulusan
            $ket = ($data['nilai'] >= 60)? "Lulus":"Gagal";
            $warna = ($no % 2 == 0)? "beige":"khaki";
            @endphp

            {{-- tentukan grade nilai --}}
            @if($data['nilai'] >= 85 && $data['nilai'] <= 100) @php $grade='A' @endphp
            @elseif($data['nilai'] >= 75 && $data['nilai'] < 85) @php $grade='B' @endphp
            @elseif($data['nilai'] >=60 && $data['nilai'] < 75) @php $grade='C' @endphp
            @elseif($data['nilai'] >= 30 && $data['nilai'] < 60) @php $grade='D' @endphp 
            @elseif($data['nilai'] >= 0 && $data['nilai'] < 30) @php $grade='E' @endphp
            @else @php $grade='' @endphp
            @endif

            {{-- tentukan predikat --}}
            @switch($grade)
                @case('A')
                    @php $predikat='Memuaskan' @endphp 
                    @break
                @case('B')
                    @php $predikat='Bagus' @endphp 
                    @break
                @case('C')
                    @php $predikat='Cukup' @endphp
                    @break
                @case('D')
                    @php $predikat='Kurang' @endphp
                    @break
                @case('E')
                    @php $predikat='Buruk' @endphp
                    @break
                @default @php $predikat='' @endphp
            @endswitch
            <tr bgcolor="{{ $warna }}">
                <td>{{ $no++ }}</td>
                <td>{{ $data['nama'] }}</td>
                <td>{{ $data['nilai'] }}</td>
                <td>{{ $ket }}</td>
                <td>{{ $grade }}</td>
                <td>{{ $predikat }}</td>
            </tr>
        @endforeach
    </tbody>
</table>