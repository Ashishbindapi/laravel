<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1 class="text-center">Registration</h1>
        <form action="{{url('/')}}/register" method="post">
          @php
            $demo =5;
          @endphp
            @csrf
            <x-input type="text" name="name" lable="Please enter name" :demo="$demo"/>
            <x-input type="text" name="email" lable="Please enter email"/>
            <x-input type="text" name="password" lable="Please enter Password"/>
            <x-input type="text" name="cnfpassword" lable="Please enter Confirom Password"/>
            <button class="btn btn-primary" type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
