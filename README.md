# 勤怠管理アプリ
![stamp](https://github.com/user-attachments/assets/6982dc8f-69c1-4285-8e7e-e965570cc827)
## 作成した目的


## アプリケーションURL

開発環境：http://localhost/

phpMyAdmin:：http://localhost:8080/


## 機能一覧
会員登録,ログイン,ログアウト,勤務開始,勤務終了,休憩開始,休憩終了,日付別勤怠情報取得


## 使用技術（実行環境）
Laravel 8.x、PHP 8.2、docker、laravel-fortify、javascript

## ER図


## テーブル設計



# 環境構築
## Dockerビルド

1. git@github.com:fukumamire/Attendance_Fortify.git
2. DockerDesktopアプリを立ち上げる
3. docker-compose up -d --build

## Laravel環境構築
1. ```docker-compose exec php bash```
2. ```composer install```
3. 必要に応じて.envファイルを作成し作成した際は以下の環境変数を追加
``` DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel_db
DB_USERNAME=laravel_user
DB_PASSWORD=laravel_pass 
```
4. アプリケーションキーの作成
``` php artisan key:generate```

5. マイグレーションの実行
``` php artisan migrate ```

6. シーディングの実行
``` php artisan db:seed ```


## アカウントの種類（テストユーザー）