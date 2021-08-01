<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\ContactVendor;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ContactVendorController extends Controller
{
    public function index (Request $request)
    {
        $contacts = ContactVendor::all();

        $data = [];


        if ($request->ajax()) {

            return DataTables::of($contacts)
                ->addIndexColumn()
                ->addColumn('vendor_id', function ($row) {
                    return $row->vendor->name;

                })
                ->addColumn('action', function ($row) {
                    $btn =  ' <td><a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="حذف" class="danger box-shadow-3 mb-1 deleteContactUsVendor" style="width: 80px"><i class="la la-trash font-large-1"></i></a></td>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);

        }
        return view('superAdmin.contacts.index',compact('contacts'));
    }

    public function destroyContactUs($id)
    {
        $contact = ContactVendor::find($id);
        if (!$contact) {
            return response()->json([
                'status' => false,
                'msg' => 'هذه الرسالة غير موجودة',
            ]);
        } else {
            $contact->delete();
            return response()->json([
                'status' => true,
                'msg' => 'تم حذف الرسالة بنجاح',
            ]);
        }


    }
}
