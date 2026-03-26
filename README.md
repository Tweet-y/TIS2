# TIS2
Proyecto para clases de TIS2

## Descripción
Aplicación Laravel utilizada en ejercicios y prácticas de la materia TIS2.

## Requisitos
- PHP >= 8.0
- Composer
- Node.js + npm
- Extensiones PHP comunes: `pdo`, `mbstring`, `openssl`, `tokenizer`, `xml`

## Instalación (primer entorno)
Ejecutar en la raíz del proyecto:

```bash
git clone <repo> .
composer install
copy .env.example .env   # Windows PowerShell: Copy-Item .env.example .env
php artisan key:generate
npm install
npm run build   # para producción
```

## Desarrollo (modo local)
Para desarrollo con hot reload:

```bash
npm install
npm run dev
php artisan serve --host=127.0.0.1 --port=8000
```

Si `npm run dev` falla en PowerShell por políticas de ejecución, usa una de estas opciones:

```powershell
# Ejecutar desde CMD
cmd /c "npm run dev"
# Usar el ejecutable npm.cmd
npm.cmd run dev
# O lanzar con política temporalmente ignorada
powershell -ExecutionPolicy Bypass -Command "npm run dev"
```

## Comandos útiles
- Generar key: `php artisan key:generate`
- Limpiar/autoload: `composer dump-autoload`
- Migraciones fresh: `php artisan migrate:fresh`

## Solución de problemas comunes
- Error "Failed to open stream: No such file or directory" para `vendor/autoload.php`: ejecutar `composer install`.
- Error 500 / MissingAppKeyException: comprobar que existe `.env` y que `APP_KEY` está presente; si no, copiar `.env.example` y ejecutar `php artisan key:generate`.
- Logs de Laravel: `storage/logs/laravel.log`.

## Estructura rápida
- Rutas principales: consulte `routes/web.php` y `routes/settings.php`.
- Views y frontend: `resources/js` y `resources/views`.

## Notas
- El proyecto usa (opcional) Laravel Passport para APIs.

---
Si quieres, puedo aplicar los pasos de instalación aquí o ejecutar `php artisan key:generate` por ti.