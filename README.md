# ピリカスクプオリジナルアプリ

## アプリ名

タビスケ

<br>

## 概要

旅行計画を作成するアプリです。

<br>

### データベースとユーザーを作成するSQL

```sql
-- DBの作成
CREATE DATABASE IF NOT EXISTS org_app;

-- 作業ユーザーの作成とパスワードの設定
CREATE USER IF NOT EXISTS ky_test IDENTIFIED BY '1234';
GRANT ALL ON org_app.* TO ky_test;
```

<br>

### テーブル作成プログラムの実行コマンド

以下のコマンドを実行して、テーブルをセットアップします。

```bash
$ docker-compose exec app php db/db_setup.php
```
