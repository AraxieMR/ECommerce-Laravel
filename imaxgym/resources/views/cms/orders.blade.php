 @extends('cms.cms_master')
 @section('cms_content')
      <h1 class="page-header">iMAXGYM  orders</h1>
          <div class='row'>
            <div class='col-md-12'>
              <table class="table table-bordered">
                <thead>
                   <th>User</th>
                   <th>Order details</th>
                    <th>Total</th>
                    <th>Date</th>
                 </thead>
                 <tbody>
                   @foreach($orders as $order)
                         <tr>
                          <td>{{ $order->name }}</td>
                          <td>
                            <ul>
                              @foreach (unserialize($order->data) as $item)
                              <li>{{  $item['name'] }},Price: {{  $item['price'] }}$, Quantity: {{  $item['quantity'] }} </li>
                              @endforeach
                            </ul>
                          </td>
                          <td>{{ $order->total }}</td>
                          <td>{{ $order->created_at }}</td>
                       </tr>
                   @endforeach    
                 </tbody>
              </table>
            </div>
          </div>
          
@endsection

