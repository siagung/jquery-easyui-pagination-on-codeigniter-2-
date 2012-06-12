# Example - Codeigniter ajax pagination with jquery easyui

## What's this

Integration CodeIgniter(+2.0) and jquery easyui pagination.

## Installation

1. Download the latest version of [jquery easyui](http://www.jeasyui.com) 
2. Unzip the package to assets folder OR in /assets folder i was include [jQuery EasyUI 1.2.2]
3. Copy the application folder content to your CI application folder.
4. Copy the assets folder to your CI folder.
5. Copy the .htaccess file to your CI folder.
6. Install database schema (barang.sql) into your MySQL database.

That's it!

## Settings

### application/config/routes.php

  $route['default_controller'] = "barang_ctl";
  
#### Don't forget to setup database configuration

*add CRUD function -> https://github.com/siagung/CRUD_dengan_jquery_dan_codeigniter