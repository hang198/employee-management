<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'group_id' => 'required',
            'name' => 'required|max:30|min:2',
            'id'=> 'required',
            'dob' => 'required|date',
            'phone' => 'required|numeric',
            'codeID' => 'required|numeric',
            'email' => 'required|email',
            'address' => 'required|max:255'
        ];
    }
    public function messages()
    {
        return [
          'group_id' => 'Nhóm không được để trống',
          'name.required' => 'Tên không được để trống',
          'name.max' => 'Tên chỉ có tối đa 30 kí tự',
          'name.min' => 'Tên phải có ít nhất 2 kí tự trở lên',
          'dob.required' => 'Ngày sinh không được để trống',
            'id.required' => 'Mã nhân viên không được để trống',
          'dob.date' => 'Ngày sinh chưa đúng định dạng ngày tháng',
          'phone.required' => 'Số điện thoại không được để trống',
          'phone.numeric'=> 'Số điện thoại chưa đúng định dạng',
          'codeID.required' => 'Số chứng minh nhân dân không được để trống',
          'codeID.numeric' => 'Số chứng minh nhân dân chưa đúng định dạng số',
          'email.required'  => 'Email không được để trống',
          'email.email' => 'Email chưa đúng định dạng',
          'address.required' => 'Địa chỉ không được để trống',
          'address.max' => 'Địa chỉ có tối đa 255 kí tự'
        ];
    }
}
