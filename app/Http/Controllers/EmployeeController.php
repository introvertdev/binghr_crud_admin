<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Employee::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $search = array('":"', '{', '}','"','"');
        $replace = array('', '', '', '', '');
        $string = $request->permission;
        $output = str_replace($search, $replace, $string, $count);

        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required|string',
            'username' => 'required',
            'password' => 'required',
        ]);

        if(Employee::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' =>  $request->phone,
            'username'  =>  $request->username,
            'password'  =>  bcrypt($request->password),
            'permission' => $output,
            'role'  =>  $request->role,
            'employee_id'   =>  $request->employee_id
        ])){
            return response([
                'success'   => true,
                'message'   => 'Employee record created successfully',
            ]);
        }else{
            return response([
                'error'   => true,
                'message'   => 'Something went wrong, please reload and try again.'
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Employee::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $search = array('":"', '{', '}','"','"');
        $replace = array('', '', '', '', '');
        $string = $request->permission;
        $output = str_replace($search, $replace, $string, $count);
        $request->merge(["permission"=>$output]);

        $employee = Employee::find($id);
        if($employee->update(array_filter($request->all()))){
            return response([
                'success'   => true,
                'message'   => 'Employee record updated successfully',
                'data'  =>  $employee
            ]);
        }else{
            return response([
                'error'   => true,
                'message'   => 'Something went wrong, please reload and try again.'
            ]);
        }

        //return $employee;
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Employee::destroy($id)){
            return response([
                'success'   => true,
                'message'   => 'Employee record updated successfully',
            ]);
        }else{
            return response([
                'error'   => true,
                'message'   => 'Something went wrong, please reload and try again.'
            ]);
        }
    }

    public function all_employees(Request $request)
    {
        $totalFilteredRecord = $totalDataRecord = $draw_val = "";
        $columns_list = array(
            0 => 'id',
            2 => 'created_at',
            3 => 'role',
            4 => 'employee_id',
        );

        $totalDataRecord = Employee::count();

        $totalFilteredRecord = $totalDataRecord;

        $limit_val = $request->input('length');
        $start_val = $request->input('start');
        $order_val = $columns_list[$request->input('order.0.column')];
        $dir_val = 'DESC';

        if (empty($request->input('search.value'))) {
            $post_data = Employee::offset($start_val)
                ->limit($limit_val)
                ->orderBy($order_val, $dir_val)
                ->get();
        } else {
            $search_text = $request->input('search.value');

            $post_data =  Employee::where('first_name', 'LIKE', "%{$search_text}%")
                ->orWhere('last_name', 'LIKE', "%{$search_text}%")
                ->offset($start_val)
                ->limit($limit_val)
                ->orderBy($order_val, $dir_val)
                ->get();

            $totalFilteredRecord = Employee::where('last_name', 'LIKE', "%{$search_text}%")
                ->orWhere('last_name', 'LIKE', "%{$search_text}%")
                ->count();
        }

        $data_val = array();
        if (!empty($post_data)) {
            foreach ($post_data as $post_val) {
                $role = '';
                $role_text = '';
                if($post_val->role == 'super_admin'){
                    $role = '<span class="badge bg-danger text-white p-2 px-3">Super Admin</span>';
                    $role_text = 'CEO and Founder';
                }elseif($post_val->role == 'admin'){
                    $role = '<span class="badge bg-primary text-white p-2 px-3">Admin</span>';
                    $role_text = 'Team Lead';
                }elseif($post_val->role == 'hr_admin'){
                    $role = '<span class="badge bg-success text-white p-2 px-3">HR Admin</span>';
                    $role_text = 'HR';
                }elseif($post_val->role == 'app_designer'){
                    $role = '<span class="badge bg-light text-dark p-2 px-3">Employee</span>';
                    $role_text = 'App Designer';
                }else{
                    $role = '<span class="badge bg-light text-dark p-2 px-3">Employee</span>';
                    $role_text = 'Web Designer';
                }
                //$datashow =  route('posts_table.show', $post_val->id);
                //$dataedit =  route('posts_table.edit', $post_val->id);

                //$postnestedData['name'] = "<div class='class='row row-cols-2'><div class='col'><strong>".ucwords($post_val->last_name)." ".ucwords($post_val->first_name)."</strong></div><div class='col'>".$role."</div></div>";
                $postnestedData['name'] = ' <div class="row row-cols-2">
                <div class="col"><strong>'.ucwords($post_val->last_name).' '.ucwords($post_val->first_name).'</strong><br/><span class="muted">'.strtolower($post_val->email).'</span></div>
                <div class="col">'.$role.'</div>
              </div>';
                $postnestedData['created_at'] = date("jS M, Y",  STRTOTIME(date($post_val->created_at)));
                $postnestedData['role'] = $role_text;
                $postnestedData['options'] = "&emsp;
                <button class='btn btn-warning btn-circle btn-sm edit_button' data-id='{$post_val->id}'><i class='far fa-edit 2x'></i></button>&emsp;
                <button class='btn btn-danger btn-circle btn-sm delete_button' data-id='{$post_val->id}'><i class='fas fa-trash-alt  2x'></i></button>";
                $data_val[] = $postnestedData;
            }
        }
        $draw_val = $request->input('draw');
        $get_json_data = array(
            "draw"            => intval($draw_val),
            "recordsTotal"    => intval($totalDataRecord),
            "recordsFiltered" => intval($totalFilteredRecord),
            "data"            => $data_val
        );

        echo json_encode($get_json_data);
    }
}
