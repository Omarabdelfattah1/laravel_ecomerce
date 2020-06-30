<div class="modal fade" id="createCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title f-w-600" id="exampleModalLabel">Add Physical Product</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form class="needs-validation" action="{{route('categories.store')}}" method="post">
                    <div class="form">
                    @csrf
                        <div class="form-group">
                            <label for="validationCustom01" class="mb-1">Category Name :</label>
                            <input class="form-control" id="validationCustom01" type="text" name="en[name]">
                        </div>
                        <div class="form-group">
                            <label for="validationCustom01" class="mb-1">Category Name in Arabic:</label>
                            <input class="form-control" id="validationCustom01" type="text" name="ar[name]">
                        </div>
                        
                        <div class="form-group">
                            <label for="validationCustom01" class="mb-1">Description:</label>
                            <input class="form-control" id="validationCustom01" type="text" name="en[description]">
                        </div>
                        <div class="form-group">
                            <label for="validationCustom01" class="mb-1">Description in Arabic:</label>
                            <input class="form-control" id="validationCustom01" type="text" name="ar[description]">
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