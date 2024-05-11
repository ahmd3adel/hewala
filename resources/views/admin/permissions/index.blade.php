@extends('admin.app')

@section('breadcramp')
    <div class="col-sm-6">
        <h1 class="m-0 text-dark">الصلاحيات</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">الرئيسية</a></li>
            <li class="breadcrumb-item active">الصلاحيات</li>
        </ol>
    </div><!-- /.col -->
@endsection
@section('content')
<div class="container mt-5">

    <!-- Navigation Links -->


    <!-- Permissions Table -->
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                <!-- Permission rows will be dynamically populated here -->
                <tr>
                    <th scope="row">1</th>
                    <td>Permission Name</td>
                    <td>Permission Description</td>
                    <td>
                        <button class="btn btn-primary btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Button to Add New Permission -->
    <div class="row">
        <div class="col-md-4 offset-md-4 text-center">
            <button class="btn btn-success" data-toggle="modal" data-target="#createPermissionModal">Add New Permission</button>
        </div>
    </div>

</div>

<!-- Create Permission Modal -->
<div class="modal fade" id="createPermissionModal" tabindex="-1" role="dialog" aria-labelledby="createPermissionModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createPermissionModalLabel">Create New Permission</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="permissionName">Permission Name</label>
                        <input type="text" class="form-control" id="permissionName" placeholder="Enter permission name">
                    </div>
                    <div class="form-group">
                        <label for="permissionDescription">Permission Description</label>
                        <textarea class="form-control" id="permissionDescription" rows="3" placeholder="Enter permission description"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>




@endsection
