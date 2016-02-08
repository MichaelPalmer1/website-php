<!DOCTYPE html>
<html lang="en">
<head>
    @include('header')
</head>

<body data-spy="scroll" data-target="#navigation" data-offset="80">

@include('navigation')

@yield('content')

@include('footer')

</body>
</html>