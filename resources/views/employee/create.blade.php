@extends('master')
@section('title','Thêm mới nhân viên')
@section('content')
    <div class="container">

        <form method="post" action="{{ route('employees.store') }}">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Nhóm</label>
                    <select name="group_id" class="form-control">
                        @foreach($group as $gr)
                            <option value="{{$gr->id}}">{{$gr->name}}</option>
                        @endforeach
                    </select>
                    @if($errors->has('group_id'))
                        <div class="alert alert-danger">
                            {{$errors->first('group_id')}}
                        </div>
                    @endif
                </div>
                <div class="form-group col-md-6">
                    <label>Họ tên</label>
                    <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="Name">
                    @if($errors->has('name'))
                        <div class="alert alert-danger">
                            {{$errors->first('name')}}
                        </div>
                    @endif
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Mã nhân viên</label>
                    <input type="number" value="{{old('id')}}" name="id" class="form-control">
                    @if($errors->has('id'))
                        <div class="alert alert-danger">
                            {{$errors->first('id')}}
                        </div>
                    @endif
                </div>
                <div class="form-group col-md-6">
                    <label>Ngày sinh</label>
                    <input type="date" name="dob" value="{{old('dob')}}" class="form-control">
                    @if($errors->has('dob'))
                        <div class="alert alert-danger">
                            {{$errors->first('dob')}}
                        </div>
                    @endif
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Số điện thoại</label>
                    <input type="number" name="phone" value="{{old('phone')}}" class="form-control"
                           placeholder="Nhập vào số điện thoại">
                    @if($errors->has('phone'))
                        <div class="alert alert-danger">
                            {{$errors->first('phone')}}
                        </div>
                    @endif
                </div>
                <div class="form-group col-md-6">
                    <label>Số CMND</label>
                    <input type="number" name="codeID" value="{{old('codeID')}}" class="form-control"
                           placeholder="Nhập vào số chứng minh nhân dân">
                    @if($errors->has('codeID'))
                        <div class="alert alert-danger">
                            {{$errors->first('codeID')}}
                        </div>
                    @endif
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Email</label>
                    <input type="email" name="email" value="{{old('email')}}" class="form-control"
                           placeholder="example@gmail.com">
                    @if($errors->has('email'))
                        <div class="alert alert-danger">
                            {{$errors->first('email')}}
                        </div>
                    @endif
                </div>
                <div class="form-group col-md-6">
                    <label>Địa chỉ</label>
                    <input type="text" name="address" value="{{old('address')}}" class="form-control"
                           placeholder="Nhập vào địa chỉ">
                    @if($errors->has('address'))
                        <div class="alert alert-danger">
                            {{$errors->first('address')}}
                        </div>
                    @endif
                </div>
            </div>
            <label>Giới tính</label><br>
            <div class="form-row">
                <div class="form-group col-md-2">
                    <input type="radio" name="gender" value="Nam" checked>Nam</input>
                </div>
                @if($errors->has('gender'))
                    <div class="alert alert-danger">
                        {{$errors->first('gender')}}
                    </div>
                @endif
                <div class="form-group col-md-2">
                    <input type="radio" name="gender" value="Nữ">Nữ</input>
                </div>
            </div>
            @if($errors->has('gender'))
                <div class="alert alert-danger">
                    {{$errors->first('gender')}}
                </div>
            @endif
            <button type="submit" class="btn btn-primary">Thêm mới</button>
            <a class="btn btn-danger" href="{{route('employees.index')}}">Quay lại</a>

        </form>
    </div>
@endsection
