const fetchForm = document.querySelector('.fetchForm');
const btn = document.querySelector('.btn');
const url = 'https://studio.kemco.keio.ac.jp/ukiyoe2023/test.php';
//const file = makeFile("image/dalle.png");// imgデータをfileに変換する処理
//console.log(file);
const csvFile = new File([csvBlob], 'ダミーファイル名.csv', {type: "text/plain"});