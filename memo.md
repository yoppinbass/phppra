PHP Hypertext Preprocessor

Webサーバをちゃんと用意していなくてもphpにあるビルトインサーバが使える
$ php -S localhost:8888
=> コマンドをたたいたディレクトリにindex.phpがあればそこをみてくれる

$ php -i | grep php.ini
=> 設定ファイルのありかを示す

サーバのことがよくわからんのでそこから勉強したい

[この一冊で全部わかる サーバーの基本]
[ゼロからはじめるLinuxサーバー構築・運用ガイド]

コーディング規約
PSR (PHP Standards Recommendations)
- 文字コードはutf-8
- ファイル末尾の終了タグ(?>)は省略
- インデントは空白4文字
- クラス名はPascal, メソッドはcamelCase
- プロパティ名はPascal/camelCase/アンダースコアいずれかで一貫していること
- クラス定数はすべて大文字、区切りはアンダースコア
- すべてのプロパティ/メソッドにアクセス修飾子をつける
- abstract, final修飾子はアクセス修飾子よりも前に記述

$ php -a
=> interactive shell が使える
セミコロン必須なので気をつけること
