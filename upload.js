function upload()
{
    var formdata = new FormData();
    var picture = document.getElementById("picture_file");
    formdata.append("images", picture);
    /*
    $.ajax({
        url: "upload.php",
        type: "POST",
        data: formdata,
        processData: false,
        contentType: false,
        success: function (res) {
          document.getElementById("response").innerHTML = res; 
        }
      });*/
      alert(formdata.images);
}