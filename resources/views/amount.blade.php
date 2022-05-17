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

                @if(isset($event))
                @foreach($event as $data)
                <tr>
                <form action='{{"editamount"}}' method="POST">
                    @csrf
                    <td><center><input type='text' name="id" id="{{ $data->Id }}" value='{{ $data->Id }}' readonly></center></td>
                    <td><center><input type='number' name="amount" id="amount" value='{{ $data->amount }}' pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==4) return false;" step="0.01" required></center></td>
                    <!-- <td><button type="submit" name="submit" value="submit">Submit</button></td>  -->
                    <td><button type="submit" name="submit" value="submit" style="border:1px solid transparent; border-radius:10px;">Submit</button></td>
                </form>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>

		<!-- <input type="submit" name='submit' value="Submit" id='submit' style="justify-content:center;align-items:center;background:cadetblue; color:white; width:800px; border-radius:5px;"> -->
    </div>

    <script src="{{ asset('js/app.js') }}" type="text/js"></script>

@stop
