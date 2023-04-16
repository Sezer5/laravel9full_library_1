<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\RoleUser;
use App\Models\User;

class AdminRoleController extends Controller
{
    //
    public function index()
    {
        //
        $data=User::all();
        $data2=Role::all();
        return view("admin.userroles",[
            'data' => $data,
            'data2' => $data2
        ]);
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $data=User::find($id);
        $roles=Role::all();
        return view("admin.user.show",[
            'data' => $data,
            'data2' => $roles
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function addrole(Request $request)
    {
        //
        $data=new RoleUser();
        $data->user_id = $request->user_id;
        $data->role_id = $request->role_id;
        $data->save();
        return redirect(route('role.userroles'));
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
        //
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $uid
     * @return \Illuminate\Http\Response
     */
    public function destroyrole($uid,$rid)
    {
        //
        $user=User::find($uid);
        $user->roles()->detach($rid);#Many to Many relation delete related data
        return redirect(route('role.userroles',['id'=>$uid]));
    }
}
