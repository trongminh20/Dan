<?php
$pageTitle = "Famous Quotes";
$page = "Home";
include("./template/header.html");
?>
<div class="content-container">

    <div id="left-side" class="grid-items left" style="border-right:1px dashed black;">
        <?php include ('./view_quote.php'); ?>
    </div>

    <div id="main-content" class="quote-area grid-items middle">
        <div id="quote-text"></div>
        <p id="author-text"></p>
        <button type="button" class="" id="btn-quote" >Get Quote</button>
    </div>
</div>

<?php
include("./template/footer.html");
?>