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
                <div class="box-body">
                    <table class="table table-responsive table-bordered">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Category Name</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Update</th>
                            <th>Gallery</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $rs)
                            <tr>
                                <td>{{$rs->id}}</td>
                                <td>
                                    @if($rs->category->parent_id==0)
                                        Main Category
                                    @elseif($rs->category->parent_id!=0)
                                        {{
                                        \App\Http\Controllers\admin\ProductController::getParentsTree($rs->category,$rs->category->name)
                                    }}
                                    @endif
                                </td>
                                <td>{{$rs->name}}</td>
                                <td>{{$rs->description}}</td>
                                <td><img src="{{Storage::url($rs->image)}}" style="width:50px"></td>
                                <td>{{$rs->status}}</td>
                                <td>
                                    <a href="{{route('category.edit',['id'=>$rs->id])}}"
                                       onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')"
                                    >Edit</a>
                                </td>
                                <td>
                                    <a href="{{route('product.gallery',['pid'=>$rs->id])}}"
                                       onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')"
                                    >Open</a>
                                </td>
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
