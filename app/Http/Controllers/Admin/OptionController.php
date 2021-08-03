<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\OptionRequest;
use App\Models\Attribute;
use App\Models\Option;
use App\Models\Product;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use DB;

class OptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request, $product_id)
    {

         $options = Option::where('product_id', $product_id)->get();
         $product = Product::find($product_id);


         $attributes = Attribute::select('id')->get();

                 if ($request->ajax()) {


                             return DataTables::of($options)
                                 ->addIndexColumn()
                                 ->addColumn('product_id', function ($row) {
                                     return $row->product->name;
                                 })
                                 ->addColumn('attribute_id', function ($row) {
                                     return $row->attribute->name;
                                 })
                                 ->addColumn('action', function ($row) {
                                     $url = route('edit.option', $row->id);
                                     $btn = '<td><a href="' . $url . '" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="تعديل" id="editBanner" class="primary box-shadow-3 mb-1 editOption" style="width: 80px"><i class="la la-edit font-large-1"></i></a></td>';
                                     $btn .= '&nbsp;&nbsp;';
                                     $btn = $btn . ' <td><a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="حذف" class="danger box-shadow-3 mb-1 deleteOption" style="width: 80px"><i class="la la-trash font-large-1"></i></a></td>';

                                     return $btn;
                                 })
                                 ->rawColumns(['action'])
                                 ->make(true);



                 }


        return view('admin.products.attributes.options.index', compact('options', 'product', 'attributes'));
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
    public function store(OptionRequest $request)
    {
        try {
            DB::beginTransaction();
            $option = Option::create([
                'product_id' => $request->product_id,
                'attribute_id' => $request->attribute_id,
                'price' => $request->price,
            ]);

            $option->name = $request->name;
            $option->save();

            DB::commit();

            return response()->json([
                'status' => true,
                'msg' => __('translate-admin/optionsAttributes.success_add')
            ]);

        }catch (\Exception $ex){
            DB::rollBack();
            $notification = array(
                'message' => __('translate-admin/optionsAttributes.exception_add'),
                'alert-type' => 'error'
            );
            return redirect() -> route('index.option', $request->product_id) ->with($notification);
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($option_id)
    {
        try {

            $option= Option::find($option_id);
            $attributes = Attribute::select('id')->get();
            if (!$option){
                $notification = array(
                    'message' => __('translate-admin/optionsAttributes.error'),
                    'alert-type' => 'error'
                );
                return redirect()->route('index.product')->with($notification);
            }

            return view('admin.products.attributes.options.edit', compact('option', 'attributes'));

        }catch (\Exception $exception){
            $notification = array(
                'message' => __('translate-admin/optionsAttributes.exception_add'),
                'alert-type' => 'error'
            );
            return redirect() -> route('index.option', $option->product_id) ->with($notification);

        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OptionRequest $request, $option_id)
    {
        try {
            $option = Option::find($option_id);

            if (!$option){
                $notification = array(
                    'message' => __('translate-admin/optionsAttributes.error'),
                    'alert-type' => 'error'
                );
                return redirect()->route('index.product')->with($notification);
            }

            DB::beginTransaction();

            $option->where('id', $option_id)->update([
                'product_id' => $request->product_id,
                'attribute_id' => $request->attribute_id,
                'price' => $request->price,
            ]);

            $option->name = $request->name;
            $option->save();

            DB::commit();

            $notification = array(
                'message' => __('translate-admin/optionsAttributes.success_update'),
                'alert-type' => 'info'
            );
            return redirect()->route('index.option', $option->product_id)->with($notification);

        }catch (\Exception $exception){
            $notification = array(
                'message' => __('translate-admin/optionsAttributes.exception_add'),
                'alert-type' => 'error'
            );
            return redirect() -> route('index.option', $option->product_id) ->with($notification);

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
         $option = Option::find($id);

        if (!$option){
            return response() -> json([
                'status' => false,
                'msg' =>__('translate-admin/optionsAttributes.exception_add'),
            ]);
        }
        else
        {
            $option->delete();
            return response() -> json([
                'status' => true,
                'msg' => __('translate-admin/optionsAttributes.success_delete'),
            ]);
        }
    }
}
