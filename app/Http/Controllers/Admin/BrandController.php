<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BrandRequest;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use DB;

class BrandController extends Controller
{
    public function index(Request $request)
    {
        $brands= Brand::get();

        if ($request->ajax()) {

            return DataTables::of($brands)
                ->addIndexColumn()
                ->addColumn('is_active', function ($row) {
                    return $row->is_active == 1 ? __('translate-admin/brand.active') : __('translate-admin/brand.not active');
                })
                ->addColumn('logo', function ($row) {
                    return '<img src="' . $row->logo . '" border="0" style="width: 100px; height: 90px;" class="img-rounded" align="center" />';

                })
                ->addColumn('action', function ($row) {
                    $url = route('edit.brand', $row->id);
                    $btn = '<td><a href="' . $url . '" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" id="editBrand" class="btn btn-outline-primary box-shadow-3 mb-1 editBrand" style="width: 80px"><i class="la la-edit"></i>'.__('translate-admin/brand.edit').'</a></td>';
                    $btn .= '&nbsp;&nbsp;';
                    $btn = $btn . ' <td><a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-outline-danger box-shadow-3 mb-1 deleteBrand" style="width: 80px"><i class="la la-remove"></i> '.__('translate-admin/brand.delete').'</a></td>';
                    return $btn;
                })
                ->rawColumns(['logo', 'action'])
                ->make(true);


        }
        return view('admin.brands.indexBrand', compact('brands'));
    }

    public function store(BrandRequest $request)
    {
        try {

            if (!$request->has('is_active')) {
                $request->request->add(['is_active' => 0]);

            } else {
                $request->request->add(['is_active' => 1]);

            }
            $filePath = "";
            if ($request->has('logo')) {
                $filePath = uploadImage('brands', $request->logo);
            }

            DB::beginTransaction();
            $brand = Brand::create([
                'logo' => $filePath,
                'is_active' => $request->is_active,
            ]);

            $brand->name = $request->name;
            $brand->save();

            DB::commit();

            return response()->json([
                'status' => true,
                'msg' => __('translate-admin/brand.success-add')
            ]);


        }catch (\Exception $ex){
            DB::rollBack();
            return response()->json([
                'status' => false,
                'msg' => __('translate-admin/brand.exception-add')
            ]);
        }
    }

    public function edit($id)
    {
        $brand = Brand::find($id);
        if (!$brand)
            return redirect()-> route('index.brand')->with('error',__('translate-admin/brand.error'));

        return view('admin.brands.edit', compact('brand'));
    }

    public function update($id, BrandRequest $request)
    {
        try {
            $brand = Brand::find($id);
            if (!$brand)
                return redirect()-> route('index.brand')->with('error',__('translate-admin/brand.error'));

            if (!$request->has('is_active')){
                $request->request->add(['is_active' => 0]);
            }else{
                $request->request->add(['is_active' => 1]);
            }

            $filePath = "";
            if ($request->has('logo')) {
                $filePath = uploadImage('brands', $request->logo);
            }

            DB::beginTransaction();

            if ($filePath == ''){
                $brand->where('id',$id)->update([
                   'is_active' => $request->is_active,
                ]);
                $brand->name = $request->name;
                $brand->save();
            }else{
                $brand->where('id',$id)->update([
                    'logo' => $filePath,
                    'is_active' => $request->is_active,
                ]);
                $brand->name = $request->name;
                $brand->save();
            }

            DB::commit();

            return redirect() -> route('index.brand') ->with('success', __('translate-admin/brand.success-update'));
        }catch (\Exception $exception){
            DB::rollBack();
            return redirect() -> route('edit.brand') ->with('error', __('translate-admin/brand.exception-update'));
        }
    }

    public function destroy($id)
    {

            $brand = Brand::find($id);
            if (!$brand){
                return response() -> json([
                    'status' => false,
                    'msg' =>__('translate-admin/brand.exception-delete'),
                ]);
            }

            else
            {
                 $image_path = public_path() . '/' . $brand->logo;
                 unlink($image_path);
                $brand->delete();
                return response() -> json([
                    'status' => true,
                    'msg' =>__('translate-admin/brand.success-delete'),
                ]);
            }



    }
}
