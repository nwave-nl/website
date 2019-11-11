<?php

function dbConnect() {

	$config = require __DIR__ . '/config.php';

	try {
		$dsn = 'mysql:host=' . $config['DB_HOST'] . ';dbname=' . $config['DB_NAME'];

		$pdo = new PDO( $dsn, $config['DB_USER'], $config['DB_PASSWORD'] );

		$pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
		$pdo->setAttribute( PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC );

		return $pdo;

	} catch ( \PDOException $e ) {
		echo 'Fout bij maken van database verbinding: ' . $e->getMessage();
	}

}

function getDescription() {
    return "";
}
function getTitle() {
    return "";
}
function getAuthor() {
    return "";
}
function getKeywords()
{
    return "";
}

/**
 * Geeft de juiste URL terug voor het opgegeven path
 * Bijvoorbeeld voor de homepage: echo url('/');
 *
 * @param $path
 *
 * @return string
 */
function url( $path ) {
	global $CONFIG;

	return $CONFIG['BASE_URL'] . $path;
}

function image( $path ) {
    global $CONFIG;

    return $CONFIG['BASE_URL'] . '/public/images/' . $path;
}

function css( $path ) {
    global $CONFIG;

    return $CONFIG['BASE_URL'] . '/public/css/' . $path . '.css';
}

function js( $path ) {
    global $CONFIG;

    return $CONFIG['BASE_URL'] . '/public/js/' . $path . '.js';
}

/**
 * Hier maken we de template engine aan, we geven de template engine het pad naar onze views (templates)
 * @return \League\Plates\Engine
 */
function get_template_engine() {
	global $CONFIG;

	$templates_path  = $CONFIG['PRIVATE'] . '/views';
	$template_engine = new League\Plates\Engine( $templates_path );

	return $template_engine;

}

?>