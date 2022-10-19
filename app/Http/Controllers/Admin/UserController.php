<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Fortify\CreateNewUser;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = User::where('role', 2);
        $sales_count = $query->count();
        $supplier_count = User::where('role', 3)->count();
        if ($request->keyword) {
            $query->where('name', 'LIKE', "%$request->keyword%");
        }
        $users = $query->paginate(10);
        return view('admin.pages.admin-cek-sales', compact('users', 'sales_count', 'supplier_count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.admin-tambah-karyawan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $n = new CreateNewUser();
        $data = $request->all();
        $data['password'] = 'password';
        $res = $n->create($data);
        return response()->json($res);
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
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        if (!$user) {
            return response()->json(
                [
                    'error' => true,
                    'message' => [
                        'head' => 'Not Found',
                        'body' => 'Not Found'
                    ]
                ],
                404
            );
        }
        $user->update($request->except('id'));
        return response()->json();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        if (!$user) {
            return response()->json(
                [
                    'error' => true,
                    'message' => [
                        'head' => 'Not Found',
                        'body' => 'Not Found'
                    ]
                ],
                404
            );
        }
        $user->delete();
        return response()->json();
    }

    public function supplier(Request $request)
    {
        $query = User::where('role', 3);
        $supplier_count = $query->count();
        $sales_count = User::where('role', 3)->count();
        if ($request->keyword) {
            $query->where('name', 'LIKE', "%$request->keyword%");
        }
        $users = $query->paginate(10);
        return view('admin.pages.admin-cek-supplier', compact('users', 'supplier_count', 'sales_count'));
    }
}
