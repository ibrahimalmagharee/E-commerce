<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AttributesRequest;
use App\Models\Attribute;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use DB;
class AttributesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $attributes= Attribute::get();

        if ($request->ajax()) {

            return DataTables::of($attributes)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $url = route('edit.attribute', $row->id);
                    $btn = '<td><a href="' . $url . '" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="تعديل" id="editBanner" class="primary box-shadow-3 mb-1 editAttribute" style="width: 80px"><i class="la la-edit font-large-1"></i></a></td>';
                    $btn .= '&nbsp;&nbsp;';
                    $btn = $btn . ' <td><a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="حذف" class="danger box-shadow-3 mb-1 deleteAttribute" style="width: 80px"><i class="la la-trash font-large-1"></i></a></td>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);


        }
        return view('admin.products.attributes.index', compact('attributes'));
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
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(AttributesRequest $request)
    {
        try {
            DB::beginTransaction();
            $attribute = Attribute::create([]);

            $attribute->name = $request->name;
            $attribute->save();

            DB::commit();

            return response()->json([
                'status' => true,
                'msg' => __('translate-admin/attributes.success_add')
            ]);

        }catch (\Exception $ex){
            DB::rollBack();
            $notification = array(
                'message' => __('translate-admin/attributes.exception_add'),
                'alert-type' => 'error'
            );
            return redirect() -> route('index.attribute') ->with($notification);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function edit($id)
    {
        $attribute = Attribute::find($id);
        if (!$attribute){
            $notification = array(
                'message' => __('translate-admin/attributes.error'),
                'alert-type' => 'error'
            );
            return redirect() -> route('index.attribute') ->with($notification);
        }

        return view('admin.products.attributes.edit', compact('attribute'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(AttributesRequest $request, $id)
    {
        try {
            $attribute = Attribute::find($id);
            if (!$attribute){
                $notification = array(
                    'message' => __('translate-admin/attributes.error'),
                    'alert-type' => 'error'
                );
                return redirect() -> route('index.attribute') ->with($notification);
            }

            DB::beginTransaction();

            $attribute->where('id', $id)->update([]);
            $attribute->name = $request->name;
            $attribute->save();

            DB::commit();

            $notification = array(
                'message' => __('translate-admin/attributes.success_update'),
                'alert-type' => 'info'
            );
            return redirect() -> route('index.attribute') ->with($notification);

        }catch (\Exception $ex){
            DB::rollBack();
            $notification = array(
                'message' => __('translate-admin/attributes.exception_add'),
                'alert-type' => 'error'
            );
            return redirect() -> route('index.attribute') ->with($notification);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {

        $attribute = Attribute::find($id);
        if (!$attribute){
            return response() -> json([
                'status' => false,
                'msg' =>__('translate-admin/attributes.exception_add'),
            ]);
        }

        else
        {

            $attribute->delete();
            return response() -> json([
                'status' => true,
                'msg' => __('translate-admin/attributes.success_delete'),
            ]);
        }



    }
}
