@extends('cms.cms_master')
@section('cms_content')
<h1 class="page-header">Edit this product</h1>

<br><br>
<div class="row">
  <div class="col-md-6">
     <form  action='{{url('cms/products/'. $product['id'])}}' method="POST" enctype="multipart/form-data">
      {{ csrf_field() }}
      {{method_field('PUT')}}
      
      <input type="hidden" name="item_id" value=" {{ $product['id'] }}">
     <div class="form-group">
        <label for="categorie-id">Category</label>
        <select name='categorie_id' id='categorie-id' class='form-control'>
          <option value='' >Choose Category..</option>
          @foreach($categories as $category)
          <option @if ($product['categorie_id'] == $category['id'] )  selected="selected" @endif value='{{ $category['id'] }}'>{{ $category['title'] }}</option>
          @endforeach
        </select>
    </div>
      
    <div class="form-group">
        <label for="title">Title</label>
        <input name='title' value='{{ $product['title'] }}' type="text" class="form-control origin-text" id="title"  placeholder="title">
        <!--<span class="text-danger">{{ $errors->first('email') }}</span>-->
    </div>
      
     <div class="form-group">
         <label for="url">Url</label>
         <input name='url' value='{{ $product['url'] }}' type="text" class="form-control target-text" id="url"  placeholder="url">
        <!--<span class="text-danger">{{ $errors->first('email') }}</span>-->
     </div>
      
     <div class="form-group">
            <label for="article">Article</label>
           <textarea id="article" name='article' class="form-control">{{ $product['article'] }}</textarea>
        <!--<span class="text-danger">{{ $errors->first('email') }}</span>-->
    </div>
      
       <div class="form-group">
          <label for="price">Price</label>
          <input id="price" name='price' class="form-control" value ="{{  $product['price'] }}" class="form-control" id="price" placeholder="price"></input>
        <!--<span class="text-danger">{{ $errors->first('email') }}</span>-->
      </div>
  
        <div class="form-group">
            <img width='50' src='{{ asset('images/'. $product['image']) }}'><br><br>
           <label for="image"> Change product image</label>
           <input type='file' name='image' id='image'>
       </div>    
      
       <div class="form-group">
          <label for="stock">Stock</label>
          <input id="stock" name='stock' class="form-control" value ="{{ old('stock') }}" class="form-control" id="stock" placeholder="stock"></input>
       </div>
    
       <div class="form-group">
          <label for="rating">Rating</label>
          <input id="rating" name='rating' class="form-control" value ="{{ old('rating') }}" class="form-control" id="stock" placeholder="rating"></input>
       </div>
      
      <a href= "{{url('cms/products')}}" class="btn btn-default">Cancel</a>
      <input class='btn btn-primary' type='submit' name='submit' value='Save'>
    </form>

  </div>
  
</div>

@endsection

