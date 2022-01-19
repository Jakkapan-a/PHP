<?php

require_once __DIR__ .'/load_dir.php';
// Load all files in the directory
require_auto_dir::auto_load('/module');
require_auto_dir::auto_load('/controller');
// Web page
require_once __DIR__ .'/web.php';

