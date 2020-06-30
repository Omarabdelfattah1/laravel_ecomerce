function getSubCategories()
{
  $('#category').on('change',function(e){
      console.log(e);
      var cat_id=e.target.value;
      $('#sub_categories').empty();
      console.log(cat_id);
      $.get('/sub-categories?id=' + cat_id,function(data){
          $.each(data,function(index,subCatObj){
              $('#sub_categories').append('<option value="'+subCatObj.id+'">'+subCatObj.name+'</option>')
          });
      });
      
  });
}
// function uploadProductImages()
// {
//     var values = $("input[name='images[]']").map(function(){return $(this).val();}).get();
//     $('#product_details').on('submit',function(){
//         if(){

//         }
//     })
// }
function productImages()
{
    if(window.File && window.FileList && window.FileReader)
    {
        $('#files').on("change", function(event) {
            var files = event.target.files; //FileList object
            var output = document.getElementById("result");
            for(var i = 0; i< files.length; i++)
            {
                var file = files[i];
                //Only pics
                // if(!file.type.match('image'))
                if(file.type.match('image.*')){
                    if(this.files[0].size < 2097152){
                        // continue;
                        var picReader = new FileReader();
                        picReader.addEventListener("load",function(event){
                        var picFile = event.target;
                        var div = document.createElement("div");
                        div.innerHTML = "<img class='thumbnail' src='" + picFile.result + "'" +
                        "title='preview image'/>";
                        output.insertBefore(div,null);
                    });
                    //Read the image
                    $('#clear, #result').show();
                    picReader.  readAsDataURL(file);
                }else{
                    alert("Image Size is too big. Minimum size is 2MB.");
                    $(this).val("");
                }
                }else{
                    alert("You can only upload image file.");
                    $(this).val("");
                }
            }

        });
    }
    else
    {
        console.log("Your browser does not support File API");
    }


    $('#files').on("click", function() {
        $('.thumbnail').parent().remove();
        $('#result').hide();
        $(this).val("");
    });

    $('#clear').on("click", function() {
        $('.thumbnail').parent().remove();
        $('#result').hide();
        $('#files').val("");
        $(this).hide();
    });
}
productImages();
getSubCategories();
   
