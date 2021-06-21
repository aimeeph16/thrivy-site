<div class="page-container">
        <!--
        <div class="page-sidebar-wrapper">
              <div class="sidebar">
                    <div class="logo">
                        <div class="d-flex justify-content-center align-items-center">
                            <img src="{{ asset('assets2/images/logo.svg') }}" alt="logo" class="logo-img mr-3">
                            <div class="logo-text">
                                  DEV-CODE
                            </div>
                        </div>
                    </div>
                    <div class="user-info d-flex">
                        <div>
                            <img src="{{ asset('assets2/images/man.svg') }}" alt="user-img" class="user-img">
                        </div>
                        <div class="d-flex flex-column">
                              <h5>Arun Prakash</h5>
                              <p>devcode@gmail.com</p>
                        </div>
                    </div>
                    <ul class="nav flex-column menu-link">
                          <li class="nav-item">
                              <a href="#" class="nav-link"><img src="{{ asset('assets2/images/dashboard.svg') }}" alt="dashboard">Dashboard</a>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link"><img src="{{ asset('assets2/images/shopping-bag.svg') }}" alt="dashboard">Orders</a>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link"><img src="{{ asset('assets2/images/user.svg') }}" alt="dashboard">Customers</a>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link"><img src="{{ asset('assets2/images/cog.svg') }}" alt="dashboard">Settings</a>
                    </li>
                    </ul>
              </div>
        </div>
      -->

        <div class="page-content-wrapper">
            <div class="page-content">
                <div class="top-bar d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                   </div>
                   <div class="d-flex align-items-center">
                          <div class="icon-btn">
                              <img src="{{ asset('assets2/images/notification.svg') }}" alt="notification"/>
                          </div>                        
                        <div class="log-btn d-flex align-items-center">
                            <div >
                                <img src="{{ asset('assets2/images/man.svg') }}" alt="">
                            </div>
                            <div>
                              <h6>{{Auth::user()->name}}</h6>
                              <p>Super Admin</p>
                            </div>
                        </div>
                   </div>
                </div>


                <div class="inner-section">
                    <!--<h2 class="page-title">Dashboard</h2>-->
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-xl-3 col-12">
                              <div class="dash-card d-flex align-items-center">
                                    <div class="img-box order-box d-flex align-items-center justify-content-center mr-3">
                                          <img src="{{ asset('assets2/images/cart.svg') }}" alt="cart"/>                                      
                                    </div>
                                    <div class="dash-content">
                                            <h4>Orders</h4>
                                            <p>1000+</p>
                                    </div>
                              </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3 col-12">
                          <div class="dash-card d-flex align-items-center">
                                <div class="img-box customer-box d-flex align-items-center justify-content-center mr-3">
                                      <img src="{{ asset('assets2/images/customers.svg') }}" alt="customers"/>                                      
                                </div>
                                <div class="dash-content">
                                        <h4>Customers</h4>
                                        <p>500+</p>
                                </div>
                          </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 col-12">
                      <div class="dash-card d-flex align-items-center">
                            <div class="img-box payment-box d-flex align-items-center justify-content-center mr-3">
                                  <img src="{{ asset('assets2/images/payments.svg') }}" alt="payments"/>                                      
                            </div>
                            <div class="dash-content">
                                    <h4>Payments</h4>
                                    <p>10000+</p>
                            </div>
                      </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 col-12">
                  <div class="dash-card d-flex align-items-center">
                        <div class="img-box product-box d-flex align-items-center justify-content-center mr-3">
                              <img src="{{ asset('assets2/images/product.svg') }}" alt="cart"/>                                      
                        </div>
                        <div class="dash-content">
                                <h4>Products</h4>
                                <p>700+</p>
                        </div>
                  </div>
            </div>
                    </div>

                      
                   <div class="row">
                        <!-- <div class="col-md-12 col-lg-7">
                              <div class="dash-card">
                                  <div class="d-flex justify-content-between align-items-center">
                                      <h4>Orders</h4>
                                      <img src="{{ asset('assets2/images/more.svg') }}" alt="more"/>
                                  </div>
                                  <div class="table-responsive">
                                  <table class="table">
                                        <thead>
                                                <tr>
                                                  <th>S.No</th>
                                                  <th>Order Id</th>
                                                  <th>Product Name</th>
                                                  <th>Status</th>
                                                </tr>
                                        </thead>
                                        <tbody>
                                              <tr>
                                                    <td>1</td>
                                                    <td>Ord001</td>
                                                    <td>Womens bags</td>
                                                    <td class="pending">Pending</td>
                                              </tr>
                                              <tr>
                                                <td>2</td>
                                                <td>Ord003</td>
                                                <td>Mens Jeans</td>
                                                <td  class="pending">Pending</td>
                                          </tr>
                                          <tr>
                                            <td>3</td>
                                            <td>Ord004</td>
                                            <td>kids dress</td>
                                            <td  class="completed">completed</td>
                                      </tr>
                                      <tr>
                                        <td>4</td>
                                        <td>Ord008</td>
                                        <td>Mobile Phone</td>
                                        <td  class="completed">completed</td>
                                  </tr>
                                  <tr>
                                    <td>5</td>
                                    <td>Ord012</td>
                                    <td>Gaming accessories</td>
                                    <td class="completed">completed</td>
                              </tr>
                                        </tbody>
                                  </table>
                                  </div>
                              </div>
                        </div> -->

                        <div class="col-md-12 col-lg-7">
                      <div class="dash-card">
                          <div class="d-flex justify-content-between align-items-center">
                              <h4>Products</h4>
                              <img src="{{ asset('assets2/images/more.svg') }}" alt="more"/>
                          </div>
                          <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Stock</th>
                                        <th>Price</th>
                                        <th>Category</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{$product->id}}</td>
                                        <td><img src="{{ asset('assets2/shopitems') }}/{{ $product->image }}" width="60" /></td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->stock_status}}</td>
                                        <td>{{$product->regular_price}}</td>
                                        <td>{{$product->category->name}}</td>
                                        <td>{{$product->created_at}}</td>
                                        <td></td>
                                    </tr>      
                                @endforeach
                                </tbody>
                            </table>
                            {{$products->links()}}
                          </div>
                      </div>
                  </div>
                    
                  </div>
                </div>
              </div>

<!--
              <div class="product-row">
                  <div class="col-md-12 col-lg-7">
                      <div class="dash-card">
                          <div class="d-flex justify-content-between align-items-center">
                              <h4>Products</h4>
                              <img src="{{ asset('assets2/images/more.svg') }}" alt="more"/>
                          </div>
                          <div class="table-responsive">
                              <table class="table">
                                  <thead>
                                      <tr>
                                          <th>S.No</th>
                                          <th>Order Id</th>
                                          <th>Product Name</th>
                                          <th>Status</th>
                                      </tr>
                                  </thead>
                                  
                                  <tbody>
                                    <tr>
                                      <td>1</td>
                                      <td>Ord001</td>
                                      <td>Womens bags</td>
                                      <td class="pending">Pending</td>
                                    </tr>                                      

                                    <tr>
                                      <td>2</td>
                                      <td>Ord003</td>
                                      <td>Mens Jeans</td>
                                      <td  class="pending">Pending</td>
                                    </tr>
                                          
                                    <tr>
                                      <td>3</td>
                                      <td>Ord004</td>
                                      <td>kids dress</td>
                                      <td  class="completed">completed</td>
                                    </tr>
                                      
                                    <tr>
                                      <td>4</td>
                                      <td>Ord008</td>
                                      <td>Mobile Phone</td>
                                      <td  class="completed">completed</td>
                                    </tr>

                                    <tr>
                                      <td>5</td>
                                      <td>Ord012</td>
                                      <td>Gaming accessories</td>
                                      <td class="completed">completed</td>
                                    </tr>
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
-->
            </div>
        </div>
    </div>

    <!--
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script>
       
      function toggle(){
        $('.sidebar').toggleClass('active');
       $('.page-content-wrapper').toggleClass('active');
      }

      $(document).ready(function(){
            $(window).bind('resize',function(){
                  if($(this).width() < 992){
                        $('.sidebar,.page-content-wrapper').addClass('active');
                        $('.search-bar,.toggler').hide();
                  }else{
                        $('.sidebar,.page-content-wrapper').removeClass('active');
                        $('.search-bar,.toggler').show();
                  }
            }).trigger('resize');
      });

  </script>
-->


<!-- ---------------------------------------------- from tutorial --------------------------------------------------- -->

<!-- <div>
    <style>
        nav svg') }} {
            height: 20px;
        }
        nav .hidden {
            display: block !important;
        }
    </style>
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        All Products
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Stock</th>
                                    <th>Price</th>
                                    <th>Category</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{$product->id}}</td>
                                        <td><img src="{{ asset('assets2/shopitems') }}/{{ $product->image }}" width="60" /></td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->stock_status}}</td>
                                        <td>{{$product->regular_price}}</td>
                                        <td>{{$product->category->name}}</td>
                                        <td>{{$product->created_at}}</td>
                                        <td></td>
                                    </tr>      
                                @endforeach
                            </tbody>
                        </table>        
                        {{$products->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 -->