<?php
    $page_name = "FRENCHESKA";

    include ("../common/db.php");

?>



<!DOCTYPE html>
<html lang="en">
<?php include ( "../components/page_head.php"); ?>
<body>
    <div class="top-picture">
        <img src="https://res.cloudinary.com/frencheska/image/upload/c_fill,g_auto,h_400,w_970/product3.jpg">
    </div>
    <?php include ( "../components/page_header.php"); ?> 
    <div class="content">
        <div class="personal">
            
            <div class="personal-text">
            אני אפרת, תושבת ניר עקיבא ובשלנית מקצועית במשרה מלאה. 
עד לפני שנתיים עבדתי כשכירה בחברת בנייה והייתי מבשלת לחבריי הקרובים, עד שדפקה על דלתי הזדמנות של פעם בחיים. 
הופעתי בתכנית "בואו לאכול איתי" ומאז אני בשלנית במשרה מלאה.
מה שהתחיל עם חמישה ממרחים שאותם חילקתי בין חברים הפך אט-אט לדוכן בשוק איכרים בעיר באר שבע. משם התפתח העסק לדוכן בקניון גראנד קניון באר שבע ומכירה במסעדת "פיין גורמה" הידועה. 
כיום אני מכינה 400 צנצנות ממרחים בשבוע, במטבח ביתי שמוקדש רק עבור זה. כל צנצנת ממרח שאני מכינה היא יצירת האמנות האישית שלי שנעשית באהבה רבה.
        </div>
            <img src="https://res.cloudinary.com/frencheska/image/upload/w_400/tadmit.jpg">

            
        </div>
        <h1>
        המומלצים שלנו
    </h1>
        <div class="some-products">
        <?php
        $pdo=db_connect();

        $stmt = $pdo->query('SELECT * FROM products WHERE `recomnded` = 1');

        while ($row = $stmt->fetch())
        {
            echo_product("small",$row);
        }
        ?>
        </div>
    </div>

    <?php include ("../components/page_head.php") ?>
    <?php include ("../components/page_modal.php") ?>
    <script src="javascript/product.js"> </script>
    <script src="./javascript/stickyscroll.js"></script>
</body>
</html>