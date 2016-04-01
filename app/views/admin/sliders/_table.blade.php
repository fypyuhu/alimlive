<div class="col-xs-12">
       
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Slider Records</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="dataTables_wrapper form-inline dt-bootstrap" id="example1_wrapper">
                  
                  
   
                      
                      <div class="row"><div class="col-sm-12">
                              
                <table  class="table table-bordered table-striped dataTable">
                <thead>
                <tr role="row">
                    <th>order</th> <th >pic</th><th >title</th><th >Actions</th></tr>
                </thead>
                <tbody>
                @foreach($sliders as $s)
                <tr class="even" role="row">
                    <td >{{$s->orderNo}}</td>
                   
                    <td ><img style="width:100px;height: 100px;" src='{{$s->pic}}' /></td>
                    <td >{{$s->title}}</td>
                   
                
                 
                  <td>    
                      
                   
                      @include('partials.button.edit',['table'=>$s,'route'=>'slider'])
        
                      @include('partials.button.delete',['table'=>$s,'route'=>'slider'])
                  </td>
                </tr>
                 @endforeach
                </tbody>
              
              </table></div></div>
                  
                  
                    </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
