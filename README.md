# VILT Stack Backup Module

Backup module for VILT Stack build with [spatie laravel-backup](https://spatie.be/docs/laravel-backup/v8/introduction)

## Install

```bash
composer require 3x1io/backup-module
```
Add Module to `modules_statuses.json` if not exists

```json
{
    "Backup": true
}
```

if you are using bin on another path like on macOS `brew` use this on `.env`
```dotenv
DB_BINARY=/opt/homebrew/bin
```

and add this to `config/database.php` inside your database connection name

```php
'dump' => [
    'dump_binary_path' => env('DB_BINARY'),
],
```

```bash
php artisan config:clear
```

Publish Assets

```bash
yarn
```

```bash
yarn build
```

## Support

you can join our discord server to get support [VILT Stack](https://discord.gg/HUNYbgKDdx)

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [Fady Mondy](https://github.com/3x1io)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

