{{-- resources/views/layouts/header.blade.php --}}
<nav class="custom-navbar">
    <div class="nav-left">
        <ul class="custom-nav-links">
            <li><a href="#home" class="nav-link">HOME</a></li>
            <li><a href="#about" class="nav-link">ABOUT US</a></li>
            <li><a href="#features" class="nav-link">FEATURES</a></li>
        </ul>
    </div>

    <div class="custom-logo">
        <img src="{{ asset('images/logo.png') }}" alt="Logo">
    </div>

    <div class="nav-right">
        <ul class="custom-nav-links">
            <li><a href="#collaborators" class="nav-link">COLLABORATORS</a></li>
            <a href="{{ route('signup') }}" class="sign">SIGNUP NOW!</a>
        </ul>
        <a href="{{ route('login') }}" class="custom-login-btn">LOGIN</a>
    </div>
</nav>

@section('scripts')
@parent
<script>
    {!! file_get_contents(resource_path('views/javascript/header.js')) !!}
</script>
@endsection