<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <link href="{{asset('assets/css/base.css')}}" rel="stylesheet" >

    <title>Principal</title>

</head>
<body>
        
    <div class='background'>

        <div class="container-fluid">
            <nav class="navbar navbar-light" style="background-color: rgba(230, 71, 18, 0.5)">
                <a class='navbar-brand logo' href="{{url('painel')}}">
                
                <div class="logo-image-small">
                <img src="{{ asset('assets\img\logo_d.png') }}">
                </div>
            </a>

        </div>

    @yield('content')

    </div>

</body>
</html>