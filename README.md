
# Postback API Proxy

Laravel приложение для проксирования запросов к API постбэка SMS.

## Установка

1. Клонируйте репозиторий и перейдите в папку проекта:

   ```bash
   git clone <репозиторий>
   cd postback-api-proxy
   ```

2. Установите зависимости через Composer:

   ```bash
   composer install
   ```

3. Скопируйте `.env` файл:

   ```bash
   cp .env.example .env
   ```

4. Настройте переменные окружения `.env`:

   ```dotenv
   POSTBACK_API_TOKEN=5994c91001f57
   POSTBACK_API_URL=https://postback-sms.com/api/
   ```

5. Запустите встроенный сервер разработки:

   ```bash
   php artisan serve
   ```

## Использование

Маршруты API:

- `GET /api/getNumber`: Получение номера телефона.
- `GET /api/getSms`: Получение SMS для номера.
- `GET /api/cancelNumber`: Отмена номера.
- `GET /api/getStatus`: Получение статуса активации.

Пример запроса:

```bash
curl -X GET "http://127.0.0.1:8000/api/getNumber?country=se&service=wa"
```

## Тестирование

Для запуска тестов выполните:

```bash
php artisan test
```

## Примечания

Laravel 11 использует обновленную структуру маршрутов. Убедитесь, что `routes/api.php` подключен через `web.php`.
