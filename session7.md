### Instalar el paquete de lenguajes 

# 1. Publicar el directorio lang
```bash
    php artisan lang:publish
```

# 2. Instalamos ei paquete Laravel Lang
```bash
    composer require laravel-lang/common --dev
```

# 3. Agregamos el idioma español
```bash
    php artisan lang:add es
```

# 4. Actualizamos el paquete de idiomas

```bash
    php artisan lang:update
```
### Ahora trabajaremos en el login

# 1. Creamos un seeder
```bash
    php artisan make:seeder UserSeeder
```

# 2. Refrescamos el seeder
```bash
    php artisan make:fresh --seed
```