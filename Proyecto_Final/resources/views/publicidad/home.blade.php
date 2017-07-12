
        <div class="shell text-center">
          <div class="range range-sm-center range-50">
            <div class="cell-sm-10">
              <h1>{{$publicidad->nombre}}</h1>
              <p>{{$publicidad->aboutme}}
              </p>
            </div>
            <div class="cell-sm-4">
              <!--Box Product bordered-->
             
            </div>
            <div class="cell-sm-4">
              <!--Box Product bordered-->
              <div class="box-product-bordered">
                <div class="box-product__img"><img src="images/home-icon-2-95x95.png" alt="" width="95" height="95">
                </div>
                <h3 class="box-product__title"><a href="#">Mission</a></h3>
                <p class="box-product__cite">{{$publicidad->mision}}</p>
              </div>
            </div>
            <div class="cell-sm-4">
              <!--Box Product bordered-->
              <div class="box-product-bordered">
                <div class="box-product__img"><img src="images/home-icon-3-95x95.png" alt="" width="95" height="95">
                </div>
                <h3 class="box-product__title"><a href="#">Vision</a></h3>
                <p class="box-product__cite">{{$publicidad->vision}}</p>
              </div>
            </div>
          </div>
        </div>