function formSwitch() {
    hoge = document.getElementsByName('maker');
    console.log(hoge);
    location.href="dalle-image-select.php#chapter01Link";
    // 元画像が選択されたらそれぞれのリストを表示する
    if (document.getElementById("image_a").checked) {
        document.getElementById('yamaList').style.display = "";
        document.getElementById('namiList').style.display = "none";
        document.getElementById('hashiList').style.display = "none";
    } else if (document.getElementById("image_b").checked) {
        document.getElementById('yamaList').style.display = "none";
        document.getElementById('namiList').style.display = "";
        document.getElementById('hashiList').style.display = "none";
    } else if (document.getElementById("image_c").checked) {
        document.getElementById('yamaList').style.display = "none";
        document.getElementById('namiList').style.display = "none";
        document.getElementById('hashiList').style.display = "";
    } else {
        document.getElementById('yamaList').style.display = "none";
        document.getElementById('namiList').style.display = "none";
        document.getElementById('hashiList').style.display = "none";
        }
    };
    function formComplete(){
        location.href="dalle-image-select.php#chapter02Link";
        document.getElementById("prompt").style.display = "block";
        console.log("checked");
    }
    function Form_Submit(){
        document.forms["addForm"].submit();  //フォーム内容を送信します。
          /*メッセージを非表示状態から表示状態へ変更します。 
          メッセージを表示してからSubmitを行うとGIFアニメが再生されないため、
          Submitしてからメッセージを表示しています。*/
        document.getElementById("Loading").style.display = "flex";
        document.getElementById("layer_board_bg").style.display = "flex";
  };
    window.addEventListener('load', formSwitch());
    
