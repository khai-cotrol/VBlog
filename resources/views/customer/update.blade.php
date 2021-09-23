@extends('layout.master')
@section('title', 'Cập nhật thông tin người dùng')
@section('content')
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Update Information</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <form action="{{route('user.update',$user->id)}}"  method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="inputName">Username</label>
                    <input type="text" value="{{$user->name}}" name="name" id="inputName">
                </div>
                <div class="form-group">
                    <label for="inputClientCompany">Email</label>
                    <input type="email" value="{{$user->email}}" id="inputClientCompany" name="email">
                </div>
                <div class="form-group">
                    <label for="inputDescription">Number phone</label>
                    <input type="number" value="{{$user->phone}}" name="phone" id="inputDescription">
                </div>
                <div class="form-group">
                    <label for="inputDescription">Address</label>
                    <input type="text" value="{{$user->address}}" name="address" id="inputDescription">
                </div>
                <div class="form-group">
                    <label for="inputDescription">Image</label>
                    <input type="file" value="" name="image" id="image"
                           class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Accept</button>
                <a href="{{route('post.list')}}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
    </div>
@endsection
