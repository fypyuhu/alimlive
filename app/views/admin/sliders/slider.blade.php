<div class="col-md-6">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Carousel</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                   <?php $c = 0 ;?>
                    @foreach($sliders as $s)
                    <?php $c  = $c + 1?>
                 @if($c == 1)
                    <div class="item active right">
                    <img src="{{$s->pic}}" alt="First slide">

                    <div class="carousel-caption">
                      First Slide
                    </div>
                  </div>
                 @else   
                  <div class="item  ">
                    <img src="{{$s->pic}}" alt="Second slide">

                    <div class="carousel-caption">
                      {{$s->title}}
                    </div>
                  </div>
                 @endif
                 @endforeach
               
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                  <span class="fa fa-angle-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                  <span class="fa fa-angle-right"></span>
                </a>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>