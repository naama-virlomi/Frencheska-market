

<!-- -------------------------------------------------------------------- -->
<?php
    $page_name = "FRENCHESKA";
    

?>

<!DOCTYPE html>
<html lang="en">
<?php 
    $page_name = "Contact";
    $links = '<link rel="stylesheet" href="./styles/contact.css">  ';

include ( "../components/page_head.php"); ?>
<style>

</style>

<body>
<?php include ( "../components/page_header.php"); ?>

<div>
    <h1 style="padding: 12px 20px;"> שמרו איתנו על קשר
    </h1>
    <div class="contact-main" style="display:flex">
      <form class="contact-form" action="/action_page.php" style="min-width:500px;">
        <label for="fname">שם פרטי</label><br>
        <input type="text" id="fname" name="firstname" placeholder="">
        <br>
        <label for="lname">שם משפחה</label><br>
        <input type="text" id="lname" name="lastname" placeholder="">
        <br>
        <label for="lname">טלפון</label><br>
        <input type="text" id="lname" name="lastname" placeholder="">
        <br>
        <label for="country">מעוניין לרכוש</label><br>
        <input type="text" id="lname" name="lastname" placeholder="">
        <br>
        <input type="submit" value="שלח טופס">
      </form>
    
    <div class="flip-box">
      <div class="flip-box-inner">
        <div class="flip-box-front">
          <img src="https://res.cloudinary.com/frencheska/image/upload/c_fill,ar_1:1,g_auto,r_max,bo_4px_solid_red,b_rgb:262c35/w_300,h_300/map.jpg"
           alt="Paris" style="width:300px;height:200px">
        </div>
        <div class="flip-box-back">
          <h2>המכירות הבאות שלנו</h2>
          <p>קניון גראנד באר-שבע קומה -2</p>
          <p>יום שישי  בשעה 09:00</p>

          <p>גב ים באר שבע</p>
          <p>יום חמישי   10:00-14:00</p>
       
        </div>
      </div>
    </div>
    </div>


<?php include ("../components/page_footer.php") ?>
</body>
</html>