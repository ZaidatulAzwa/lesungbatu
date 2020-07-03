<?php

require_once __DIR__ . '/Dedelang/Command/Invok.php';

require_once __DIR__ . '/Dedelang/Engine/DotEnv/CmdEnv.php';

CmdEnv::Load('vendor/.env');

(!isset($argv[1])? die("Error commmand zeref"):'');

($argv[1]==="start-project"? Invok::start():'');

($argv[1]==="-m" || $argv[1]==="module" ? Invok::module($argv[2]):'');

($argv[1]==="make:auth" || $argv[1]==="Make:Auth" ? Invok::createdTable():'');
// echo getenv('DB_HOST');
