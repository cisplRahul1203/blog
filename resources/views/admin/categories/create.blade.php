
<form action="{{route('admin.category.store')}}" method="POST" accept-charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="form-group row">
        <div class="col-sm-12">
            <label class="form-control-label">Title: </label>
            <input type="text" id="txturl" name="title" class="form-control">
        <p class="small">{{ config('app.url')}}<span id="url"></span></p>
        <input type="hidden" name="slug" id="slug" value="">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-12">
            <label class="form-control-label">Description: </label>
            <textarea name="description" id="editor" class="form-control" cols="80" rows="10"></textarea>
        </div>
    </div>
    {{-- <div class="form-group row">
        <div class="col-sm-12">
            <label class="form-control-label">Select Category: </label>
            <select name="parent_id[]" id="parent_id" class="form-control" multiple>
                @if($categories)
                <option value="0">Top Level</option>
                @foreach ($categories as $category)
                 <option value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
                @endif 
            </select>
        </div>
    </div> --}}
    <div class="form-group row">
        <div class="col-sm-12">
            <input type="submit" name="submit" class="btn btn-primary" value="Add Category">
        </div>
    </div>
</form>
@section('scripts')
    <script type="text/javascript">
    $(function(){
        $('#parent_id').select2({
            placeholder: "Select a parent category",
            allowClear: true,
            minimumResultsForSearch: Infinity
        });
    })
    </script>
@endsection