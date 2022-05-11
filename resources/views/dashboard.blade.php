<x-app-layout>
     <!-- bootstrap -->
  {{-- <link rel="stylesheet" href="{{ asset('dist/css/bootstrap.css')}}"> --}}
    <style>
         @keyframes move{
            0%, 100%{
                transform:translateX(0);
            }
            20%, 60% {
                transform: translateX(-10px);
            }
            30%, 50%{
                transform: translateY(-10px)
            }
            40%, 80% {
                transform: translateX(10px);
            }
            70%, 90%{
                transform:translateY(10px);
            }
        }
        .back{
            overflow: hidden;
            height: 400px;
            width:auto;
            align-content:center;
        }
        .back:hover{
            overflow: hidden;
            height: 400px;
            width:auto;
            align-content:center;
            transition-duration:1s;
            animation-name:move;
            animation-iteration-count:infinite;
            animation-duration:3s;
        }
       
        .col-md-9{
            background:#307698;
            padding:100px;
        }
    </style>
   <!-- <div class="col-md-9" style="height:auto; width:100%;">
    <a href="amount" target="_blank" style=""><input type="button" name="button" value="Amount"></a>
       {{-- <center><img src="{{ asset('dist/img/undercons.png')}}" class="back"/> </center>  --}}
    </div> -->
    @extends('layouts.layout')
    

</x-app-layout>