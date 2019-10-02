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

## データベースの復元

https://github.com/TakahashiIkki/osc2019-nigata-demo/releases/tag/1.0 
ここにある pg_dump.zip をダウンロードしてみてください。

場所を移動させて postgres/tmp/ の中で解凍をして貰えればOKです。

↓ その後、Dockerを起動させるとこの状態になる。
```
root@58da2a0c083e:/opt/postgres# ls 
pg.dump
```

docker の中に入って以下のコマンドで解凍が出来ます。
```
pg_restore -U osc_user -d osc_demo -Fc pg.dump
```

## デモ内容

- テーブルにインデックスを貼ってSQLの高速化をしてみよう。
- Explainを使って何がどう変わったのか、みてみよう。

[作業手順書](https://github.com/TakahashiIkki/osc2019-nigata-demo/blob/master/DEMO.md)
