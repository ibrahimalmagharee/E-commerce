<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ImageRequest;
use App\Http\Requests\Admin\ProductGeneralRequest;
use App\Http\Requests\Admin\ProductPriceRequest;
use App\Http\Requests\Admin\ProductRequest;
use App\Http\Requests\Admin\ProductStoreRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $products = Product::get();

        if ($request->ajax()) {

            return DataTables::of($products)
                ->addIndexColumn()
                ->addColumn('is_active', function ($row) {
                    return $row->is_active == 1 ? __('translate-admin/products.active') : __('translate-admin/products.not active');
                })
                ->addColumn('attribute', function ($row) {
                    $url = route('index.option', $row->id);
                    $btn = '<td><a href="' . $url . '" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Attribute" class="btn btn-outline-info box-shadow-3 mb-1 editBrand">'.__('translate-admin/products.attributes').'</a></td>';
                    return $btn;
                })
                ->addColumn('images', function ($row) {
                    $url = route('add.product.images', $row->id);
                    $btn = ' <td><a href="' . $url . '" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Images" class="btn btn-outline-warning box-shadow-3 mb-1 addProductImages">'.__('translate-admin/products.images_product').'</a></td>';

                    return $btn;
                })
//                ->addColumn('activation', function ($row) {
//                    $url = route('edit.product.activation', $row->id);
//                    $btn = ' <td><a href="' . $url . '" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Active" class="btn btn-outline-secondary box-shadow-3 mb-1 addProductImages">تفعيل</a></td>';
//
//                    return $btn;
//                })
                ->addColumn('action', function ($row) {
                    $url = route('edit.product.general', $row->id);
                    $btn = '<td><a href="' . $url . '" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="تعديل" id="editBanner" class="primary box-shadow-3 mb-1 editOption" style="width: 80px"><i class="la la-edit font-large-1"></i></a></td>';
                    $btn .= '&nbsp;&nbsp;';
                    $btn = $btn . ' <td><a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="حذف" class="danger box-shadow-3 mb-1 deleteProduct" style="width: 80px"><i class="la la-trash font-large-1"></i></a></td>';

                    $btn .= '&nbsp;&nbsp;';
                    $url = route('edit.product.price', $row->id);
                    $btn = $btn . '<td><a href="' . $url . '" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit Price" class="btn btn-outline-success box-shadow-3 mb-1 editBrand">'.__('translate-admin/products.price').'</a></td>';
                    $btn .= '&nbsp;&nbsp;';
                    $url = route('edit.product.store', $row->id);
                    $btn = $btn . '<td><a href="' . $url . '" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit Store" class="btn btn-outline-blue box-shadow-3 mb-1 editBrand">'.__('translate-admin/products.stoke').'</a></td>';
                    $btn .= '&nbsp;&nbsp;';
                    return $btn;
                })
                ->rawColumns(['attribute', 'images', 'action'])
                ->make(true);


        }
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $data = [];
        $data['brand'] = Brand::active()->select('id')->get();
        $data['tags'] = Tag::active()->select('id')->get();
        $data['categories'] = Category::active()->select('id')->parent()->with('childrenCategories')->get();

        // return  $data;

        return view('admin.products.create.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ProductRequest $request)
    {
        try {

            if (!$request->has('is_active')) {
                $request->request->add(['is_active' => 0]);

            } else {
                $request->request->add(['is_active' => 1]);

            }

            DB::beginTransaction();
            $product = Product::create([
                'slug' => $request->slug,
                'category_id' => $request->categories,
                'tag_id' => $request->tags,
                'brand_id' => $request->brand_id,
                'is_active' => $request->is_active,
                'price' => $request->price,
                'special_price' => $request->special_price,
                'special_price_type' => $request->special_price_type,
                'special_price_start' => $request->special_price_start,
                'special_price_end' => $request->special_price_end,
                'SKU' => $request->SKU,
                'manage_stock' => $request->manage_stock,
                'in_stock' => $request->in_stock,
                'qty' => $request->qty,
            ]);

            $product->name = $request->name;
            $product->description = $request->description;
            $product->short_description = $request->short_description;
            $product->save();

            $product->categories()->attach($request->categories);

            $product->tags()->attach($request->tags);


            DB::commit();

            $notification = array(
                'message' => __('translate-admin/products.success_add'),
                'alert-type' => 'info'
            );

            return redirect()->route('index.product')->with($notification);


        } catch (\Exception $ex) {
            DB::rollBack();
            $notification = array(
                'message' => __('translate-admin/products.exception_add'),
                'alert-type' => 'error'
            );
            return redirect()->route('create.product')->with($notification);
        }
    }

    public function editProductGeneral($product_id)
    {


        $product_general = Product::with('categories', 'tags', 'brand')->find($product_id);
        //  dd($product_general);
        if (!$product_general){
            $notification = array(
                'message' => __('translate-admin/products.error'),
                'alert-type' => 'error'
            );
            return redirect()->route('index.product')->with($notification);

        }

        $data = [];
        $data['brand'] = Brand::active()->select('id')->get();
        $data['tags'] = Tag::active()->select('id')->get();
        $data['categories'] = Category::active()->select('id')->parent()->with('childrenCategories')->get();
        $product_tags = collect();
        foreach ($product_general->tags as $tags) {
            $product_tags [] = $tags;

        }

        $product_categories = collect();
        foreach ($product_general->categories as $mainCategory) {
            $product_categories [] = $mainCategory;
        }

        // return $product_tags;

        return view('admin.products.edit.editProductGeneral', compact('product_general', 'data', 'product_tags', 'product_categories'));


    }

    public function updateProductGeneral(ProductGeneralRequest $request, $product_id)
    {

        $product_general = Product::with('categories', 'tags', 'brand')->find($product_id);

        if (!$product_general){
            $notification = array(
                'message' => __('translate-admin/products.error'),
                'alert-type' => 'error'
            );
            return redirect()->route('index.product')->with($notification);

        }

        if (!$request->has('is_active')) {
            $request->request->add(['is_active' => 0]);

        } else {
            $request->request->add(['is_active' => 1]);
        }

        DB::beginTransaction();

        $product_general->where('id', $product_id)->update([
            'slug' => $request->slug,
            'brand_id' => $request->brand_id,
            'is_active' => $request->is_active,
        ]);

        $product_general->name = $request->name;
        $product_general->description = $request->description;
        $product_general->short_description = $request->short_description;
        $product_general->save();

        $product_general->categories()->sync($request->categories);
        $product_general->tags()->sync($request->tags);

        DB::commit();

        $notification = array(
            'message' => __('translate-admin/products.success_update'),
            'alert-type' => 'info'
        );
        return redirect()->route('index.product')->with($notification);


    }

    public function editProductPrice($product_id)
    {
        try {
            $product_price = Product::find($product_id);
            if (!$product_price){
                $notification = array(
                    'message' => __('translate-admin/products.error'),
                    'alert-type' => 'error'
                );
                return redirect()->route('index.product')->with($notification);

            }

            return view('admin.products.edit.editProductPrice', compact('product_price'));

        } catch (\Exception $exception) {
            $notification = array(
                'message' => __('translate-admin/products.exception_add'),
                'alert-type' => 'error'
            );
            return redirect()->route('index.product')->with($notification);

        }
    }

    public function updateProductPrice(ProductPriceRequest $request, $product_id)
    {
        try {
            $product_price = Product::find($product_id);

            if (!$product_price){
                $notification = array(
                    'message' => __('translate-admin/products.error'),
                    'alert-type' => 'error'
                );
                return redirect()->route('index.product')->with($notification);

            }

            DB::beginTransaction();

            $product_price->update([
                'price' => $request->price,
                'special_price' => $request->special_price,
                'special_price_type' => $request->special_price_type,
                'special_price_start' => $request->special_price_start,
                'special_price_end' => $request->special_price_end,
            ]);

            DB::commit();

            $notification = array(
                'message' => __('translate-admin/products.success_update'),
                'alert-type' => 'info'
            );
            return redirect()->route('index.product')->with($notification);

        } catch (\Exception $exception) {
            $notification = array(
                'message' => __('translate-admin/products.exception_add'),
                'alert-type' => 'info'
            );
            return redirect()->route('index.product')->with($notification);

        }
    }

    public function editProductStore($product_id)
    {
        try {
            $product_store = Product::find($product_id);
            if (!$product_store){
                $notification = array(
                    'message' => __('translate-admin/products.error'),
                    'alert-type' => 'error'
                );
                return redirect()->route('index.product')->with($notification);

            }


            return view('admin.products.edit.editProductStore', compact('product_store'));

        } catch (\Exception $exception) {
            $notification = array(
                'message' => __('translate-admin/products.exception_add'),
                'alert-type' => 'info'
            );
            return redirect()->route('index.product')->with($notification);

        }
    }

    public function updateProductStore(ProductStoreRequest $request, $product_id)
    {
        try {
            $product_store = Product::find($product_id);

            if (!$product_store){
                $notification = array(
                    'message' => __('translate-admin/products.error'),
                    'alert-type' => 'error'
                );
                return redirect()->route('index.product')->with($notification);

            }

            DB::beginTransaction();

            $product_store->update([
                'SKU' => $request->SKU,
                'manage_stock' => $request->manage_stock,
                'in_stock' => $request->in_stock,
                'qty' => $request->qty,
            ]);

            DB::commit();

            $notification = array(
                'message' => __('translate-admin/products.success_update'),
                'alert-type' => 'info'
            );
            return redirect()->route('index.product')->with($notification);

        } catch (\Exception $exception) {
            $notification = array(
                'message' => __('translate-admin/products.exception_add'),
                'alert-type' => 'info'
            );
            return redirect()->route('index.product')->with($notification);

        }
    }

    public function editProductActivation($product_id)
    {

    }

    public function updateProductActivation()
    {

    }

    public function addProductImages($product_id)
    {
        $product = Product::with('images')->find($product_id);
        return view('admin.products.images.addImages', compact('product'));
    }

    public function saveImagesOfProductInDB(ImageRequest $request)
    {
        if ($request->has('images') && count($request->images) > 0) {
            foreach ($request->images as $image) {
                Image::create([
                    'imageable_id' => $request->product_id,
                    'imageable_type' => 'App\Models\Product',
                    'photo' => $image
                ]);
            }
        }

        $notification = array(
            'message' => __('translate-admin/products.success_add_images'),
            'alert-type' => 'success'
        );
        return redirect()->route('index.product')->with($notification);


    }

    public function saveImagesOfProductInFolder(Request $request)
    {

            $image = $request->file('dzfile');
            $fileName = uploadImage('products', $image);

        return response()->json([
            'name' => $fileName,
            'original_name' => $image->getClientOriginalName(),
        ]);

    }

    public function deleteImagesOfProduct($id)
    {
        try {
            $product_image = Image::find($id);
            $path = public_path('assets/images/products/') . $product_image->photo;
            unlink($path);
            $product_image->delete();
            return response()->json([
                'status' => true,
                'msg' => 'تمت عملية حذف الصور بنجاح'
            ]);
        } catch (\Exception $ex) {
            return response()->json([
                'status' => false,
                'msg' => 'فشلت عملية الذف يرجى المحاولة مرة أخرى'
            ]);
        }
    }

    public function removeImagesOfProductFromFolder(Request $request)
    {
        $image = $request->file('filename');
        $filename = $request->get('filename');
        $path = public_path('assets/images/products/') . $filename;

        if (file_exists($path)) {
            unlink($path);
        }
        return $path;
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {

        $product = Product::with('categories', 'tags', 'brand')->find($id);
        if (!$product) {
            return response()->json([
                'status' => false,
                'msg' => __('translate-admin/products.error'),
            ]);

        }

        $product->delete();
        return response()->json([
            'status' => true,
            'msg' => __('translate-admin/products.success_delete'),
        ]);


    }
}
