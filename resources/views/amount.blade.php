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
                    <td><center><input type='text' name="id" id="{{ $data->Id }}" value='{{ $data->Id }}' readonly></center></td>
                    <td><center><input type='text' name="amount" id="amount" value='{{ $data->amount }}'></center></td>
                    <!-- <td><button type="submit" name="submit" value="submit">Submit</button></td>  -->
                    <form action='{{"editamount/{$data->Id}"}}' method="POST">
                    @csrf
                    <td><input type="submit" name="submit" onclick="newamount()"></td>
                    </form>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
        <script type="text/javascript">
        function newamount(){
          var eventname = document.getElementById("{{ $data->Id }}").value;
          // var amount = document.getElementById("amount").value;
          // $.ajax({
          //   headers : {
          //     'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
          //   },
          //   method : "POST",
          //   url : "{{URL::to('editamount')}}",
          //   data : {
          //     'Id' : eventname,

          //   },
          //   success: function(data){
          //     $("#amount").val(data);
          //     $("#amountfetch").val(data);
          //   },
          // });

          // Update record
          public function updateUser(Request $request){

            $name = $request->input('name');
            $email = $request->input('email');
            $editid = $request->input('editid');

            if($name !='' && $email != ''){
              $data = array('name'=>$name,"email"=>$email);
            
              // Call updateData() method of Page Model
              Page::updateData($editid, $data);
              echo 'Update successfully.';
            }else{
              echo 'Fill all fields.';
            }

            exit; 
            }
        }
</script>
		<!-- <input type="submit" name='submit' value="Submit" id='submit' style="justify-content:center;align-items:center;background:cadetblue; color:white; width:800px; border-radius:5px;"> -->
    </div>

    <script src="{{ asset('js/app.js') }}" type="text/js"></script>

@stop