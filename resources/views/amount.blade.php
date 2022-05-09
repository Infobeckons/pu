@extends('layouts.layout')
@section('content')

<div class="container mt-5">
        <h3>PU Event Amounts</h3>		
        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-danger">
                    <th style="align-content:center;">Event</th>
                    <th style="align-content:center;">Amount</th>
                    <th style="align-content:center;">Edit/Update</th>
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
                @if(isset($event))
                @foreach($event as $data)
                <tr>
                    <td><center><input type='text' name="id" id="id" value='{{ $data->Id }}' readonly></center></td>
                    <td><center><input type='text' name="amount" id="amount" value='{{ $data->amount }}'></center></td>
                    <!-- <td><button type="submit" name="submit" value="submit">Submit</button></td>  -->
                    <td><a href='{{"editamount/{$data->Id}"}}'>Edit</a></td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
		<!-- <input type="submit" name='submit' value="Submit" id='submit' style="justify-content:center;align-items:center;background:cadetblue; color:white; width:800px; border-radius:5px;"> -->
    </div>
</form>
    <script src="{{ asset('js/app.js') }}" type="text/js"></script>

@stop