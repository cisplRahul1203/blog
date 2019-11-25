@extends('admin.app');
@section('content')
<div class="col-md-8">
<h2 class="d-inline">Category Lists</h2>
<a class="btn btn-secondary float-right btn-add">Add Products</a>
<div id="pro_add">
</div>
</div>
<script type="text/javascript">
    $(".btn-add").click(function(){
    $.ajax({
        type: 'GET',
        url: '/category/create',
        success: function(data) {
            console.log(data);
            $("#pro_add").html(data);
        }
    });
})
</script>
@endsection