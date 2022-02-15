<?php

namespace App\Http\Controllers\Merchant;

use App\Models\MenuModel;
use App\Models\MenuCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;
use Redirect;
use Validator;
use Auth;
use DB;

class MenuManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array();
        return view('merchent.menu.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array();
        return view('merchent.menu.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'dise_name'             => 'required',
            'dise_description'      => 'required',
            'disk_category_id'      => 'required',
            'disk_price'            => 'required',
            'disk_discount'         => 'required',
            'disk_valid'            => 'required',
            'disk_image'            => 'required',
            //'disk_image'            => 'required|image|mimes:jpeg,bmp,svg,jpg,png',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        try {
            //  dd($request->all());
            $diseData = MenuModel::create([
                'merchent_id' => Auth::user()->id,
                'dise_name'  => $request->has('dise_name') ? $request->dise_name : '',
                'dise_description'  => $request->has('dise_description') ? $request->dise_description : '',
                'disk_category_id'  => $request->has('disk_category_id') ? $request->disk_category_id : '',
                'disk_price'  => $request->has('disk_price') ? $request->disk_price : '',
                //'disk_discount'  => $request->has('disk_discount') ? $request->disk_discount : '',
                'disk_valid'  => $request->has('disk_valid') ? $request->disk_valid : '',
            ]);
            if ($request->hasFile('disk_image')) {
                $productData = MenuModel::find($diseData->id);
                $file = $request->file('disk_image');
                $filename = 'disk_image-' . time() . '.' . $file->getClientOriginalExtension();
                $file->move('public/uploads/', $filename);
                $productData->disk_image = $filename;
                $productData->save();
            }

            return redirect('/merchant/menu-management')
                ->with([
                    'status' => 'success',
                    'message' => 'Dise created Successfully!'
                ]);
        } catch (\Exception $e) {
            return back()
                ->with([
                    'status' => 'danger',
                    'message' => $e->getMessage()
                ]);
            return back()
                ->with([
                    'status' => 'danger',
                    'message' => 'Some thing went wrong! Please try again later.'
                ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MenuModel  $menuModel
     * @return \Illuminate\Http\Response
     */
    public function show(MenuModel $menuModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MenuModel  $menuModel
     * @return \Illuminate\Http\Response
     */
    public function edit(MenuModel $menuModel, $id)
    {

        $dise =  MenuModel::find($id);
        $data = array();
        $data['dise'] = $dise;
        return view('merchent.menu.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MenuModel  $menuModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MenuModel $menuModel, $id)
    {
        // dd($menuModel);
        $validator = Validator::make($request->all(), [
            'dise_name'             => 'required',
            'dise_description'      => 'required',
            'disk_category_id'      => 'required',
            'disk_price'            => 'required',
            //'disk_discount'         => 'required',
            'disk_valid'            => 'required',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        try {
            $menuModel = MenuModel::find($id);
            if ($request->hasFile('disk_image')) {
                $file = $request->file('disk_image');
                $disk_image = 'disk_image-' . time() . '.' . $file->getClientOriginalExtension();
                $file->move('public/uploads/', $disk_image);
            } else {
                $disk_image = $menuModel->disk_image;
            }
            $updateData = array(
                'dise_name'  => $request->has('dise_name') ? $request->dise_name : $menuModel->dise_name,
                'dise_description'  => $request->has('dise_description') ? $request->dise_description : $menuModel->dise_description,
                'disk_category_id'  => $request->has('disk_category_id') ? $request->disk_category_id : $menuModel->disk_category_id,
                'disk_price'  => $request->has('disk_price') ? $request->disk_price : '',
                'disk_discount'  => $request->has('disk_discount') ? $request->disk_discount : '',
                'disk_valid'  => $request->has('disk_valid') ? $request->disk_valid : $menuModel->disk_valid,
                'disk_image' => $disk_image
            );
            $menuModel->update($updateData);

            return redirect('/merchant/menu-management')
                ->with([
                    'status' => 'success',
                    'message' => 'Dise updated Successfully!'
                ]);
        } catch (\Exception $e) {
            return back()
                ->with([
                    'status' => 'danger',
                    'message' => $e->getMessage()
                ]);
            return back()
                ->with([
                    'status' => 'danger',
                    'message' => 'Some thing went wrong! Please try again later.'
                ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MenuModel  $menuModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(MenuModel $menuModel)
    {
        //
    }
}
