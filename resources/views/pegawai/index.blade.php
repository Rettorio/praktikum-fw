<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pegawai List</title>
    <style>
        .mt-2 {
            margin-top: 2rem;
        }
    </style>
</head>
<body>
    <h1>Daftar Pegawai</h1>
    <a href="{{ route('pegawai.create') }}">Tambahkan Pegawai Baru</a>
    @if ($pegawai->count() > 0)
        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Pangkat</th>
                    <th>Alamat</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pegawai as $data)
                    <tr>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->pangkat }}</td>
                        <td>{{ $data->alamat }}</td>
                        <td>
                            <span>
                                <a href="{{ route('pegawai.edit', $data->id) }}" style="margin-right: 6px; width:100px;">Edit</a>
                                <form method="POST" action="{{ route('pegawai.destroy', $data->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Hapus</button>
                                </form>
                            </span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Data pegawai Kosong.</p>
    @endif
    <form method="GET" class="mb-2">
        <input type="text" placeholder="nama pegawai" name="nama" value="{{ request()->nama ?? '' }}">
        <button type="submit">cari</button>
    </form>

</body>
</html>