@extends('../layout')
@section('content')
 
<div class="card">
  <div class="card-header">Add New</div>
  <div class="card-body">
      
      <form action="{{ url('store') }}" method="get">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        
        <label>Email</label></br>
        <input type="email" name="email" id="email" class="form-control"></br>

        <label>password</label></br>
        <input type="password" name="password" id="password" class="form-control"></br>

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop