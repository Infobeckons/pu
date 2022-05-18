@if(Session::get('email'))
<script type="text/javascript">
    window.location = "{{url('user_payment')}}";//here double curly bracket
</script>

@else
@include('home/header')
@if(isset($not_found))
<div class="alert alert-danger alert-dismissable">
    Sorry, you entered wrong email or password...</div>
@endif
<style>
    .form-box{
        background: #f5f5f500;
        border-radius: 4px;
        -webkit-box-shadow: -1px -3px 31px -3px rgba(125,125,125,1);
        -moz-box-shadow: -1px -3px 31px -3px rgba(125,125,125,1);
        box-shadow: -1px -3px 31px -3px rgba(125,125,125,1);
        border: 2px dashed #ccc;
        padding: 45px 30px 45px;
    }
    .form-box h4{
        text-align: center;
        margin-top: 0px;
        margin-bottom: 23px;
         font-size: 24px;
    }
    .form-box .input-group-addon{
        padding: 12px 20px;
        color: #a40006;
    }
    .frgt-green{
        color: #005826 !important;
    }
    .frgt-red{
        color: #a40006 !important;
    }
    .hint-text{
        padding-top: 4%;
        margin: 0px 0px 5px;
        color: #000;
    }
</style>
<section>
    <div class="container wdp_margin_top_10">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                <div class="form-box">
                    <h4>Login</h4>
                    @if(isset($not_found))
                        <div class="alert alert-danger alert-dismissable">
                            Sorry, you entered wrong email or password...</div>
                    @endif
                    <form action="{{url('login_user')}}" method="post" id="wdp_page_form" class="form wdp_page_form">
                        <input type="hidden" name="_token" value="<?php echo csrf_token();?>">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="email" class="form-control" name="email" placeholder="Email" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block btn-lg">Log In</button>
                        </div>
                        <p class="hint-text"><a class="frgt-green" href="{{url('rpw')}}">Forgot Password?</a> | <a class="frgt-red"  href="{{url('/')}}">Back To Home</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@include('home/footer ')	
@endif
