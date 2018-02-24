@extends('cms.cms_master')
@section('cms_content')
<h1 class="page-header">Edit content</h1>

<br><br>
<div class="row">
  <div class="col-md-6">
    <form  action= "{{ url('cms/content/'.$content['id'])  }}" method="POST">
      {{ csrf_field() }}
      {{method_field('PUT')}}
      <div class="form-group">
        <label for="menu-link"></label>
        <select id="menu-link" name="menu_id" class="form-control">
       
          @foreach($menu as $item)
            <option @if (  $content['menu_id'] ) == $item['id'] )  selected="selected" @endif value="{{ $item['id'] }}">{{ $item['link'] }}</option>
          @endforeach
        </select>
       </div>
      <div class="form-group">
        <label for="title">Title</label>
        <input name="title" value="{{ $content['title'] }}" type="text" class="form-control" id="title"  placeholder="title">
        <!--<span class="text-danger">{{ $errors->first('email') }}</span>-->
      </div>
        <div class="form-group">
        <label for="article">Article</label>
        <textarea id="article" name='article' class="form-control"> {{ $content['article']}} </textarea>
        <!--<span class="text-danger">{{ $errors->first('email') }}</span>-->
      </div>
          <br><br>
      <a href= "{{url('cms/content')}}" class="btn btn-default">Cancel</a>
      <input class="btn btn-primary" type="submit" name="submit" value="Update">
    </form>

  </div>
  
</div>

@endsection

