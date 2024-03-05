<?php
// 文字コード設定
header('Content-Type: text/html; charset=UTF-8');

// numパラメータにセットする値
//$num = 10;
// WebAPIのURL
$url = "https://kemco:objecthub@stg.objecthub.keio.ac.jp/open_koh/object?api_key=03992c2147fd6680f0f09cd30d9b5856dR8AtIcEeSem0wxiONNeEeibOibibsbb";
// URLの内容を取得し、json形式からstdClass形式に変換し取得
//$data2 = json_decode(file_get_contents($url));
//echo $data2->datas->{0}->manifest->{2.1};
// 連想配列で取得したかったら第二引数にtrueを指定↓
$data = json_decode(file_get_contents($url), true);
for ($i = 0 ; $i < 100 ; $i ++){
$image_path = $data["datas"][$i]["images"][0]["url"]["small"];
$koh_path = $data["datas"][$i]["kohurl"];
$creator = $data["datas"][$i]["meta"]["creator"]["value"][0]["name"];
$title = $data["datas"][$i]["meta"]["title"]["value"];
$mani = $data["datas"][$i]["manifest"]["2.1"];
//echo $mani;
?>
<html>
<img src=<?php echo $image_path; ?> alt="">
<p><a href="<?php echo $koh_path; ?>">KOH URL</a></p>
<p>制作者：<?php echo $creator; ?></p>
<p>作品名：<?php echo $title; ?></p>
<p>--------------------------------------------</p>
</html>
<?php } ?>