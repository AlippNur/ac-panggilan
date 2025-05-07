{{-- layouts/app.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.header')
</head>
<body>
    @include('partials.navbar')

    {{-- Tampilkan carousel hanya di home --}}
    @if (Request::is('/')) 
        @include('partials.carousel')
    @endif

    {{-- Tampilkan page-header di semua halaman kecuali home --}}
    {{-- @if (!Request::is('/'))
    @include('partials.pageheader', ['title' => ucfirst(Request::segment(1))])
@endif --}}

    {{-- Konten halaman --}}
    @yield('content')

    @include('partials.footer')
    @include('partials.script')
</body>
</html>
