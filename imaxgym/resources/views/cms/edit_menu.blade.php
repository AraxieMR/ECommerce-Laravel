@extends('cms.cms_master')
@section('cms_content')
<h1 class="page-header">Edit new item</h1>

<br><br>
<div class="row">
  <div class="col-md-6">
    <form  action='{{url('cms/menu/'.$menu['id'])}}' method="POST">
      {{ csrf_field() }}
      {{method_field('PUT')}}
      <input type="hidden" name="item_id" value=" {{ $menu['id'] }}">
      <div class="form-group">
        <label for="link">Link</label>
        <input name='link' value="{{$menu['link'] }}" type="text" class="form-control origin-text" id="link"  placeholder="link">
        <!--<span class="text-danger">{{ $errors->first('email') }}</span>-->
      </div>
      <div class="form-group">
        <label for="title">Title</label>
        <input name='mtitle' value="{{ $menu['mtitle'] }}" type="text" class="form-control" id="title"  placeholder="title">
        <!--<span class="text-danger">{{ $errors->first('email') }}</span>-->
      </div>
       <label for="url">Url</label>
        <input name='url' value="{{ $menu['url'] }}" type="text" class="form-control target-text" id="url"  placeholder="url">
        <!--<span class="text-danger">{{ $errors->first('email') }}</span>-->
          <br><br>
      <a href= "{{url('cms/menu')}}" class="btn btn-default">Cancel</a>
      <input class='btn btn-primary' type='submit' name='submit' value='Update'>
    </form>

  </div>
  
</div>

@endsection

