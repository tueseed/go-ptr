function upload()
{
    var formdata = new FormData();
    var picture = document.getElementById("picture_file");
    formdata.append("images", picture.file);
    $.ajax({
        url: "upload.php",
        type: "POST",
        data: formdata,
        processData: false,
        contentType: false,
        success: function (res) {
         console.log(res); 
        }
      });
      console.log(picture);
      
}