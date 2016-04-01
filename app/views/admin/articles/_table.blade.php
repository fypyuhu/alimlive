<div class="col-xs-12">
       
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Article Records</h3>
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
                @foreach($articles as $a)
                <tr class="even" role="row">
                  <td >{{$a->title}}</td>
                
                 
                  <td>    
                      
                      @include('partials.button.show',['table'=>$a,'route'=>'article'])

                      @include('partials.button.edit',['table'=>$a,'route'=>'article'])
        
                      @include('partials.button.delete',['table'=>$a,'route'=>'article'])
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
