<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="dalle-test.css">

    

</head>
<body>
    <header>
        <div class="commonContent">
            <img src="kemlogo.png" id="kemlogo">
        <div class="top_images">
            <img src="title_hokusai.png">
        </div>
        </div>

    </header>
    <form action="dalle-form-submit.php" method="post" name="addForm">
        <div class="choices">
            <p><img src="caption1.png" id="caption_img"></p>
            <div class="img_choice">
            <input id="image_a" type="radio" value="yama.png" name="maker" onclick="formSwitch();">
            <label for="image_a"><img src="yama.png"></label>
            <input id="image_b" type="radio" value="nami.png" name="maker" onclick="formSwitch();">
            <label for="image_b"><img src="nami.png"></label>
            <input id="image_c" type="radio" value="hashi.png" name="maker" onclick="formSwitch();">
            <label for="image_c"><img src="hashi.png"></label>
            </div>
        </div>
        <a id="chapter01Link" class="anchorLink"></a>
        <div class="choices">
            <div id="yamaList">
            <p><img src="caption2.png" id="caption_img"></p>
                <div class="img_choice">
                <input id="mask_a" type="radio" value="yama_mask1.png" name="mask" onclick="formComplete();">   
                <label for="mask_a"><img src="yama_mask1.png"></label>
                <input id="mask_b" type="radio" value="yama_mask2.png" name="mask" onclick="formComplete();">
                <label for="mask_b"><img src="yama_mask2.png"></label>
                <input id="mask_c" type="radio" value="yama_mask3.png" name="mask" onclick="formComplete();">
                <label for="mask_c"><img src="yama_mask3.png"></label>
                </div>
            </div>
            <div id="namiList">
            <p><img src="caption2.png" id="caption_img"></p>
                <div class="img_choice">
                <input id="mask_d" type="radio" value="nami_mask1.png" name="mask" onclick="formComplete();">   
                <label for="mask_d"><img src="nami_mask1.png"></label>
                <input id="mask_e" type="radio" value="nami_mask2.png" name="mask" onclick="formComplete();">
                <label for="mask_e"><img src="nami_mask2.png"></label>
                <input id="mask_f" type="radio" value="nami_mask3.png" name="mask" onclick="formComplete();">
                <label for="mask_f"><img src="nami_mask3.png"></label>
                </div>
            </div>
            <div id="hashiList">
            <p><img src="caption2.png" id="caption_img"></p>
                <div class="img_choice">
                <input id="mask_g" type="radio" value="hashi_mask1.png" name="mask" onclick="formComplete();">   
                <label for="mask_g"><img src="hashi_mask1.png"></label>
                <input id="mask_h" type="radio" value="hashi_mask2.png" name="mask" onclick="formComplete();">
                <label for="mask_h"><img src="hashi_mask2.png"></label>
                <input id="mask_i" type="radio" value="hashi_mask3.png" name="mask" onclick="formComplete();">
                <label for="mask_i"><img src="hashi_mask3.png"></label>
                </div>
            </div>
        </div>
        <a id="chapter02Link" class="anchorLink"></a>
        <div id="prompt">
        <p><img src="caption3.png" id="caption_img"></p>
            <input type="textarea" id="text" name="text" size=80>
            <input type="button" onclick="recognition.start()" id="rec">
            <label for="rec"><img src="mic.png" id="micimg"></label>
            <input type="button" onclick="Form_Submit()" id="sub">
            <label for="sub"><img src="yajirushi.png" id="yaimg"></label>
        </div>
    </form>
    <div id="Loading">
        <div id="layer_board_bg"></div>
        <div id="loadings">
            <img src="1-4-loading.gif" class="loadimg">
            <p class="loadmsg">
            処理中...<br>
            しばらくお待ち下さい。
            </p>
        </div>
    </div>
    <footer>

    Copyright © 2023 KeMCo Reserved.
    
    </footer>
</body>

    
    
<!-- script
    ================================================== -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="audio.js"></script>
    <script type="text/javascript" src="dall-test.js"></script>