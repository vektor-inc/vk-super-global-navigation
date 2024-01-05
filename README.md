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

## 利用中のサイト
スーパーグローバルメニューは下記サイトに導入されています。

### 主要なサービス
* [コーポレート](https://www.vektor-inc.co.jp/)
* [ベクトレ](https://training.vektor-inc.co.jp/)
* [パターンライブラリ](https://patterns.vektor-inc.co.jp/)
* [VWS](https://vws.vektor-inc.co.jp/)
* [Lightning](https://lightning.vektor-inc.co.jp/)

### デモサイト
* [Lightning G3](https://demo.dev3.biz/lightning-g3/)
* [Lightning + Pro機能](https://demo.dev3.biz/lightning-g3-pro/)
* [Lightning + Pro機能（法律事務所）](https://demo.dev3.biz/law/)
* [Lightning + Pro機能（学習塾）](https://demo.dev3.biz/cramschool/)
* [Lightning + Pro機能（訪問介護サービス）](https://demo.dev3.biz/cramschool/)
* [Lightning + Pro機能（採用情報）](https://demo.dev3.biz/recruit/)
* [和風デザイン vekuan](https://demo.dev3.biz/vekuan/)
* [あえて背景をずらしたデザイン Evergreen](https://demo.dev3.biz/evergreen/)
* [サンプル工務店](https://demo.dev3.biz/architect/)
* [X-T9 フルサイト編集機能に対応した WordPress ブロックテーマ](https://x-t9.vektor-inc.co.jp/)