# osc2019-nigata-demo

## これは何のレポジトリ？

これは [オープンソースカンファレンス 2019 Shimane](https://ospn.connpass.com/event/145108/) に使用するデモ用のレポジトリです。

## 起動の方法

```
$ git clone git@github.com:TakahashiIkki/osc2019-nigata-demo.git

$ cd osc2019-nigata-demo

$ docker volume create --name test_db
$ docker-compose up --build -d
```

## デモ内容

- テーブルにインデックスを貼ってSQLの高速化をしてみよう。
- Explainを使って何がどう変わったのか、みてみよう。

[作業手順書](https://github.com/TakahashiIkki/osc2019-nigata-demo/blob/master/DEMO.md)