# vk-super-global-navigation

## これは何？

https://www.vektor-inc.co.jp/
ベクトルオフィシャルサイト用のスーパーグローバルメニューです。

* 内部用なので項目変更機能はなくても可
* wp_footer() に対してHTML出力で良いのではないかと
* モバイル固定ナビと違ってfixedにしなくてOK（というかfixedにするとモバイル固定ナビと被る）
* プラグインで出来ています

## 将来的な想定

* [外観]-[メニュー]から設定できると汎用性があるのでは

パッケージのインストール
```
$ npm install
```

sassの監視を開始します。
```
$ npm run watch
``` 

## develop branch
develop ブランチに push すると自動でテストサーバー https://vk-block-test.vs4.nagoya/ にデプロイされます。