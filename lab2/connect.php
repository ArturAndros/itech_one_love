<?php
			// phpinfo();
			require 'vendor/autoload.php'; // подключаем автоподгрузчик классов Composer
			$client = new MongoDB\Client("mongodb://localhost:27017");
			$collection = $client->antdbforlab->schedule;

?>
