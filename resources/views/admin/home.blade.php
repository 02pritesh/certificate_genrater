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
    <h3 class="text-center">Dashboard</h3>
    <div class="container-fluid">
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Generate Certificate</h3>
                <div class="card-tools">
                </div>
            </div>
            <form action="{{ url('post_data') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Official Qualification</label>
                                <input type="text" class="form-control" name="qualification">
                                @error('qualification')
<div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Gemstone Species</label>
                                <input type="text" class="form-control" name="gemstone">
                                @error('gemstone')
<div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Official Name</label>
                                <input type="text" class="form-control" name="name">
                                @error('name')
<div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Stone Weight</label>
                                <input type="text" class="form-control" name="weight">
                                @error('weight')
<div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Cut</label>
                                <input type="text" class="form-control" name="cut">
                                @error('cut')
<div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Dimensions</label>
                                <input type="text" class="form-control" name="dimension">
                                @error('dimension')
<div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Clarity</label>
                                <input type="text" class="form-control" name="clarity">
                                @error('clarity')
<div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Shape</label>
                                <input type="text" class="form-control" name="shape">
                                @error('shape')
<div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Colour</label>
                                <input type="text" class="form-control" name="colour">
                                @error('colour')
<div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Images</label>
                                <input type="file" class="form-control" name="file">
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