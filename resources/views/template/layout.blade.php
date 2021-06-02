<!DOCTYPE html>
<html lang="en">
<head>
    @include('template.head')
</head>
<body data-spy="scroll" data-target=".header" data-offset="50">
    <header class="header">
        @include('template.header')
    </header>
    @yield('content')
    
    @include('template.footer')
    </footer>
    @include('template.foot')
</body>
</html>

{{-------------------------------------------------------------------------------------------------}}

