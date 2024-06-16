<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body
    style="display:flex; flex-direction:column; min-height:90vh;
justify-content:center; background-color:#212121; color:white;">
    <header style="background-color: crimson; text-align:center;">
        <h1 style="color:white;"> Trial</h1>
    </header>
    <main style="flex:1;">
        {{-- Page Content --}}
        @yield('content')
    </main>
</body>

</html>
