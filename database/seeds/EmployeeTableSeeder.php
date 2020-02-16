<?php

use Illuminate\Database\Seeder;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employee = new \App\Employee();
        $employee->id = '1';
        $employee->group_id = '2';
        $employee->name = 'Nguyễn Vũ Tiến';
        $employee->dob = '17-11-1998';
        $employee->gender = 'Nam';
        $employee->phone  = '01254544267';
        $employee->codeID = '1253633';
        $employee->email = 'tien@gmail.com';
        $employee->address = 'Hà Nội';
        $employee->save();

        $employee = new \App\Employee();
        $employee->id = '2';
        $employee->group_id = '1';
        $employee->name = 'Nguyễn Phương Anh';
        $employee->dob = '11-08-2000';
        $employee->gender = 'Nữ';
        $employee->phone  = '0989146798';
        $employee->codeID = '125335443';
        $employee->email = 'phuonganh@gmail.com';
        $employee->address = 'Nam Định';
        $employee->save();

        $employee = new \App\Employee();
        $employee->id = '3';
        $employee->group_id = '5';
        $employee->name = 'Lê Văn Định';
        $employee->dob = '11-08-2000';
        $employee->gender = 'Nam';
        $employee->phone  = '0124419317';
        $employee->codeID = '12533333';
        $employee->email = 'dinh@gmail.com';
        $employee->address = 'Hải Phòng';
        $employee->save();

        $employee = new \App\Employee();
        $employee->id = '4';
        $employee->group_id = '3';
        $employee->name = 'Bùi Thị Nhung';
        $employee->dob = '16-08-1994';
        $employee->gender = 'Nữ';
        $employee->phone  = '0929178345';
        $employee->codeID = '127492402';
        $employee->email = 'nhung@gmail.com';
        $employee->address = 'Đà Nẵng';
        $employee->save();

        $employee = new \App\Employee();
        $employee->id = '5';
        $employee->group_id = '4';
        $employee->name = 'Nguyễn Đức Anh';
        $employee->dob = '16-11-1994';
        $employee->gender = 'Nam';
        $employee->phone  = '0929172495';
        $employee->codeID = '127492936';
        $employee->email = 'ducanh@gmail.com';
        $employee->address = 'Hà Nội';
        $employee->save();
    }
}
