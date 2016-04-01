{{Form::model($table, ['route' => ["$route".".destroy", $table->id] , 'style'=>" display: inline-block;" ])}}
<input type="hidden" name="_method" value="DELETE">

<button type="submit" class="btn  btn-danger"><i class="fa fa-fw fa-trash"></i>Delete</button>
{{Form::close()}}