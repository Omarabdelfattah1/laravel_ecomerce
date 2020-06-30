
<div class="modal fade" id="deleteSubCategory"
        tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title f-w-600 text-center"
                    id="exampleModalLabel">Delete Category</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form class="needs-validation"
                        action="{{route('subcategories.destroy', $s_category->id) }}"
                        method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="form">
                        Delete this sub Category ?
                    </div>
                    <div class="modal-footer">
                        <input class="btn btn-primary"
                                type="submit" value="Delete">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editSubCategory"
        tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title f-w-600 text-center"
                    id="exampleModalLabel">Update Category</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
            <form class="needs-validation" action="{{route('subcategories.update',$s_category)}}" method="post">
                <div class="form">

                @csrf
                @method('PUT')
                    <div class="form-group">
                        <label for="validationCustom01" class="mb-1">Main Category:</label>
                        <select id="validationCustom01" class="form-control" name="category_id" value="{{$s_category->category->name}}">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->translate('en')->name}}-</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="validationCustom01" class="mb-1">Sub Category Name :</label>
                        <input class="form-control" id="validationCustom01" type="text" name="en[name]" value="{{$s_category->translate('en')->name}}">
                    </div>
                    <div class="form-group">
                        <label for="validationCustom01" class="mb-1">Sub Category Name in Arabic :</label>
                        <input class="form-control" id="validationCustom01" type="text" name="ar[name]" value="{{$s_category->translate('ar')->name}}">
                    </div>
                    
                    <div class="form-group">
                        <label for="validationCustom01" class="mb-1">Description :</label>
                        <input class="form-control" id="validationCustom01" type="text" name="en[description]" value="{{$s_category->translate('en')->description}}">
                    </div>
                    <div class="form-group">
                        <label for="validationCustom01" class="mb-1">Description in Arabic:</label>
                        <input class="form-control" id="validationCustom01" type="text" name="ar[description]" value="{{$s_category->translate('ar')->description}}">
                    </div>
                    <div class="modal-footer">
                        <input class="btn btn-primary" type="submit" value="Save">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>