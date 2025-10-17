# 🧩 Proyecto CRUD con Laravel 

Proyecto de gestión de inventario desarrollado con **Laravel**, usando **Eloquent ORM** y **Livewire** para el buscador dinámico.  
Incluye funciones básicas de un CRUD: crear, listar, editar y eliminar registros.

---

## 📥 Clonar el repositorio

Clona el proyecto desde GitHub:

```bash
git clone https://github.com/Juanpa2327/juanpablo_crud.git
```

<img width="1414" height="730" alt="image" src="https://github.com/user-attachments/assets/d0bbbe10-721c-41ff-86be-8b25702a0ac0" />


---

## ⚙️ Configuración inicial

Entra al proyecto e instala las dependencias:

```bash
cd juanpablo_crud
composer install
```

## 🗄️ Base de datos

Crea una base de datos en MySQL y configura el archivo `.env` con tus datos:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=juanpablo_crud
DB_USERNAME=root
DB_PASSWORD=
```

Luego ejecuta las migraciones:

```bash
php artisan migrate
```

<img width="1429" height="717" alt="image" src="https://github.com/user-attachments/assets/9c7cb768-58d6-4fdc-9fd9-590ae0da5a92" />

---

## 🚀 Iniciar el servidor

Ejecuta el proyecto en un servidor local:

```bash
php artisan serve
```

Abre en tu navegador:

👉 [http://127.0.0.1:8000](http://127.0.0.1:8000)

---

## 🧭 Navegación del sistema

El sistema cuenta con tres secciones principales:

1. 🗂️ Administración del inventario  
2. 🔄 Repositorio de cambios  
3. 🔍 Buscador automático con Livewire  

<img width="1439" height="803" alt="image" src="https://github.com/user-attachments/assets/d821b795-db6d-4f7b-8804-1e04f55f8e9e" />


Cada sección permite gestionar, visualizar y buscar registros de manera dinámica.

<img width="1434" height="733" alt="image" src="https://github.com/user-attachments/assets/f6093ea3-8a87-4832-8506-a5c62436192c" />

<img width="1440" height="738" alt="image" src="https://github.com/user-attachments/assets/5fc77caa-a71a-45b7-8411-0402f92e8c02" />

---

## 💡 Tecnologías utilizadas

| Tecnología | Descripción |
|-------------|-------------|
| 🐘 PHP 8 | Lenguaje principal |
| ⚙️ Laravel 10| Framework backend |
| 💾 MySQL | Base de datos |
| ⚡ Livewire | Interactividad dinámica |
| 🎨 Blade | Motor de plantillas |
| 🧰 Composer | Gestor de dependencias |

---

## 👨‍💻 Autor

**Juan Pablo Acosta**  
📧 [Perfil de GitHub](https://github.com/Juanpa2327)

---










<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>



The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
