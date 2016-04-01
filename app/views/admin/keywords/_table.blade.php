<div class="col-xs-12">
       
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Keyword Records</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="dataTables_wrapper form-inline dt-bootstrap" id="example1_wrapper">
                  
                  
   
                      
                      <div class="row"><div class="col-sm-12">
                              
                <table  class="table table-bordered table-striped dataTable">
                <thead>
                <tr role="row">
                    <th >title</th><th >Actions</th></tr>
                </thead>
                <tbody>
                @foreach($keywords as $k)
                <tr class="even" role="row">
                  <td >{{$k->title}}</td>
                
                 
                  <td>    
                      
        
                      @include('partials.button.edit',['table'=>$k,'route'=>'keyword'])
        
                      @include('partials.button.delete',['table'=>$k,'route'=>'keyword'])
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
