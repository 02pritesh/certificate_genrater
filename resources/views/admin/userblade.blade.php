@extends('admin.main.main')


@section('admin-content')

@if(Session::has('success'))
    <div class="alert alert-success" role="alert" id="success-message">
        {{session('success')}}
    </div>
@endif


<div class="card">
    <div class="card-header">
            <span><b>Users</b></span>
            <a href="{{url('home')}}"  class="float-right btn btn-success">Add </a>
        </div>
    
    <div class="card-body">
        <table class="table table-bordered  table-striped" id="myTable">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Qualification</th>
                    <th>Certificate No.</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody>
               @foreach($data as $emp)
               <tr>
                    <td>{{$emp['id']}}</td>
                    <td>{{$emp['name']}}</td>
                    <td>{{$emp['qualification']}}</td>
                    <td>{{$emp['certificate_no']}}</td>
                    <td>
                        <a href="{{url('certificates/'.$emp->id)}}" class="btn btn-info">View</a>
                        <a href="{{url('userlist/edit/'.$emp->id)}}" class="btn btn-success">Edit</a>
                        <a href="{{url('userlist/delete/'.$emp->id)}}" class="btn btn-danger">Delete</a>
                    </td>
               </tr>

               @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
    setTimeout(() => {
        $('#success-message').fadeOut('fast');
    }, 2000);
</script>
@endsection