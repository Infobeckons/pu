<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    <style>
        h1{
            font-size: xx-large !important;
            font-style: oblique;
            text-align: center;
        }
    </style>
    <title>Edit amount</title>
</head>
<body>
    <form action="changeamount" method="POST">
        @csrf
        <input type="text" name="id"  value="{{$amount['id']}}"readonly><br>
        <input type="text" name="name" value="{{$amount['eventname']}}"><br>
        <input type="text" name="amount" value="{{$amount['amount']}}" ><br>
       
        <button type="submit">Update</button>

    </form>
</body>
</html>