<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/dalle-test.css">

    

</head>
<body>
    <header>
        <div class="commonContent">
            <img src="images/kemlogo.png" id="kemlogo">
        <div class="top_images">
            <img src="images/title_hokusai.png">
        </div>
        </div>

    </header>
    <form action="dalle-form-submit.php" method="post" name="addForm">
        <div class="choices">
            <p><img src="images/caption1.png" id="caption_img"></p>
            <div class="img_choice">
            <input id="image_a" type="radio" value="images/yama.png" name="maker" onclick="formSwitch();">
            <label for="image_a"><img src="images/yama.png"></label>
            <input id="image_b" type="radio" value="images/nami.png" name="maker" onclick="formSwitch();">
            <label for="image_b"><img src="images/nami.png"></label>
            <input id="image_c" type="radio" value="images/hashi.png" name="maker" onclick="formSwitch();">
            <label for="image_c"><img src="images/hashi.png"></label>
            </div>
        </div>
        <a id="chapter01Link" class="anchorLink"></a>
        <div class="choices">
            <div id="yamaList">
            <p><img src="images/caption2.png" id="caption_img"></p>
                <div class="img_choice">
                <input id="mask_a" type="radio" value="images/yama_mask1.png" name="mask" onclick="formComplete();">   
                <label for="mask_a"><img src="images/yama_mask1.png"></label>
                <input id="mask_b" type="radio" value="images/yama_mask2.png" name="mask" onclick="formComplete();">
                <label for="mask_b"><img src="images/yama_mask2.png"></label>
                <input id="mask_c" type="radio" value="images/yama_mask3.png" name="mask" onclick="formComplete();">
                <label for="mask_c"><img src="images/yama_mask3.png"></label>
                </div>
            </div>
            <div id="namiList">
            <p><img src="images/caption2.png" id="caption_img"></p>
                <div class="img_choice">
                <input id="mask_d" type="radio" value="images/nami_mask1.png" name="mask" onclick="formComplete();">   
                <label for="mask_d"><img src="images/nami_mask1.png"></label>
                <input id="mask_e" type="radio" value="images/nami_mask2.png" name="mask" onclick="formComplete();">
                <label for="mask_e"><img src="images/nami_mask2.png"></label>
                <input id="mask_f" type="radio" value="images/nami_mask3.png" name="mask" onclick="formComplete();">
                <label for="mask_f"><img src="images/nami_mask3.png"></label>
                </div>
            </div>
            <div id="hashiList">
            <p><img src="images/caption2.png" id="caption_img"></p>
                <div class="img_choice">
                <input id="mask_g" type="radio" value="images/hashi_mask1.png" name="mask" onclick="formComplete();">   
                <label for="mask_g"><img src="images/hashi_mask1.png"></label>
                <input id="mask_h" type="radio" value="images/hashi_mask2.png" name="mask" onclick="formComplete();">
                <label for="mask_h"><img src="images/hashi_mask2.png"></label>
                <input id="mask_i" type="radio" value="images/hashi_mask3.png" name="mask" onclick="formComplete();">
                <label for="mask_i"><img src="images/hashi_mask3.png"></label>
                </div>
            </div>
        </div>
        <a id="chapter02Link" class="anchorLink"></a>
        <div id="prompt">
        <p><img src="images/caption3.png" id="caption_img"></p>
            <input type="textarea" id="text" name="text" size=80>
            <input type="button" onclick="recognition.start()" id="rec">
            <label for="rec"><img src="images/mic.png" id="micimg"></label>
            <input type="button" onclick="Form_Submit()" id="sub">
            <label for="sub"><img src="images/yajirushi.png" id="yaimg"></label>
        </div>
    </form>
    <div id="Loading">
        <div id="layer_board_bg"></div>
        <div id="loadings">
            <img src="images/1-4-loading.gif" class="loadimg">
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
    <script type="text/javascript" src="js/audio.js"></script>
    <script type="text/javascript" src="js/dall-test.js"></script>
