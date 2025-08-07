<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="360" alt="Laravel Logo">
  </a>
</p>

<p align="center">
  <a aria-label="PHP version" href="#">
    <img src="https://img.shields.io/badge/php-^8.2-brightgreen.svg" alt="PHP Version">
  </a>
  <a aria-label="Laravel version" href="#">
    <img src="https://img.shields.io/badge/laravel-12.19.3-red.svg" alt="Laravel Version">
  </a>
  <a aria-label="License" href="https://opensource.org/licenses/MIT">
    <img src="https://img.shields.io/badge/license-MIT-blue.svg" alt="License">
  </a>
</p>

# KambioKreativo

KambioKreativo es una aplicación desarrollada en **Laravel 12** con PHP 8.3 que busca ofrecer soluciones web modernas, escalables y optimizadas.  
Su arquitectura aprovecha las herramientas nativas de Laravel para ofrecer un desarrollo rápido y seguro, integrando tecnologías de frontend con Node.js.

---

## Tabla de contenidos

- [Requisitos](#requisitos)
- [Instalación](#instalación)
- [Configuración](#configuración)
- [Comandos útiles](#comandos-útiles)
- [Dependencias](#dependencias)
- [Ejecución en desarrollo](#ejecución-en-desarrollo)
- [Testing](#testing)
- [Versiones](#versiones)
- [Licencia](#licencia)

---

## Requisitos

- **PHP** ^8.2 (en el servidor actual: 8.3.6)
- **Composer**
- **Node.js** 20+
- SQLite / MySQL (o el motor configurado en `.env`)
- Extensiones PHP: `pdo`, `mbstring`, `openssl`, `tokenizer`, `ctype`, `json`, `bcmath`

---

## Instalación

Clonar el repositorio:

```bash
git clone https://github.com/Gonzalez-JuanSebastian/KambioKreativo.git
cd KambioKreativo

# Instalar dependencias de Composer
composer install

# Instalar dependencias de Node.js
npm install

# Copiar el archivo .env.example a .env JuanSeCoal1.
cp .env.example .env

# Generar la clave de aplicación
php artisan key:generate