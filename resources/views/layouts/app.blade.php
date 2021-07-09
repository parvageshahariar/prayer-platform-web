<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - The Prayer Platform</title>

    <link rel="stylesheet" href="css/app.css">
</head>

<body class="font-sans">
    <x-navigation />
    <div class="container w-2/3 m-auto pt-8">
        @yield('content')
    </div>
</body>

</html>
