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

         $options = Option::get();
         $product = Product::find($product_id);
        if (!$product)
            return redirect()->route('index.product')->with('error','هذا المنتج غير موجود');
         $attributes = Attribute::select('id')->get();

        foreach ($options as $option){
            if ($option->product_id == $product->id){
                 if ($request->ajax()) {


                             return DataTables::of($option)
                                 ->addIndexColumn()
                                 ->addColumn('product_id', function ($row) {
                                     return $row->product->name;
                                 })
                                 ->addColumn('attribute_id', function ($row) {
                                     return $row->attribute->name;
                                 })
                                 ->addColumn('action', function ($row) {
                                     $url = route('edit.option', $row->id);
                                     $btn = '<td><a href="' . $url . '" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" id="edit" class="btn btn-outline-primary box-shadow-3 mb-1 editOption" style="width: 80px"><i class="la la-edit"></i>تعديل</a></td>';
                                     $btn .= '&nbsp;&nbsp;';
                                     $btn = $btn . ' <td><a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-outline-danger box-shadow-3 mb-1 deleteOption" style="width: 80px"><i class="la la-remove"></i> حذف</a></td>';
                                     return $btn;
                                 })
                                 ->rawColumns(['action'])
                                 ->make(true);
                         }
                     }


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
                'msg' => 'تمت اضافة خيار الخاصية بنجاح'
            ]);

        }catch (\Exception $ex){
            DB::rollBack();
            return redirect() -> route('index.option', $request->product_id) ->with('error', 'هناك خطأ ما يرجى المحاولة فيما بعد');
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
            if (!$option)
                return redirect()->route('index.product')->with('error','خيار الخاصية غير تابع لاي منتج');


            return view('admin.products.attributes.options.edit', compact('option', 'attributes'));

        }catch (\Exception $exception){
            return redirect()->route('index.option', $option->product_id)->with('error','هناك خطأ ما يرجى المحاولة فيما بعد');

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

            if (!$option)
                return redirect()->route('index.option', $option->product_id)->with('error','خيار الخاصية غير موجود');

            DB::beginTransaction();

            $option->where('id', $option_id)->update([
                'product_id' => $request->product_id,
                'attribute_id' => $request->attribute_id,
                'price' => $request->price,
            ]);

            $option->name = $request->name;
            $option->save();

            DB::commit();
            return redirect()->route('index.option', $option->product_id)->with('success', 'تم تحديث خيار الخاصية بنجاح');

        }catch (\Exception $exception){
            return redirect()->route('index.option', $option->product_id)->with('error','هناك خطأ ما يرجى المحاولة فيما بعد');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
