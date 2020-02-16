<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Group;
use App\Http\Requests\EmployeeRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employee.list', compact('employees'));
    }

    public function create()
    {
        $group = Group::all();
        return view('employee.create', compact('group'));
    }

    public function store(EmployeeRequest $request)
    {
        $employee = new Employee();
        $employee->id = $request->id;
        $employee->group_id = $request->group_id;
        $employee->name = $request->name;
        $employee->dob = $request->dob;
        $employee->gender = $request->gender;
        $employee->phone = $request->phone;
        $employee->codeID = $request->codeID;
        $employee->email = $request->email;
        $employee->address = $request->address;
        $employee->save();
        Session::flash('success', 'Thêm thành công');
        return redirect()->route('employees.index');
    }

    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        $group = Group::all();
        return view('employee.edit', compact('employee', 'group'));
    }

    public function update(EmployeeRequest $request, $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->id = $request->id;
        $employee->group_id = $request->group_id;
        $employee->name = $request->name;
        $employee->dob = $request->dob;
        $employee->gender = $request->gender;
        $employee->phone = $request->phone;
        $employee->codeID = $request->codeID;
        $employee->email = $request->email;
        $employee->address = $request->address;
        $employee->save();
        Session::flash('success', 'Cập nhật thành công');
        return redirect()->route('employees.index');
    }

    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();
        Session::flash('success', 'Đã xóa thành công');
        return redirect()->route('employees.index');
    }

    public function getSearch(Request $request)
    {
        $search = $request->get('search');
        if (!$search) {
            return redirect()->back();
        }
        $employees = Employee::where('name', 'LIKE', '%' . $search . '%')->paginate(3);
        return view('employee.getSearch', compact('employees'));
    }

}
