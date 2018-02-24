@extends('master')
@section('main_content')

<div class="container-fluid overlay dark-6">
  <div class="col-md-4 col-sm-6 text-white box-two animate expandOpen center-block" style="float: none">
    <form class="border-light padding-small margin-top-small margin-bottom-small" action='' method="POST">
      <h3 class="margin-bottom-small text-center">Login to your account</h3>
      {{ csrf_field() }}
      <div class="row">
        <div class="col-sm-12">
          <div class="form-group">
            <label class="control-label" for="email">Email </label>
            <input name='email' value='{{ old('email') }}' type="text" class="form-control  input-lg" id="email" >

          </div>
          <div class="form-group">
            <label class="control-label" for="password">Password</label>
            <input name='password' type="password" class="form-control input-lg" id="password" >
            <!--<span class="text-danger">{{ $errors->first('password') }}</span>-->
          </div>
        </div>
      </div>
        <input  class="center-block btn btn-base btn-lg text-weight-600 text-uppercase box-shadow-active" type='submit' name='submit' value='LOGIN'>

    </form>
  </div>
</div>



@endsection

