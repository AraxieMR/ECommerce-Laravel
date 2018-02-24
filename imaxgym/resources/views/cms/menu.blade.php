 @extends('cms.cms_master')
 @section('cms_content')
          <h1 class="page-header">Edit site menus</h1>
          <div class='row'>
            <div class='col-md-12'>
              <p>
                <a class="btn btn-primary" href='{{url('cms/menu/create')}}'>+Add new menu link</a>
              </p>
             
            </div>
          </div>   
          <br><br>
          <div class="row">
            <div class="col-md-8">
               <table class="table table-bordered">
                <thead>
                <th>Link</th>
                 <th>Updated at</th>
                  <th>Operation</th>
                 </thead>
                 <tbody>
                   @foreach($menu as $item)
                         <tr>
                         <td>{{$item['link']}}</td>
                          <td>{{$item['updated_at']}}</td>
                          <td>
                            <a href="{{ url('cms/menu/'.$item['id'].'/edit') }}">Edit</a> |
                             <a href="{{ url('cms/menu/'.$item['id']) }}">Delete</a>
                          </td>
                         </tr>
                   @endforeach    
                 </tbody>
              </table>
            </div>
          </div>
          
@endsection

