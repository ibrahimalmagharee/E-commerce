<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BannerRequest;
use App\Models\Banner;
use App\Models\Category;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class BannerController extends Controller
{
    public function index(Request $request)
    {
        $data = [];

         $data['categories'] = Category::
            with('childrenCategories')
            ->get();
        $banners = Banner::get();
        if ($request->ajax()) {

            return DataTables::of($banners)
                ->addIndexColumn()
                ->addColumn('category_id', function ($row) {
                    return $row->category->name;
                })
                ->addColumn('photo', function ($row) {
                    return '<img src="' . $row->getPhoto($row->photo) . '" border="0" style="width: 100px; height: 90px;" class="img-rounded" align="center" />';

                })
                ->addColumn('action', function ($row) {
                    $url = route('edit.banner', $row->id);
                    $btn = '<td><a href="' . $url . '" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="تعديل" id="editBanner" class="primary box-shadow-3 mb-1 editBanner" style="width: 80px"><i class="la la-edit font-large-1"></i></a></td>';
                    $btn .= '&nbsp;&nbsp;';
                    $btn = $btn . ' <td><a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="حذف" class="danger box-shadow-3 mb-1 deleteBanner" style="width: 80px"><i class="la la-trash font-large-1"></i></a></td>';
                    return $btn;
                })
                ->rawColumns(['category_id', 'photo', 'action'])
                ->make(true);


        }
        return view('admin.banners.index', compact('banners', 'data'));
    }

    public function save(BannerRequest $request)
    {
        $filePath = "";
        if ($request->has('photo')) {
            $filePath = uploadImage('banners', $request->photo);
        }

        $banner = Banner::create([
            'category_id' => $request->category_id,
            'photo' => $filePath,
        ]);

        $banner->save();

        return response()->json([
            'status' => true,
            'msg' => 'تم اضافة اللافتة بنجاح'
        ]);
    }

    public function edit($id)
    {
        $data = [];

        $data['categories'] = Category::
        with('childrenCategories')
            ->get();
        $banner = Banner::find($id);
        $notification = array(
            'message' => 'هذا السلايدر غير موجود',
            'alert-type' => 'error'
        );

        if (!$banner)
            return redirect()->route('index.banners')->with($notification);

        return view('admin.banners.edit', compact('banner', 'data'));
    }

    public function update($id, BannerRequest $request)
    {
        $banner = Banner::find($id);
        $notification = array(
            'message' => 'هذا السلايدر غير موجود',
            'alert-type' => 'error'
        );

        if (!$banner)
            return redirect()->route('index.banners')->with($notification);

        $filePath = "";
        if ($request->has('photo')) {
            $filePath = uploadImage('banners', $request->photo);
            $image_path = public_path('assets/images/banners') . '/' . $banner->photo;
            unlink($image_path);
        }
        $banner->where('id', $id)->update([
            'category_id' => $request->category_id,
            'photo' => $filePath,
        ]);


        $notification = array(
            'message' => 'تم تحديث اللافتة بنجاح',
            'alert-type' => 'info'
        );


        return redirect()->route('index.banners')->with($notification);
    }

    public function destroy($id)
    {
        $banner = Banner::find($id);

        if (!$banner){
            return response()->json([
                'status' => true,
                'msg' => 'هذه اللافتة غير موجودة'
            ]);

        } else {
            $image_path = public_path('assets/images/banners') . '/' . $banner->photo;
            unlink($image_path);
            $banner->delete();
            return response()->json([
                'status' => true,
                'msg' => 'تم حذف اللافتة بنجاح'
            ]);
        }

    }
}
