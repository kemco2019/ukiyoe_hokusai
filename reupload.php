<link rel="stylesheet" href="midjourney5.css">
<?php
    $host = "mysql57.kemco.sakura.ne.jp";
    $dbName = "kemco_ukiyoe";
    $username = "kemco";
    $password = "h76-id_z";
    $dsn = "mysql:host={$host};dbname={$dbName};charser=utf8";
    try {
        $dbh = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    if (is_null(@$_POST["image"])){
        echo "nullです";
    }else{
        //$data = file_get_contents($_POST["image"]);
        $image_name = uniqid(mt_rand(), true);
        $image_name .= '.jpg';
        $img = imagecreatefrompng($_POST["image"]);//画像取得
        ///元画像のサイズ
        $origin_width=512;
        $origin_height=512;
        //リサイズ後のサイズ
        $width=512;
        $height=512;
        ///まずは、変更先の画像のサイズで空画像をつくります
        $make_image=imagecreatetruecolor($width,$height);
        //空の画像にオリジナルの画像を座標をあわせてのせます
        $make_result=imagecopyresized(
        $make_image,///空の画像を指定
        $img,///元画像を指定
        0,0,///空画像の左上の座標を指定
        0,0,///コピー元の座標
        $width,$height,//空画像の幅、高さ
        $origin_width,$origin_height///コピー元の幅、高さ
        );
        $file = "images/$image_name";
        imagejpeg($make_image, $file);
        //file_put_contents($file,$data);
        $sql = "INSERT INTO ukiyoe2023_hokusai (path)  VALUES (:file)";
        $stmt = $dbh->prepare($sql);
        $stmt->bindValue(':file', $file, PDO::PARAM_STR);
        $stmt->execute();
        $message = 'アップロードが完了しました';
        #echo $message;
        echo '<div class="text">';
        echo $message;
        echo '</div>';
    }
?>
<!-- <a href="http://localhost:8080/workspace/kemco/ukiyo-e/start.php" class="btn_03">戻る</a> -->
<a href="https://studio.kemco.keio.ac.jp/ukiyoe2023/reupload_submit.php" class="btn_03">戻る</a>