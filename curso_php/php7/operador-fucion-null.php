<? 

//$nombre = isset($_GET['nombre']) ? $_GET['nombre'] : 'Anonimo';

$nombre = isset($_GET['nombre']) ?? 'Anonimo';

echo $nombre