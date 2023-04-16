
<link href="{{asset('assets')}}/admin/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
<link href="{{asset('assets')}}/admin/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
<link href="{{asset('assets')}}/admin/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">{{$product->name}}</h3>
        <hr>
    </div>
    <div class="box-body">
        <table class="table table-responsive table-bordered">
            <tbody>
            <tr>
                <th>Id</th>
                <td>{{$product->id}}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{$product->name}}</td></tr><tr>
                <th>Description</th>
                <td> <textarea name="description" id="description" cols="30" rows="10">{!! $product->description!!}</textarea></td>

                <script>
                    ClassicEditor
                        .create( document.querySelector( '#description' ) )
                        .then( editor => {
                            console.log( editor );
                        } )
                        .catch( error => {
                            console.error( error );
                        } );
                </script>
            </tr>


            </tr>
            <form action="{{route('product.gallery_add',['pid'=>$product->id])}}" method="post" role="form" enctype="multipart/form-data">
                @csrf
                <tr>
                    <td>
                        <input type="file" name="image" class="form-control">
                    </td>
                    <td>
                        <button type="submit" class="btn btn-success">Add</button>
                    </td>
                </tr>
            </form>
            </tbody>
        </table>
        <hr>
        <table class="table table-responsive table-bordered">
            <tbody>
            <tr>
                <td colspan="2">Images</td>
            </tr>
            @foreach($gallery as $rs)
            <tr>
                <td><img src="{{Storage::url($rs->image)}}" style="width:150px"></td>
                <td><a href="{{route('product.gallery_sub',['pid'=>$rs->product_id,'id'=>$rs->id])}}">Delete</a></td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div><!-- /.box-body -->

</div><!-- /.box -->




