@extends('layouts.adminbase')

@section('title', 'Admin Panel')

@section('content')

    <!-- Right side column. Contains the navbar and content of the page -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">User Create</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        @if( Session::has( 'success' ))
                            <div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                                {{ Session::get( 'success' ) }}
                            </div>
                        @elseif( Session::has( 'error' ))
                            <div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                                {{ Session::get( 'error' ) }}
                            </div>
                             <!-- here to 'withWarning()' -->
                        @endif
                        <!-- left column -->
                        <div class="col-md-6">
                            <form action="{{route('user.usercreateadd')}}" method="post" role="form">
                                @csrf
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text" name="name" placeholder="name" class="form-control" style="width:50%;">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Email</label>
                                        <input type="text" name="email" placeholder="email" class="form-control" style="width:50%;">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" name="password" placeholder="password" class="form-control" style="width:50%;">
                                    </div>
                                    <div class="form-group" style="width:50%;">
                                        <button type="submit" class="btn-success btn" style="float: right;">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div><!-- /.box-body -->
                    </div>
                </div>
                <div class="box-footer">

                </div><!-- /.box-footer-->
            </div><!-- /.box -->

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

@endsection
