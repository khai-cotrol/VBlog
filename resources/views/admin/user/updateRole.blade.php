
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
        <form action="{{route('user.updateRole',$user->id)}}"  method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <select style="width: 700px;"  name="role" class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected>Phân Quyền </option>
                    <option name="user" value="user">User</option>
                    <option name="admin" value="admin">Admin</option>
                </select>
            </div>
            <button type="submit"style="width: 1163px" class="btn btn-success">Accept</button>
            <br>
            <a href="{{route('user.list')}}" style="width: 1163px" class="btn btn-secondary">Cancel</a>
        </form>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
    </div>
@endsection
