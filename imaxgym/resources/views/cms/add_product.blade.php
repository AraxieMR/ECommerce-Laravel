@extends('cms.cms_master')
@section('cms_content')
<h1 class="page-header">Add new product</h1>

<br><br>
<div class="row">
  <div class="col-md-6">
    <form  action='{{url('cms/products')}}' method="POST" enctype="multipart/form-data">
      {{ csrf_field() }}
      
     <div class="form-group">
        <label for="categorie-id">Category</label>
        <select name='categorie_id' id='categorie-id' class='form-control'>
          <option value='' >Choose Category..</option>
          @foreach($categories as $category)
          <option @if (old('categorie_id') == $category['id'] )  selected="selected" @endif value='{{ $category['id'] }}'>{{ $category['title'] }}</option>
          @endforeach
        </select>
    </div>
      
    <div class="form-group">
        <label for="title">Title</label>
        <input name='title' value='{{ old('title') }}' type="text" class="form-control origin-text" id="title"  placeholder="title">
     </div>
      
     <div class="form-group">
         <label for="url">Url</label>
         <input name='url' value='{{ old('url') }}' type="text" class="form-control target-text" id="url"  placeholder="url">
     </div>
      
     <div class="form-group">
            <label for="article">Article</label>
           <textarea id="article" name='article' class="form-control">{{ old('article') }}</textarea>
      </div>
      
       <div class="form-group">
          <label for="price">Price</label>
          <input id="price" name='price' class="form-control" value ="{{ old('price') }}" class="form-control" id="price" placeholder="price"></input>
      </div>
      
      <div class="form-group">
          <label for="stock">Stock</label>
          <input id="stock" name='stock' class="form-control" value ="{{ old('stock') }}" class="form-control" id="stock" placeholder="stock"></input>
       </div>
    
       <div class="form-group">
          <label for="rating">Rating</label>
          <input id="rating" name='rating' class="form-control" value ="{{ old('rating') }}" class="form-control" id="stock" placeholder="rating"></input>
       </div>
      
       <div class="form-group">
          <label for="image">Product image</label>
          <input type='file' name='image' id='image'>
       </div>
          <br><br>
          
      <a href= "{{url('cms/products')}}" class="btn btn-default">Cancel</a>
      <input class='btn btn-primary' type='submit' name='submit' value='Save'>
    </form>

  </div>
  
</div>

@endsection

