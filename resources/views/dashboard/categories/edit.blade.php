
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
                        action="{{route('categories.destroy', $category->id) }}"
                        method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="form">
                        Delete this Category ?
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
                    id="exampleModalLabel">Delete Category</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
            <form class="needs-validation" action="{{route('categories.update',$category)}}" method="post">
                    <div class="form">
                    @method('PUT')

                    @csrf
                        <div class="form-group">
                            <label for="validationCustom01" class="mb-1">Category Name :</label>
                            <input class="form-control" id="validationCustom01" type="text" name="en[name]" value="{{$category->translate('en')->name}}">
                        </div>
                        <div class="form-group">
                            <label for="validationCustom01" class="mb-1" >Category Name in Arabic:</label>
                            <input class="form-control" id="validationCustom01" type="text" name="ar[name]" value="{{$category->translate('ar')->name}}">
                        </div>
                        
                        <div class="form-group">
                            <label for="validationCustom01" class="mb-1">Description:</label>
                            <input class="form-control" id="validationCustom01" type="text" name="en[description]" value="{{$category->translate('en')->description}}">
                        </div>
                        <div class="form-group">
                            <label for="validationCustom01" class="mb-1">Description in Arabic:</label>
                            <input class="form-control" id="validationCustom01" type="text" name="ar[description]" value="{{$category->translate('ar')->description}}">
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
</div>