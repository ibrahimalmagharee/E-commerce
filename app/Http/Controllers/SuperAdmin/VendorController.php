<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SuperAdmin\VendorRequest;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use DB;

class VendorController extends Controller
{
    public function index(Request $request)
    {
        $vendors= Vendor::get();

        if ($request->ajax()) {

            return DataTables::of($vendors)
                ->addIndexColumn()

                ->addColumn('subscription', function ($row) {
                   return $row->subscription == null ? 'غير مشترك' : 'مشترك';
                })

                ->addColumn('action', function ($row) {
                    $url = route('edit.vendor', $row->id);
                    $btn = '<td><a href="' . $url . '" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="تعديل" id="editVendor" class="primary box-shadow-3 mb-1 editBrand" style="width: 80px"><i class="la la-edit font-large-1"></i></a></td>';
                    $btn .= '&nbsp;&nbsp;';
                    $btn = $btn . ' <td><a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="حذف" class="danger box-shadow-3 mb-1 deleteVendor" style="width: 80px"><i class="la la-trash font-large-1"></i></a></td>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);


        }
        return view('superAdmin.vendors.index', compact('vendors'));
    }

    public function store(VendorRequest $request)
    {

        DB::beginTransaction();
        $vendor = Vendor::create([
            'name' => $request->name,
            'domain' => $request->domain,
            'database' => $request->database,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'password' => bcrypt($request->password),


        ]);

        $vendor->save();

        DB::commit();

        return response()->json([
            'status' => true,
            'msg' => 'تم اضافة التاجر بنجاح'
        ]);
    }

    public function edit($id)
    {
        $vendor = Vendor::find($id);

        $notification = array(
            'message' => 'هذا التاجر غير موجود',
            'alert-type' => 'error'
        );
        if (!$vendor)
            return redirect()-> route('index.vendors')->with($notification);

        return view('superAdmin.vendors.edit', compact('vendor'));
    }

    public function update($id, VendorRequest $request)
    {
        $vendor = Vendor::find($id);

        $notification = array(
            'message' => 'هذا التاجر غير موجود',
            'alert-type' => 'error'
        );
        if (!$vendor)
            return redirect()-> route('index.vendors')->with($notification);

        $vendor->where('id', $id)->update([
            'name' => $request->name,
            'domain' => $request->domain,
            'database' => $request->database,
            'email' => $request->email,
            'mobile' => $request->mobile,
        ]);

        $notification = array(
            'message' => 'تم تحديث التاجر بنجاح',
            'alert-type' => 'info'
        );

        return redirect()-> route('index.vendors')->with($notification);
    }

    public function destroy($id)
    {

        $vendor = Vendor::find($id);
        if (!$vendor){
            return response() -> json([
                'status' => false,
                'msg' => 'فشلت عملية حذف التاجر',
            ]);
        }

        else
        {
            $vendor->delete();
            return response() -> json([
                'status' => true,
                'msg' => 'تم حذف التاجر بنجاح',
            ]);
        }



    }
}
