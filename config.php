<?php
// Site Path
define( 'CLASS_PATH', realpath( dirname( __FILE__ ) . '/classes' ) );
define( 'SERVICE_PATH', realpath( dirname( __FILE__ ) . '/services' ) );
require CLASS_PATH . '/Config.php';
// DB Config
Config::write( 'db.host', 'localhost' );
Config::write( 'db.basename', 'databasetheater' );
Config::write( 'db.user', 'root_123' );
Config::write( 'db.password', '1234567890' );