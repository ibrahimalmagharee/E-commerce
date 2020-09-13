<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\MainCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\TestFixture\C;
use Yajra\DataTables\Facades\DataTables;
use DB;

class CategoriesController extends Controller
{
    public function indexMain(Request $request)
    {
        $main_categories = Category::parent()->get();

        if ($request->ajax()) {

            return DataTables::of($main_categories)
                ->addIndexColumn()
                ->addColumn('is_active', function ($row) {
                    return $row->is_active == 1 ? __('translate-admin/category.active') : __('translate-admin/category.not active');
                })
                ->addColumn('photo', function ($row) {
                    return '<img src="' . $row->photo . '" border="0" style="width: 100px; height: 90px;" class="img-rounded" align="center" />';

                })
                ->addColumn('action', function ($row) {
                    $url = route('edit.category', $row->id);
                    $btn = '<td><a href="' . $url . '" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="btn btn-outline-primary box-shadow-3 mb-1 editMain_categories" style="width: 80px"><i class="la la-edit"></i>'.__('translate-admin/category.edit').'</a></td>';
                    $btn .= '&nbsp;&nbsp;';
                    $btn = $btn . ' <td><a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-outline-danger box-shadow-3 mb-1 deleteMain_categories" style="width: 80px"><i class="la la-remove"></i> '.__('translate-admin/category.delete').'</a></td>';
                    return $btn;
                })
                ->rawColumns(['photo', 'action'])
                ->make(true);


        }


        return view('admin.categories.indexMain', compact('main_categories'));
    }

    public function indexSub(Request $request)
    {
        $main_categories = Category::parent()->get();
        $sub_categories = Category::child()->get();

        if ($request->ajax()) {

            return DataTables::of($sub_categories)
                ->addIndexColumn()

                ->addColumn('parent_id', function ($row) {
                    return $row->name;
                })

                ->addColumn('is_active', function ($row) {
                    return $row->is_active == 1 ? __('translate-admin/category.active') : __('translate-admin/category.not active');
                })

                ->addColumn('photo', function ($row) {
                    return '<img src="' . $row->photo . '" border="0" style="width: 100px; height: 90px;" class="img-rounded" align="center" />';

                })
                ->addColumn('action', function ($row) {
                    $url = route('edit.category', $row->id);
                    $btn = '<td><a href="' . $url . '" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="btn btn-outline-primary box-shadow-3 mb-1 editMain_categories" style="width: 80px"><i class="la la-edit"></i>'.__('translate-admin/category.edit').'</a></td>';
                    $btn .= '&nbsp;&nbsp;';
                    $btn = $btn . ' <td><a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-outline-danger box-shadow-3 mb-1 deleteMain_categories" style="width: 80px"><i class="la la-remove"></i> '.__('translate-admin/category.delete').'</a></td>';
                    return $btn;
                })
                ->rawColumns(['photo', 'action'])
                ->make(true);


        }


        return view('admin.categories.indexSub', compact('main_categories'));
    }

    public function store(MainCategoryRequest $request)
    {
        try {
            if (!$request->has('is_active')) {
                $request->request->add(['is_active' => 0]);

            } else {
                $request->request->add(['is_active' => 1]);

            }
            $filePath = "";
            if ($request->has('photo')) {
                $filePath = uploadImage('categories', $request->photo);
            }

            if ($request->type == 'main') {
                DB::beginTransaction();
                $category = Category::create([
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
            } else {
                DB::beginTransaction();
                $category = Category::create([
                    'slug' => $request->slug,
                    'photo' => $filePath,
                    'parent_id' => $request->parent_id,
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
        if (!$categories)
            return redirect()->route('index.mainCategories')->with('error',__('translate-admin/category.error'));

        $mainCategories = Category::parent()->get();

        return view('admin.categories.edit', compact('categories', 'mainCategories'));


    }


    public function update($id, MainCategoryRequest $request)
    {
        try {
            $category = Category::find($id);

            if (!$category) {
                if ($request->type == 'main'){
                    return redirect()->route('index.mainCategories')->with('error', __('translate-admin/category.error'));
                }else{
                    return redirect()->route('index.subCategories')->with('error', __('translate-admin/category.error'));
                }

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

            if ($request->type == 'main') {
                DB::beginTransaction();

                if ($filePath != '') {
                    $category->update([
                        'slug' => $request->slug,
                        'photo' => $filePath,
                        'is_active' => $request->is_active,
                    ]);

                } else {
                    $category->update([
                        'slug' => $request->slug,
                        'is_active' => $request->is_active,
                    ]);

                }

                $category->name = $request->name;
                $category->save();

                DB::commit();

                return redirect()->route('index.mainCategories')->with('success', __('translate-admin/category.success-update'));
            } else {
                DB::beginTransaction();

                if ($filePath != '') {
                    $category->update([
                        'slug' => $request->slug,
                        'parent_id' => $request->parent_id,
                        'photo' => $filePath,
                        'is_active' => $request->is_active,
                    ]);

                } else {
                    $category->update([
                        'slug' => $request->slug,
                        'parent_id' => $request->parent_id,
                        'is_active' => $request->is_active,
                    ]);

                }

                $category->name = $request->name;
                $category->save();

                DB::commit();

                return redirect()->route('index.subCategories')->with('success', __('translate-admin/category.success-update'));
            }
        } catch (\Exception $ex) {
            return redirect()->route('edit.category')->with('error', __('translate-admin/category.exception-update'));
            DB::rollBack();
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
