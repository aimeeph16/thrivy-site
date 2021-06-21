
    <section class="shop">
      <div class="container">
        
        <div class="row">
          <div class="section-title text-center">
            <!--<h1>Live the thrivy lifestyle</h1>-->
            <div style="animation: blink 1s infinite">Live the thrivy lifestyle</div>

          </div>
        </div>

        <div class="row">
          <div class="filter-buttons">
            <ul id="filter-btns">
              <li class="active" data-target="all">ALL</li>
              @foreach ($categories as $category)
                <a href="{{ route('product.category', ['category_slug'=>$category->slug]) }}"><li>{{$category->name}}</li></a>
              @endforeach
              <!-- 
              <li data-target="bags">BAGS</li>
              <li data-target="shoes">SHOES</li>
              <li data-target="accessories">ACCESSORIES</li> -->
            </ul>
          </div>
        </div>

        <div class="row">
          <div class="shop-gallery">
            @foreach ($products as $product)
            
            <div class="item" data-id="accessories">
              <div class="inner">
                <img src="{{ asset('assets2/shopitems/') }}/{{$product->image}}" alt="{{$product->name}}">
              </div>
            </div>
            @endforeach
            
            <!-- <div class="item" data-id="accessories">
              <div class="inner">
                <img src="{{ asset('assets2/shopitems/acc2.jpg') }}" alt="shop">
              </div>
            </div>

            <div class="item" data-id="accessories">
              <div class="inner">
                <img src="{{ asset('assets2/shopitems/acc3.jpg') }}" alt="shop">
              </div>
            </div>

            <div class="item" data-id="accessories">
              <div class="inner">
                <img src="{{ asset('assets2/shopitems/acc4.jpg') }}" alt="shop">
              </div>
            </div>

            <div class="item" data-id="accessories">
              <div class="inner">
                <img src="{{ asset('assets2/shopitems/acc5.jpg') }}" alt="shop">
              </div>
            </div>

            <div class="item" data-id="bags">
              <div class="inner">
                <img src="{{ asset('assets2/shopitems/bag1.jpg') }}" alt="shop">
              </div>
            </div>

            <div class="item" data-idv="bags">
              <div class="inner">
                <img src="{{ asset('assets2/shopitems/bag2.jpg') }}" alt="shop">
              </div>
            </div>

            <div class="item" data-id="clothes">
              <div class="inner">
                <img src="{{ asset('assets2/shopitems/clothes1.jpg') }}" alt="shop">
              </div>
            </div>

            <div class="item" data-id="clothes">
              <div class="inner">
                <img src="{{ asset('assets2/shopitems/clothes2.jpg') }}" alt="shop">
              </div>
            </div>

            <div class="item" data-id="clothes">
              <div class="inner">
                <img src="{{ asset('assets2/shopitems/clothes3.jpg') }}" alt="shop">
              </div>
            </div>

            <div class="item" data-id="clothes">
              <div class="inner">
                <img src="{{ asset('assets2/shopitems/clothes4.jpg') }}" alt="shop">
              </div>
            </div>

            <div class="item" data-id="clothes">
              <div class="inner">
                <img src="{{ asset('assets2/shopitems/clothes5.jpg') }}" alt="shop">
              </div>
            </div>

            <div class="item" data-id="shoes">
              <div class="inner">
                <img src="{{ asset('assets2/shopitems/shoes1.png') }}" alt="shop">
              </div>
            </div>

            <div class="item" data-id="shoes">
              <div class="inner">
                <img src="{{ asset('assets2/shopitems/shoes2.jpg') }}" alt="shop">
              </div>
            </div>

            <div class="item" data-id="shoes">
              <div class="inner">
                <img src="{{ asset('assets2/shopitems/shoes3.jpeg') }}" alt="shop">
              </div>
            </div> -->

          </div>
        </div>
      </div>
    </section>

