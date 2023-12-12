<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sewa Buku</title>
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
</head>
<body>
    @include('layout.header')
    @include('layout.navbar')
    @yield('content')
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/data_peminjamapp.js') }}"></script>
    <script src="{{ asset('js/peminjamapp.js') }}"></script>
</body>
</html>
