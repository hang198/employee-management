@extends('master')
@section('title','Danh sách nhân viên')
@section('content')
    <div class="container">
        <div class="row">
            <div class="form-group col-md-8">
                <a href="{{ route('employees.create') }}" class="btn btn-success">Thêm mới</a>
                @if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif
            </div>
            <div class="form-group col-md-4">
                <form class="form-inline my-2 my-lg-0" action="{{route('employees.getSearch')}}" method="get">
                    <input class="form-control mr-sm-2" name="search" type="search" placeholder="Nhập nội dung tìm kiếm"
                           aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
                </form>
            </div>
        </div>
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">Mã nhân viên</th>
                <th scope="col">Nhóm nhân viên</th>
                <th scope="col">Họ tên</th>
                <th scope="col">Giới tính</th>
                <th scope="col">Số điện thoại</th>
                <th scope="col" colspan="2">Chức năng</th>
            </tr>
            </thead>
            @if(count($employees) === 0)
                <tr>
                    <td colspan="7">Không có dữ liệu</td>
                </tr>
            @else
                @foreach($employees as $key=>$employee)
                    <tbody>
                    <tr>
                        <th scope="row">{{++$key}}</th>
                        <td>{{ $employee->group['name'] }}</td>
                        <td>{{ $employee->name }}</td>
                        <td>{{ $employee->gender }}</td>
                        <td>{{ $employee->phone }}</td>
                        <td><a href="{{ route('employees.edit',$employee->id) }}" class="btn btn-primary">Sửa</a>
                            <a href="{{ route('employees.destroy',$employee->id) }}" class="btn btn-danger"
                               onclick="return confirm('Bạn chắc chắn muốn xóa?')">Xóa</a></td>
                    </tr>
                    </tbody>
                @endforeach
            @endif
        </table>
    </div>
@endsection
