<?php
session_start();
// session_destroy();

require __DIR__ . "/vendor/autoload.php";

use App\Mahasiswa;

?>

<!DOCTYPE html>
<html>
<head>
	<title>PMB | MIT</title>
	<link rel="stylesheet" type="text/css" href="Asset/Css/style.css">
</head>
<body>
	<?php include 'View/Menu.php' ?>
	<section class="container">
		<article class="col col-1">
			<?php
				if (isset($_GET['page'])) { 
					switch ($_GET['page']) {
						case ($_GET['page']) == 'data' :
							include 'View/DataPeserta.php';
							break;
						case ($_GET['page']) == 'daftar' :
							include 'View/Pendaftaran.php';
							break;
						case ($_GET['page']) == 'login' :
							include 'View/Login.php';
							break;
					}
				}
			?>
		</article>
		<?php include 'View/Sidebar.php' ?>	
	</section>
</body>
</html>