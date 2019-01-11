<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form> 

<input type=text name="name" placeholder="שם המוצר " >
<div> מרכיבים:</div>
<textarea name="ingredient" id="" cols="30" rows="10"></textarea>
<input type="checkbox" name="hot" id="hot_product" > <label for="hot_product"> חריף</label> 

<button id="upload_widget" class="cloudinary-button">Upload files</button>



</form>

<script src="https://widget.cloudinary.com/v2.0/global/all.js" type="text/javascript"></script>  

<script type="text/javascript">  
var myWidget = cloudinary.createUploadWidget({
  cloudName: 'dst3fatti', 
  uploadPreset: 'frencheska'}, (error, result) => { console.log(error, result) })

document.getElementById("upload_widget").addEventListener("click", function(){
    myWidget.open();
  }, false);
</script>


<?php include ("../components/page_footer.php") ?>




</body>
</html>