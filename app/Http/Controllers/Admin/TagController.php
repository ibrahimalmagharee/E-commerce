<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TagRequest;
use App\Models\Tag;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use DB;

class TagController extends Controller
{
    public function index(Request $request)
    {
        $tags = Tag::get();

        if ($request->ajax()) {

            return DataTables::of($tags)
                ->addIndexColumn()
                ->addColumn('is_active', function ($row) {
                    return $row->is_active == 1 ? __('translate-admin/tag.active'): __('translate-admin/tag.not active');
                })
                ->addColumn('action', function ($row) {
                    $url = route('edit.tag', $row->id);
                    $btn = '<td><a href="' . $url . '" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" id="editBrand" class="btn btn-outline-primary box-shadow-3 mb-1 editTag" style="width: 80px"><i class="la la-edit"></i>'.__('translate-admin/tag.edit').'</a></td>';
                    $btn .= '&nbsp;&nbsp;';
                    $btn = $btn . ' <td><a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-outline-danger box-shadow-3 mb-1 deleteTag" style="width: 80px"><i class="la la-remove"></i> '.__('translate-admin/tag.delete').'</a></td>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);


        }
        return view('admin.tags.indexTag', compact('tags'));
    }

    public function store(TagRequest $request)
    {
        try {

            if (!$request->has('is_active')) {
                $request->request->add(['is_active' => 0]);

            } else {
                $request->request->add(['is_active' => 1]);

            }


            DB::beginTransaction();
            $brand = Tag::create([
                'slug' => $request->slug,
                'is_active' => $request->is_active,
            ]);

            $brand->name = $request->name;
            $brand->save();

            DB::commit();

            return response()->json([
                'status' => true,
                'msg' => __('translate-admin/tag.success-add')
            ]);


        } catch (\Exception $ex) {
            DB::rollBack();
            return response()->json([
                'status' => false,
                'msg' => __('translate-admin/tag.exception-add')
            ]);
        }
    }

    public function edit($id)
    {
        $tag = Tag::find($id);
        if (!$tag)
            return redirect()->route('index.tag')->with('error', __('translate-admin/tag.error'));

        return view('admin.tags.edit', compact('tag'));
    }

    public function update($id, TagRequest $request)
    {
        try {
            $tag = Tag::find($id);
            if (!$tag)
                return redirect()->route('index.tag')->with('error', __('translate-admin/tag.error'));

            if (!$request->has('is_active')) {
                $request->request->add(['is_active' => 0]);
            } else {
                $request->request->add(['is_active' => 1]);
            }


            DB::beginTransaction();
            $tag->where('id', $id)->update([
                'slug' => $request->slug,
                'is_active' => $request->is_active,
            ]);
            $tag->name = $request->name;
            $tag->save();

            DB::commit();

            return redirect()->route('index.tag')->with('success', __('translate-admin/tag.success-update'));
        } catch (\Exception $exception) {
            DB::rollBack();
            return redirect()->route('edit.tag')->with('error', __('translate-admin/tag.exception-update'));
        }
    }

    public function destroy($id)
    {
        try {
            $tag = Tag::find($id);
            if (!$tag) {
                return response()->json([
                    'status' => false,
                    'msg' => __('translate-admin/tag.exception-delete'),
                ]);
            } else {
                $tag->delete();
                return response()->json([
                    'status' => true,
                    'msg' => __('translate-admin/tag.success-delete'),
                ]);
            }


        } catch (\Exception $exception) {
            return response()->json([
                'status' => false,
                'msg' => __('translate-admin/tag.exception-delete'),
            ]);
        }
    }
}
