<div class="page-container">
<div class="row">
    <div class="col-md-12 col-lg-7">
      <div class="dash-card">
          <div class="d-flex justify-content-between align-items-center">
              <h4>Orders</h4>
              <img src="{{ asset('assets2/images/more.svg') }}" alt="more"/>
          </div>
          <div class="table-responsive">
          <table class="table">
                <thead>
                        <tr>
                            <th>OrderId</th>
                            <th>Subtotal</th>
                            <th>Discount</th>
                            <th>Tax</th>
                            <th>Total</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Zip Code</th>
                            <th>Status</th>
                            <th>Order Date</th>
                        </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td>{{$order->id}}</td>
                            <td>{{$order->subtotal}}</td>
                            <td>{{$order->discount}}</td>
                            <td>{{$order->tax}}</td>
                            <td>{{$order->total}}</td>
                            <td>{{$order->firstname}}</td>
                            <td>{{$order->lastname}}</td>
                            <td>{{$order->mobile}}</td>
                            <td>{{$order->email}}</td>
                            <td>{{$order->zipcode}}</td>
                            <td>{{$order->status}}</td>
                            <td>{{$order->created_at}}</td>
                            <td></td>
                        </tr>      
                    @endforeach
                </tbody>
            </table>
            {{$orders->links()}}
          </div>
      </div>
    </div>
</div>
</div>
