# WorldPlace
WordPress データベースを使用した Laravel の WordPress 風の CMS です。

## セットアップ
```bash
composer install
cp .env.example .env
vim .env
php artisan key:generate
php artisan migrate --seed
```

## ユニットテスト
`php artisan config:cache` を行なっている場合は、 `php artisan config:clear` を実行してからテストを実施してください。

```bash
vendor/bin/phpunit
```

## コードの静的解析
```bash
php artisan code:analyse
```

## コードの自動整形
```bash
vendor/bin/php-cs-fixer fix
```
