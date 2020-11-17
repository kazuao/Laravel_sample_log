# Laravel_sample_log

1. monologのインストール
- ```$ composer require monolog/monolog```
2. .envで以下を変更する
- ログ出力レベル
- ログ出力チャンネル
3. config/logging.phpで以下の項目を設定する
- ログ出力頻度
- アンダー出力レベル
- ログ出力先
4. config/app.phpでtimezoneを変更する
