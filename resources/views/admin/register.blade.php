@extends('layouts/app')

@section('content')
<div class="container">
    <div class="row text-center">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default linear_bg loginbody">
                <div class=" register_header">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">


                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control border-radius" name="email" value="{{ old('email') }}" placeholder="First Name" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">


                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control border-radius" name="email" value="{{ old('email') }}" placeholder="Last Name" required autofocus>

                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">


                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control border-radius" name="email" value="{{ old('email') }}" placeholder="E-Mail Address" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">


                            <div class="col-md-12 border-radius">
                                <input id="password" type="password" class="form-control border-radius" name="password" placeholder="Password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group text-left checkbox_div">
                            <div class="col-md-12 p-5">
                                <input type="checkbox" class = "check_box" /><span>Accept <a href="#">Terms and Conditions</a></span>


                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 ">
                                <button type="submit" class="btn border-radius bg_ltgreen" >
                                    Register
                                </button>



                            </div>
                        </div>
<!--
                        <div class="form-group">
                            <div class="col-md-12 ">
                                  <button type="submit" class="btn  border-radius">
                                    login
                                </button>



                            </div>
                        </div>
-->

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
