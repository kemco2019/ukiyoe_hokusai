<link rel="stylesheet" href="css/dalle-form-submit.css">
<body>
    <p><img src="images/kansei.png"></p>
<?php
$text = $_POST['text'];
$origin = $_POST['maker'];
$mask = $_POST['mask'];
//echo $origin;
$a = $text;
$command = 'python3 dalle-test.py "' . $a . '" "' . $origin . '" "' . $mask . '"';
//echo $command;
exec($command, $output, $state);
$img_src = $output[0];
$img_url = $output[1];
//echo $state;
echo '<p><img src=';
echo $img_src;
echo ' ></p>';

?>


<a href="http://127.0.0.1:8080/dalle-image-select.php" class="btn_03">やり直す</a>

<form action="https://studio.kemco.keio.ac.jp/ukiyoe2023/test.php" method="post" name="Form1" enctype="multipart/form-data">
    <input type="hidden" name="image" value=<?php echo $img_url ?> >
    <input type="submit" name="upload" value="保存" class="btn_03">
</form>
</body>

<style>
body {
    background-color: rgba(0, 0, 0, 0.5);
    background-image: url("images/H21.jpg");
    
}
p{
    text-align: center;
    width: 100%;
}
img{
    width:50%;
}
.btn_03 {
	display: block;
	text-align: center;
	vertical-align: middle;
	text-decoration: none;
	width: 120px;
	margin: auto;
	padding: 1rem 4rem 1rem 4rem;
	font-weight: bold;
	border: 2px solid #4E78BC;
	color: #4E78BC;
	border-radius: 100vh;
	transition: 0.5s;
    background: #fff;
}
.btn_03:hover {
	color: #fff;
	background: #4E78BC;
}
</style>
