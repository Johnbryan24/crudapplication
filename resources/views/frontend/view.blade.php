@extends('../layout')
@section('content')
 
<div class="card">
  <div class="card-header">View</div>
  <div class="card-body">
      
        {!! csrf_field() !!}
        @method("PATCH")

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>email</th>
                                        <th>created date</th>
                                        <th>updated date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $users->id }}</td>
                                        <td>{{ $users->name }}</td>
                                        <td>{{ $users->email}}</td>
                                        <td>{{ $users->created_at}}</td>
                                        <td>{{ $users->updated_at}}</td>
                                    </tr>
                               
                                </tbody>
                            </table>
                        </div>
   
  </div>
</div>
 
@stop

