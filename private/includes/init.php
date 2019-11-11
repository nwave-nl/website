<?php
require_once $CONFIG['PRIVATE'] . '/includes/functions.php';
require_once $CONFIG['PRIVATE'] . '/models/model.php';

/**
 * Onderstaande code zorgt ervoor dat als we in onze code een controller willen gebruiken bijv:
 *
 * $controller = new HomeController();
 *
 * Dat ze automatisch uit de juiste map wordt ingeladen
 * Als het een class met de naam 'Controller' aan het einde is dan laden we die uit de juiste map!
 **/
spl_autoload_register( function ( $className ) {
	global $CONFIG;
	$lastPart = substr( $className, - 10 );
	if ( $lastPart !== 'Controller' ) {
		return;
	}
	$fileName = $CONFIG['PRIVATE'] . sprintf( '/controllers/%s.php', $className );
	if ( ! is_readable( $fileName ) ) {
		throw new \Exception( 'Het bestand ' . $fileName . ' bestaat niet, maak dit bestand aan met de juiste class er in!' );
	}

	require_once $fileName;
} );


/**
 * Deze function zorgt ervoor dat de template engine code ingeladen wordt vanaf de juiste folder
 */
spl_autoload_register( function ( $class ) {
	global $CONFIG;

	// Template engine namespace prefix
	$prefix = 'League\\';

	// base directory for the namespace prefix
	$base_dir = $CONFIG['PRIVATE']. '/src/';

	// does the class use the namespace prefix?
	$len = strlen( $prefix );
	if ( strncmp( $prefix, $class, $len ) !== 0 ) {
		// no, move to the next registered autoloader
		return;
	}

	// replace the namespace prefix with the base directory, replace namespace
	// separators with directory separators in the relative class name, append
	// with .php
	$file = $base_dir . str_replace( '\\', '/', $class ) . '.php';

	// if the file exists, require it
	if ( file_exists( $file ) ) {
		require $file;
	}
} );