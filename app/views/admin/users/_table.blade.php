<div class="col-xs-12">
       
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">User Records</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="dataTables_wrapper form-inline dt-bootstrap" id="example1_wrapper">
                  
                  
   
                      
                      <div class="row"><div class="col-sm-12">
                              
                <table  class="table table-bordered table-striped dataTable">
                <thead>
                <tr role="row">
                    <th >name</th><th >username</th><th >email</th><th >Actions</th></tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                <tr class="even" role="row">
                  <td class="sorting_1">{{$user->name}}</td>
                  <td>{{$user->username}}</td>
                  <td>{{$user->email}}</td>
                 
                  <td>    
                      
                      @include('partials.button.edit',['table'=>$user,'route'=>'user'])
        
                      @include('partials.button.delete',['table'=>$user,'route'=>'user'])
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
