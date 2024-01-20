<?php
$lastCheckIn = date('Y-m-d', strtotime(file_get_contents(__DIR__ . '/timestamp.txt')));
$lastMonth = date('Y-m-d', strtotime('-1 month'));

if ($lastCheckIn < $lastMonth) {
	echo 'Activate dead man switch';

	mail(
		'email@example.com',
    'Please open this',
    'If you read this message, it probably means I am dead'
  );
} else {
	echo 'Still alive';
}
