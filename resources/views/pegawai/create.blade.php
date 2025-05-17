<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data Pegawai baru</title>
</head>
<body>
    <h1>Form tambah pegawai</h1>
    @if ($errors->any())
        <div style="color: red;">
            @foreach ($errors->all() as $error)
                <pre>{{ $error }}</pre> <br>
            @endforeach
        </div>
    @endif

    <form method="POST" action="{{ route('pegawai.store') }}">
        @csrf
        <label for="nama">Nama :</label>
        <input type="text" name="nama" id="nama" value="{{ old('nama') }}">
        <label for="alamat">Alamat :</label>
        <input type="text" name="alamat" id="alamat" value="{{ old('alamat') }}"">

        <label for="pangkat">Pangkat :</label>
        <select name="pangkat" id="pangkat">
            <option value="" selected>Pilih pangkat</option>
            <option value="juru">juru</option>
            <option value="pengatur">pengatur</option>
            <option value="penata">penata</option>
        </select>

        <div>
            <button type="submit">Simpan</button>
        </div>
    </form>
</body>
</html>