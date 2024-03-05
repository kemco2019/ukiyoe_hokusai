# AI北斎
北斎の画像に好きなものを書き加えた画像を生成

画像生成AI：　DALLE（OpenAI社）

参考URL: https://studio.kemco.keio.ac.jp/ukiyoe2023/hokusai_ichiran

# 概要
## ローカル
- dalle-image-select.php: 画像選択・pythonに送信用ページ
- dalle-form-submit.php: 画像表示・保存ボタンページ
- dalle-test.py: 画像生成用コード
- css, images, jsフォルダを同一階層に

## サーバ
- dalle-complete.php: 画像サーバ保存用ページ

# 使用方法
## データベース作成
テーブル：ukiyoe2023_hokusai

| 名前 | タイプ | 照合順序 | デフォルト値 | その他 |  
| -------- | -------- | ------------------ | ----------------- | -------------- |
|    id    |   int    |  　|  | AUTO_INCREMENT |
|   path   |   text   | utf8mb4_general_ci |  |  |
| datetime | datetime |  | CURRENT_TIMESTAMP |  |

## API Keyの発行
1. [OpenAI](https://platform.openai.com/api-keys)のサイトにアクセス
2. API Keyを取得

## コード編集
dalle-test.py: 14行目にAPI-Keyを入力

## 実行
0. dalle-test.pyらと同じディレクトリに移動後、ローカルサーバを起動
   ```
   php -S 127.0.0.1:8080
   ```
1. 画像を順番に選ぶ
2. 書き込みたいものを入力orマイクボタンを押してから音声入力
3. →を押して画像生成
4. 保存
