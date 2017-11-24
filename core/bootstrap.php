<?php

define("APP_PATH", dirname(dirname(__FILE__)));
define("SITE_ROOT", dirname($_SERVER['PHP_SELF']));

extract(include('../config.php'));
new MysqliDb ($database['host'], $database['user'], $database['password'], $database['database']);
