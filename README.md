<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Simple PHP Laravel Backend APi

This is a simple PHP Laravel backend for a product application.

### Endpoints

_product/all_ Returns a list of all products in the database.

_product/delete/id_ Deletes a product from the database.

_product/create_ Creates a new product.

### Response

_product/create_

```js
 {data:[created product object details], message:"Product created successfully", status_code:201}
```

_product/delete/id_

```js
 {message:"Product deleted successfully", status_code:200}
```

_product/all_

```js
 {data:[all products in the databases], status_code:200}
```
