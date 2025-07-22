<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BloodKind</title>
    <link rel="stylesheet" href="{{ asset('css/header-home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <div class="layout"> {{-- FLEX container --}}
        @include('layouts.sidebar') {{-- Your sidebar file --}}
        
        <div class="main-content">
            @include('layouts.header-home') {{-- Your header file --}}

            <div class="page-content">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>
