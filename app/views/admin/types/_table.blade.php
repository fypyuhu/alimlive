<div class="col-xs-12">
       
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Type Records</h3>
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
                @foreach($types as $t)
                <tr class="even" role="row">
                  <td >{{$t->title}}</td>
                
                 
                  <td>    
                      
        
                      @include('partials.button.edit',['table'=>$t,'route'=>'type'])
        
                      @include('partials.button.delete',['table'=>$t,'route'=>'type'])
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
