@extends('layouts.auth')
@section('content')

    <div class="middle-box text-center loginscreen   animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">IN+</h1>

            </div>
            <h3>Register to IN+</h3>
            <p>Create account to see it in action.</p>


              <form class="m-t" role="form" method="POST" action="{{ url('/register') }}">
                  {{ csrf_field() }}

                  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <div class="form-group">
                            <input id="name" type="text" class="form-control" placeholder="Name" name="name" value="{{ old('name') }}" required autofocus>
                          @if ($errors->has('name'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('name') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                       <div class="form-group">
                        <input id="email" type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required>
                          @if ($errors->has('email'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('email') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>


                  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <div class="form-group">
                          <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>
                          @if ($errors->has('password'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('password') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group">
                        <input id="password-confirm" type="password" class="form-control" placeholder="password_confirmation" name="password_confirmation" required>
                  </div>




                <button type="submit" class="btn btn-primary block full-width m-b">Register</button>

                <p class="text-muted text-center"><small>Already have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="{{ url('/login') }}">Login</a>
            </form>
            <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
        </div>
    </div>


    @endsection
