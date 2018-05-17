
@extends('layouts.login')
@section('content')
            <div class="panel panel-default">
             
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group form-group-default {{ $errors->has('email') ? ' has-error' : '' }}">
                            <label>james@doyle.com</label>

                            <div class="controls">
                                <input id="email" type="email" placeholder="E-mail" class="form-control " name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group form-group-default{{ $errors->has('password') ? ' has-error' : '' }}">
                             <label></label>

                            <div class="controls">
                                <input id="password" placeholder="Password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                           <button type="submit" class="btn btn-block login-button">
                                     <span class="signingin hidden"><span class="voyager-refresh"></span> Logging in...</span>
                        <span class="signin">Login</span>
                                </button>

                        <div class="form-group">
                         
                                <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                    Forgot Your Password?
                                </a>
                         
                        </div>

                    </form>
                </div>
            </div>
@endsection
