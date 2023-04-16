<!-- resources/views/child.blade.php -->

@extends('layouts.adminbase')

@section('title', 'Admin User Control Panel')

@section('content')

    <!-- Right side column. Contains the navbar and content of the page -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Users
                <small>it all starts here</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Examples</a></li>
                <li class="active">Blank page</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">

                <div class="box-body">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary">

                                @csrf
                                <div class="box-body">
                                    <div class="form-group">
                                        <table class="table table-bordered table-responsive">
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>E-mail</th>
                                                <th>Roles</th>
                                                <td>Add Role</td>
                                                <th>+</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($data as $rs)
                                                <tr>
                                                    <td>{{$rs->id}}</td>
                                                    <td>{{$rs->name}}</td>
                                                    <td>{{$rs->email}}</td>
                                                    <td>
                                                        @foreach($rs->roles as $role)
                                                            {{$role->name}}
                                                            <a href="{{route('role.destroyrole',['uid'=>$rs->id,'rid'=>$role->id])}}">[x]</a>
                                                            <br>
                                                        @endforeach
                                                    </td>
                                                    <form action="{{route('role.addrole')}}" method="post">
                                                        @csrf
                                                        <input type="text" name="user_id" value="{{$rs->id}}" hidden>
                                                        <td>
                                                            <select name="role_id" class="form-control">
                                                                @foreach($data2 as $ks)
                                                                    <option value="{{$ks->id}}">{{$ks->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                        <td>

                                                            <button type="submit" class="btn btn-primary">+</button>

                                                        </td>
                                                    </form>

                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>


                                </div><!-- /.box-body -->

                                <div class="box-footer">

                                </div>
                                </form>
                            </div><!-- /.box -->
                        </div><!-- /.box-body -->
                    </div> </div>
            </div><!-- /.box-footer-->
    </div><!-- /.box -->

    </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

@endsection
