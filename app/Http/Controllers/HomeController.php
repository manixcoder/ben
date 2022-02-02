<?php

namespace App\Http\Controllers;

use App\Models\LicenseClassModel;
use Auth;
use App\User;
use DB;
use Illuminate\Http\Request;
use Redirect;
use Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     * @return void
     */
    public function __construct()
    {
        // $this->middleware(['auth']);
    }
    /**
     * Show the application dashboard.
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return $this->checkUserRole();
        return view('index');
        // return view('welcome');
    }

    public function sendOTPOnEmail(Request $request)
    {
        dd($request->email);
        dd($request->all());
    }

    /**
     * Show the application dashboard.
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function checkUserRole()
    {
        $this->middleware('auth');
        if (Auth::check()) {
            //Get Login User role here
            $role = Auth::user()->roles->first();
            //dd($role);
            if (!empty($role)) {
                return redirect('/' . $role->name);
            }
        }
        Auth::logout();
        return redirect('/login')->with(['status' => 'danger', 'message' => 'you are not authorized to login here !']);
    }
    public function getSubCategory(Request $request, $id)
    {
        try {
            $list = DB::table('categories')
                ->where('parent_id', '=', $id)
                ->where('c_type', '=', '1')
                ->get();
            //dd($list);
            if ($list) {
                $data['status'] = 'success';
            } else {
                $data['status'] = 'error';
            }
            $data['list'] = $list;
            return response()->json($data);
        } catch (\Exception $e) {
            return response()->json(array('status' => 'error', 'message' => $e->getMessage()));
        }
    }
}
