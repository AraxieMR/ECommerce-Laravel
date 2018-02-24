@extends('cms.cms_master')
@section('cms_content')
<h1 class="page-header">Add new category</h1>

<br><br>
<div class="row">
  <div class="col-md-6">
    <form  action='{{url('cms/categories')}}' method="POST" enctype="multipart/form-data">
      {{ csrf_field() }}
    
      <div class="form-group">
        
        <label for="title">Title</label>
        <input name='title' value='{{ old('title') }}' type="text" class="form-control origin-text" id="title"  placeholder="title">
        <!--<span class="text-danger">{{ $errors->first('email') }}</span>-->
      </div>
      
      <label for="url">Url</label>
        <input name='url' value='{{ old('url') }}' type="text" class="form-control target-text" id="url"  placeholder="url">
        <!--<span class="text-danger">{{ $errors->first('email') }}</span>-->
         <div class="form-group">
        <label for="article">Article</label>
        <textarea id="article" name='article' class="form-control">{{ old('article') }}</textarea>
        <!--<span class="text-danger">{{ $errors->first('email') }}</span>-->
      </div>
       <div class="form-group">
        <label for="image">Category image</label>
        <input type='file' name='image' id='image'>
          <br><br>
      <a href= "{{url('cms/categories')}}" class="btn btn-default">Cancel</a>
      <input class='btn btn-primary' type='submit' name='submit' value='Save'>
    </form>

  </div>
  
</div>

@endsection

