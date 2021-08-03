<?php

namespace App\Http\Controllers\Admin;

use App\Http\Enumeration\CategoryType;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use DB;

class CategoriesController extends Controller
{


    public function index(Request $request)
    {
        $categories = Category::parent()
            ->with('childrenCategories')
            ->orderBy('id','DESC')
            ->get();

        $categories_table = Category::with('_parent')
            ->with('childrenCategories')
            ->orderBy('id','DESC')
            ->get();

        if ($request->ajax()) {

            return DataTables::of($categories_table)
                ->addIndexColumn()

                ->addColumn('parent_id', function ($row) {
                    return $row->_parent->name ?? '--';
                })

                ->addColumn('is_active', function ($row) {
                    return $row->is_active == 1 ? __('translate-admin/category.active') : __('translate-admin/category.not active');
                })
                ->addColumn('photo', function ($row) {
                    return '<img src="' . $row->photo . '" border="0" style="width: 100px; height: 90px;" class="img-rounded" align="center" />';

                })
                ->addColumn('action', function ($row) {
                    $url = route('edit.category', $row->id);
                    $btn = '<td><a href="' . $url . '" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="تعديل" id="editBanner" class="primary box-shadow-3 mb-1 editMain_categories" style="width: 80px"><i class="la la-edit font-large-1"></i></a></td>';
                    $btn .= '&nbsp;&nbsp;';
                    $btn = $btn . ' <td><a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="حذف" class="danger box-shadow-3 mb-1 deleteMain_categories" style="width: 80px"><i class="la la-trash font-large-1"></i></a></td>';

                    return $btn;
                })
                ->rawColumns(['photo', 'action'])
                ->make(true);


        }


        return view('admin.categories.index', compact('categories'));
    }


    public function store(CategoryRequest $request)
    {
        try {
            DB::beginTransaction();

            if (!$request->has('is_active')) {
                $request->request->add(['is_active' => 0]);

            } else {
                $request->request->add(['is_active' => 1]);

            }
            $filePath = "";
            if ($request->has('photo')) {
                $filePath = uploadImage('categories', $request->photo);
            }
            // if user choose main category then we must remove parent_id

            if ($request -> type == CategoryType::mainCategory){  // type = 1 . mean add main category. >>>> if type = 2 . mean add sub category
                $request->request->add(['parent_id' => null]);
            }
            // if user choose sub category then we must add parent_id

           // $category = Category::create($request->except('token'));

                $category = Category::create([
                    'parent_id' => $request->parent_id,
                    'slug' => $request->slug,
                    'photo' => $filePath,
                    'is_active' => $request->is_active
                ]);

                $category->name = $request->name;
                $category->save();

                DB::commit();

                if ($category) {
                    return response()->json([
                        'status' => true,
                        'msg' => __('translate-admin/category.success-add'),
                    ]);
                }




        } catch (\Exception $ex) {
            DB::rollBack();
            return response()->json([
                'status' => false,
                'msg' => __('translate-admin/category.exception-add'),
            ]);
        }


    }

    public function edit($id)
    {
         $categories = Category::find($id);
        if (!$categories){
            $notification = array(
                'message' => __('translate-admin/category.error'),
                'alert-type' => 'error'
            );

            return redirect()->route('index.categories')->with($notification);
        }


         $mainCategories = Category::parent()
            ->with('childrenCategories')
            ->orderBy('id','DESC')
            ->get();

        return view('admin.categories.edit', compact('categories', 'mainCategories'));


    }


    public function update($id, CategoryRequest $request)
    {
        try {
            $category = Category::find($id);

            if (!$category){
                $notification = array(
                    'message' => __('translate-admin/category.error'),
                    'alert-type' => 'error'
                );

                return redirect()->route('index.categories')->with($notification);
            }
            if (!$request->has('is_active')) {
                $request->request->add(['is_active' => 0]);

            } else {
                $request->request->add(['is_active' => 1]);

            }

            $filePath = "";
            if ($request->has('photo')) {
                $filePath = uploadImage('categories', $request->photo);
            }

            DB::beginTransaction();
                if ($filePath != '') {
                    $category->where('id',$id)->update([
                        'slug' => $request->slug,
                        'photo' => $filePath,
                        'is_active' => $request->is_active,
                    ]);

                } else {
                    $category->where('id',$id)->update([
                        'slug' => $request->slug,
                        'is_active' => $request->is_active,
                    ]);

                }

                $category->name = $request->name;
                $category->save();

                DB::commit();

            $notification = array(
                'message' => __('translate-admin/category.success-update'),
                'alert-type' => 'info'
            );

                return redirect()->route('index.categories')->with($notification);

        } catch (\Exception $ex) {
            DB::rollBack();
            return redirect()->route('edit.category')->with('error', __('translate-admin/category.exception-update'));
        }


    }

    public function destroy($id)
    {
        try{
            $category = Category::find($id);
            if (!$category) {
                return response()->json([
                    'status' => false,
                    'msg' => __('translate-admin/category.error'),
                ]);

            }
            else{
                $category->delete();
                return response()->json([
                    'status' => true,
                    'msg' => __('translate-admin/category.success-delete'),
                ]);
            }

        }catch (\Exception $ex){
            return response()->json([
                'status' => false,
                'msg' => __('translate-admin/category.exception-delete'),
            ]);
        }




    }
}
