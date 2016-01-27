<?php

use lib\Config;

// DB Config
Config::write('db.host', 'localhost');
Config::write('db.basename', 'library');
Config::write('db.user', 'root');
Config::write('db.password', '');
Config::write("db.charset",'utf8');

// Project Config
Config::write('path', 'http://localhost/slimMVC');