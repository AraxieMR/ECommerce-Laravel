 @extends('cms.cms_master')
 @section('cms_content')
          <h1 class="page-header">Edit site products</h1>
          <div class='row'>
            <div class='col-md-12'>
              <p>
                <a class="btn btn-primary" href='{{url('cms/products/create')}}'>+Add new product</a>
              </p>
             
            </div>
          </div>   
          <br><br>
          <div class="row">
            <div class="col-md-8">
               <table class="table table-bordered">
                <thead>
                <th>Title</th>
                   <th>Product image</th>
                 <th>Updated at</th>
                  <th>Operation</th>
                 </thead>
                 <tbody>
                   @foreach($products as $item)
                   
                         <tr>
                         <td>{{$item['title']}}</td>
                         <td><img width='50' src='{{ asset('images/'.$item['image']) }}'></td>
                          <td>{{$item['updated_at']}}</td>
                          <td>
                            <a href="{{ url('cms/products/' . $item['id'].'/edit') }}">Edit</a> |
                             <a href="{{ url('cms/products/' . $item['id']) }}">Delete</a>
                          </td>
                       </tr>
                   @endforeach    
                 </tbody>
              </table>
            </div>
          </div>
          
@endsection

