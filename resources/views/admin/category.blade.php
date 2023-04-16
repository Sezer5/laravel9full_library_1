<!-- resources/views/child.blade.php -->

@extends('layouts.adminbase')

@section('title', 'Admin Panel')

@section('content')

    <!-- Right side column. Contains the navbar and content of the page -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Blank page
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
                <div class="box-header with-border">
                    <h3 class="box-title">Title</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <table class="table table-responsive table-bordered">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Parent Name</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $rs)
                        <tr>
                            <td>{{$rs->id}}</td>
                            <td>
                                @if($rs->parent_id==0)
                                    Main Category
                                @elseif($rs->parent_id!=0)
                                    {{
                                    \App\Http\Controllers\admin\CategoryController::getParentsTree($rs,$rs->name)
                                }}
                                @endif

                            </td>
                            <td>{{$rs->name}}</td>
                            <td>{{$rs->description}}</td>
                            <td>
                                <a href="{{route('category.edit',['id'=>$rs->id])}}"
                                   onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')"
                                >Edit</a>
                            </td>
                            <td></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div><!-- /.box-body -->
                <div class="box-footer">
                    Footer
                </div><!-- /.box-footer-->
            </div><!-- /.box -->

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

@endsection
