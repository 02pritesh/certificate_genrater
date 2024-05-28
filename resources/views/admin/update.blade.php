@extends('admin.main.main')

@section('admin-content')

@if (Session::has('success'))
<div id="success-message" class="alert alert-success" role="alert">
    {{ Session::get('success') }}
</div>
@endif

@if (Session::has('fail'))
<div id="error-message" class="alert alert-danger" role="alert">
    {{ Session::get('fail') }}
</div>
@endif

<section class="content">
    <h3 class="text-center">Update Data</h3>
    <div class="container-fluid">
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title"></h3>
                <div class="card-tools">
                </div>
            </div>
            <form action="{{ url('user_edit') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" class="form-control" name="id" value="{{$user->id}}">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Official Qualification</label>
                                <input type="text" class="form-control" name="qualification" value="{{$user->qualification}}">
                                @error('qualification')
<div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Gemstone Species</label>
                                <input type="text" class="form-control" name="gemstone" value="{{$user->gemstone}}">
                                @error('gemstone')
<div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Official Name</label>
                                <input type="text" class="form-control" name="name" value="{{$user->name}}">
                                @error('name')
<div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Stone Weight</label>
                                <input type="text" class="form-control" name="weight" value="{{$user->weight}}">
                                @error('weight')
<div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Cut</label>
                                <input type="text" class="form-control" name="cut" value="{{$user->cut}}">
                                @error('cut')
<div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Dimensions</label>
                                <input type="text" class="form-control" name="dimension" value="{{$user->dimension}}">
                                @error('dimension')
<div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Clarity</label>
                                <input type="text" class="form-control" name="clarity" value="{{$user->clarity}}">
                                @error('clarity')
<div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Shape</label>
                                <input type="text" class="form-control" name="shape" value="{{$user->shape}}">
                                @error('shape')
<div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Colour</label>
                                <input type="text" class="form-control" name="colour" value="{{$user->colour}}">
                                @error('colour')
<div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Images</label>
                                <input type="file" class="form-control" name="file" value="{{$user->file}}">
                                @error('file')
<div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <button style="background-color: #0d6efd ; border:none" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</section>

<script>

    setTimeout(function() {
        $('#success-message').fadeOut('fast')
    }, 2000);

    setTimeout(function() {
        $('#error-message').fadeOut('fast')
    },2000);
</script>

@endsection