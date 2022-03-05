<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PU Event Amounts</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    <style>
        h1{
            font-size: xx-large !important;
            font-style: oblique;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h1>PU Event Amounts</h1>
        {{-- class="text-center mb-3" --}}

        <div class="d-flex justify-content-end mb-4">
            {{-- <a class="btn btn-primary" href="{{ URL::to('/employee/pdf') }}">Export to PDF</a> --}}
			<a class="btn btn-primary" href="admindashboard">Return to Dashboard</a> 
        </div>
		
			
        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-danger">
                    {{-- <th scope="col"></th> --}}
                    <th style="align-content:center;">Event</th>
                    <th  style="align-content:center;">Amount</th>
                    {{-- <th scope="col">Edit</th> --}}
                    {{-- <th scope="col">Phone</th>
                    <th scope="col">DOB</th> --}}
                </tr>
            </thead>
            @if(Session::get('success'))
            <div class="alert alert-success">
              {{Session::get('success')}}
            </div>
          @endif

          @if(Session::get('fail'))
            <div class="alert alert-danger">
              {{Session::get('fail')}}
            </div>
          @endif
            <tbody>
                <form action="changeamount" method="POST">
                    @csrf
                @if(isset($user))
                @foreach($user as $data)
                <tr>
                    <th><center><input type='text' name="id" id="id" value='{{ $data->id }}' readonly></center></th>
                    <td><center><input type='text' name="amount" id="amount" value='{{ $data->amount }}'></center></td>
                    {{-- <td><button type="submit" name="submit" value="submit">Submit</button></td> --}}
                    {{-- <td><a href={{"editamount/".$data->id}}>Edit</a></td> --}}
                </tr>
                @endforeach
                @endif
                
                    {{-- <button type="submit" name="submit" value="submit">Submit</button> --}}
            
            </tbody>
        </table>
		<input type="submit" name='submit' value="Submit" id='submit' style="padding:10px; margin-left:210px; margin-bottom:50px; background:cadetblue; color:white; width:800px; border-radius:5px;">
    </div>
</form>
    <script src="{{ asset('js/app.js') }}" type="text/js"></script>
    {{-- <a class="btn btn-primary" href="{{ URL::to('/employee/pdf') }}" style="margin-left:200px;">Export to PDF</a> --}}
</body>

</html>