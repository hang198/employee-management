@extends('master')
@section('title','Danh sách nhân viên')
@section('content')
    <a href="{{ route('employees.create') }}" class="btn btn-success">Thêm mới</a>
    @if(Session::has('success'))
        <div class="alert alert-success">{{Session::get('success')}}</div>
    @endif
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
    {{ $employees->appends(request()->query()) }}
@endsection
