@extends('cms.cms_master')
@section('cms_content')
<h1 class="page-header">Edit category</h1>

<br><br>
<div class="row">
  <div class="col-md-6">
    
    <form  action='{{url('cms/categories/'. $category['id'])}}' method="POST" enctype="multipart/form-data">
      {{ csrf_field() }}
      {{method_field('PUT')}}
      
      <input type="hidden" name="item_id" value=" {{ $category['id'] }}">
      
      <div class="form-group">
          <label for="title">Title</label>
         <input name='title' value='{{ $category['title'] }}' type="text" class="form-control origin-text" id="title"  placeholder="title">
         <!--<span class="text-danger">{{ $errors->first('email') }}</span>-->
      </div>
      <div class="form-group">
          <label for="url">Url</label>
            <input name='url' value='{{ $category['url'] }}' type="text" class="form-control target-text" id="url"  placeholder="url">
            <!--<span class="text-danger">{{ $errors->first('email') }}</span>-->
      </div>
       <div class="form-group">
            <label for="article">Article</label>
            <textarea id="article" name='article' class="form-control">{{ $category['article'] }}</textarea>
            <!--<span class="text-danger">{{ $errors->first('email') }}</span>-->
      </div>
       <div class="form-group">
            <img width='50' src='{{ asset('images/'. $category['image']) }}'><br><br>
           <label for="image"> Change category image</label>
           <input type='file' name='image' id='image'>
       </div>    
          <br><br>
      <a href= "{{url('cms/categories')}}" class="btn btn-default">Cancel</a>
      <input class='btn btn-primary' type='submit' name='submit' value='Update'>
    </form>

  </div>
  
</div>

@endsection

