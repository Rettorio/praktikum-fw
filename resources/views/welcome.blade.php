<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
</head>
<body>
    <h1>Selamat datang, {{ $nama }}</h1>
    <p>Email: {{ $email }}</p>

    <h2>Daftar teman :</h2>
    <ul>
        @foreach ($teman as $t)
            <li>{{ $t }}</li>
        @endforeach
    </ul>

    @if ($isAdmin)
        <p>Anda adalah seorang admin.</p>
    @else
        <p>Anda bukan seorang admin.</p>
    @endif

</body>
</html>