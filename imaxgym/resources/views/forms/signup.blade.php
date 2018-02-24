@extends('master')
@section('main_content')


<div class="container-fluid overlay dark-6">
  <div class="col-md-4 col-sm-6 text-white box-two animate expandOpen center-block" style="float: none">
    <form class="border-light padding-small margin-top-small margin-bottom-small"  action='' method="POST" >
      {{ csrf_field() }}
       <h3 class="margin-bottom-small text-center">Create an account</h3>
<div class="row">
 <div class="col-sm-12">
    <div class="form-group">
       <label class="control-label" for="name">Name</label>
       <input name='name' value='{{ old('name') }}' type="text" class="form-control input-lg" id="name" >
    </div>
    <div class="form-group">
      <label  class="control-label" for="email">Email</label>
      <input name='email' value='{{ old('email') }}' type="text" class="form-control input-lg" id="email" >
   
    </div>
 
      <div class="form-group">
      <label  class="control-label" for="password">Password</label>
      <input name='password' type="password" class="form-control input-lg" id="password"  >
      </div>
   
      <div class="form-group">
      <label  class="control-label" for="password-confirmation">Re-enter Password</label>
      <input name='password_confirmation' type="password" class="form-control input-lg" id="password-confirmation"  >
    
      </div>


         <input class="center-block btn btn-base btn-lg text-weight-600 text-uppercase box-shadow-active"  type='submit' name='submit' value='Sign Up'  >
    
  </div>
      </div>
   
     </form>
   </div>
</div>



@endsection
