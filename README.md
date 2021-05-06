# MVCSTACK

Simple PHP MVC framework.

## Installation

1. Download the latest version of [MVCSTACK](https://github.com/Haqimzuhari/mvcstack/archive/refs/heads/master.zip).
2. Extract and rename to title to your project.
3. Place anywhere in your favorite directory or in your local server directory such as `htdoc` for XAMPP.
4. Copy file `env.php.example` and rename it to `env.php`.
5. Edit `env.php` file.
```php
/* GENERAL */
define('URL', '/'); // If you're using Xampp, change to your folder name such as /mvcstack/
define('TITLE','MVCSTACK'); // Your desired default title


/* DATABASE */
define('DB_CONNECTION', 'mysql');
define('DB_HOST', '127.0.0.1'); // DB Host
define('DB_USER', 'root'); // DB username
define('DB_PASS', 'P@ssw0rd'); // DB password
define('DB_NAME', 'mvcstack'); // DB name
```
6. Restore database using given default mysql database file `database.sql`.
7. Try run on your browser or just `npm run serve` or `npm run serve --port=your-port`.

## Default CSS Framework

MVCSTACK using [TailwindCSS](https://tailwindcss.com/) as default CSS Framework. This framework is installed using `npm` and can use `@apply` function for pre-build classes.

## Default Javascript Framework

MVCSTACK using [AlpineJS](https://github.com/alpinejs/alpine) as default javascript framework.

## Default Fonts & Icons
1. MVCSTACK using google font `Karla` for sans and `Lora` for serif as default font-family.
2. MVCSTACK using `Material Icons` as default icon family

## Simple but reliable
#### Easy access model
```php
public static function profile($id)
{
    $query = "select * from `profiles` where `user_id` = '".$id."'";
    return (new self)->first($query);
}
```
You can access `profile` from `users` class from anywhere.
```php
<p>First Name: <?= Users::profile($user->id)?></p>
```

#### Component solution for repeatable design
On your `view` page
```php
<?php Component::start('buttons.modal-trigger', ['class' => 'button primary']) ?>
    Open Modal
<?php Component::end() ?>
```

On your `components/buttons/model-trigger.php` page
```html
<button 
    type="button" 
    class="transition duration-300 ease-in-out focus:outline-none <?= $class ?>">
    @content
</button>
```