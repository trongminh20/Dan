<?php
$pageTitle = "Famous Quotes";
$page = "Home";
include("./template/header.html");
?>
<div class="content-container">

    <div id="left-side" class="grid-items left">
        this is left
    </div>
    <div id="main-content" class="grid-items middle">
        <div class="quote-area">
            <div id="quote-text"></div>
            <p id="author-text"></p>
        </div>
        <button type="button" class="" id="btn-quote" >Get Quote</button>
    </div>
    <div id="right-side" class="grid-items right">
        this is the right side bar
    </div>

</div>

<?php
include("./template/footer.html");
?>