<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit data Pegawai baru</title>
</head>
<body>
    <h1>Form edit pegawai</h1>
    @if ($errors->any())
        <div style="color: red;">
            @foreach ($errors as $error)
                <pre>{{ $error }}</pre> <br>
            @endforeach
        </div>
    @endif
    @php
        $pangkat = ["juru", "pengatur", "penata"];
        $selectedIndex = array_search($pegawai->pangkat, $pangkat); 
    @endphp

    <form method="POST" action="{{ route('pegawai.update', $pegawai->id) }}">
        @csrf
        @method('PUT')
        <label for="nama">Nama :</label>
        <input type="text" name="nama" id="nama" value="{{ $pegawai->nama }}">
        <label for="alamat">Alamat :</label>
        <input type="text" name="alamat" id="alamat" value="{{ $pegawai->alamat }}">

        <label for="pangkat">Pangkat :</label>
        <select name="pangkat" id="pangkat">
            @foreach ($pangkat as $p)
                @if ($loop->index == $selectedIndex)
                    <option selected value="{{ $p }}">{{$p}}</option>
                @else
                    <option value="{{ $p }}">{{$p}}</option>
                @endif
            @endforeach
            @if($selectedIndex > 2)
                <option value="" selected>Pilih pangkat</option>
            @endif
        </select>

        <div>
            <button type="submit">Simpan Perubahan</button>
        </div>
    </form>
</body>
</html>