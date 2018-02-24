 @extends('cms.cms_master')
 @section('cms_content')
          <h1 class="page-header">Edit site categories</h1>
          <div class='row'>
            <div class='col-md-12'>
              <p>
                <a class="btn btn-primary" href='{{url('cms/categories/create')}}'>+Add new categorie</a>
              </p>
             
            </div>
          </div>   
          <br><br>
          <div class="row">
            <div class="col-md-8">
               <table class="table table-bordered">
                <thead>
                <th>Title</th>
                   <th>Category image</th>
                 <th>Updated at</th>
                  <th>Operation</th>
                 </thead>
                 <tbody>
                   @foreach($categories as $item)
                         <tr>
                         <td>{{$item['title']}}</td>
                         <td><img width='50' src='{{ asset('images/'.$item['image']) }}'></td>
                          <td>{{$item['updated_at']}}</td>
                          <td>
                            <a href="{{ url('cms/categories/'.$item['id'].'/edit') }}">Edit</a> |
                             <a href="{{ url('cms/categories/'.$item['id']) }}">Delete</a>
                          </td>
                       </tr>
                   @endforeach    
                 </tbody>
              </table>
            </div>
          </div>
          
@endsection

