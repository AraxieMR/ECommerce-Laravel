@extends('cms.cms_master')
@section('cms_content')
<h3 class="page-header">Are you sure you want to delete this menu ?</h3>

<br><br>
<div class="row">
  <div class="col-md-6">
    <form  action='{{ url('cms/menu/'.$id) }}' method="POST">
      {{ csrf_field() }}
      {{method_field('DELETE')}}
     
      <div class="form-group">
       
      <a href= "{{url('cms/menu')}}" class="btn btn-default">Cancel</a>
      <input class='btn btn-danger' type='submit' name='submit' value='Delete'>
    </form>

  </div>
  
</div>

@endsection

