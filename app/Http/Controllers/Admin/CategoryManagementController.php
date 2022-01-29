<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Redirect;
use Validator;

class CategoryManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array();
        return view('admin.category.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::find($id)->delete();
        return redirect('/admin/category-management')->with([
            'status' => 'success',
            'message' => 'Advertising Delete Successfully!'
        ]);
    }
    public function companyCategory(Request $request)
    {
        $data = array();
        return view('admin.category.createCompanyCategory', $data);
        return "Create Company category";
    }
    public function saveComapanyCategary(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|unique:categories',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        try {
            $userData = Category::create([
                'name'          => $request->has('name') ? $request->name : '',
                'parent_id'     => '0',
                'status'        => '1',
                'c_type'        => 'Business',

            ]);
            return redirect('/admin/category-management')->with(['status' => 'success', 'message' => 'New User added Successfully!']);
        } catch (\Exception $e) {
            return back()->with(['status' => 'danger', 'message' => $e->getMessage()]);
            return back()->with(['status' => 'danger', 'message' => 'Some thing went wrong! Please try again later.']);
        }
    }


    public function addSubCategory()
    {
        $data = array();
        return view('admin.category.createCompanySubCategory', $data);
        return "Create sub Company category";
    }
    public function saveSubCategary(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'parent' => 'required',
            'name' => 'required|string|max:255|unique:categories',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        try {
            $userData = Category::create([
                'name'          => $request->has('name') ? $request->name : '',
                'parent_id'     => $request->has('parent') ? $request->parent : '',
                'status'        => '1',
                'c_type'        => 'Business',
            ]);
            return redirect('/admin/category-management')->with(['status' => 'success', 'message' => 'New Sub Categary added Successfully!']);
        } catch (\Exception $e) {
            return back()->with(['status' => 'danger', 'message' => $e->getMessage()]);
            return back()->with(['status' => 'danger', 'message' => 'Some thing went wrong! Please try again later.']);
        }
    }

    public function addUserCategory()
    {
        $data = array();
        return view('admin.category.createUserCategory', $data);
        // return "Create sub Company category";
    }
    public function saveUserCategary(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|unique:categories',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        try {
            $userData = Category::create([
                'name'          => $request->has('name') ? $request->name : '',
                'parent_id'     => '0',
                'status'        => '1',
                'c_type'        => 'User',
            ]);
            return redirect('/admin/category-management')->with(['status' => 'success', 'message' => 'New Sub Categary added Successfully!']);
        } catch (\Exception $e) {
            return back()->with(['status' => 'danger', 'message' => $e->getMessage()]);
            return back()->with(['status' => 'danger', 'message' => 'Some thing went wrong! Please try again later.']);
        }
    }
}
