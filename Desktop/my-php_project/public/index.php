<?php

declare(strict_types=1);

$root = dirname(__DIR__) . DIRECTORY_SEPARATOR;

define('APP_PATH', $root . 'app' . DIRECTORY_SEPARATOR);
define('FILES_PATH', $root . 'transaction_files' . DIRECTORY_SEPARATOR);
define('VIEWS_PATH', $root . 'views' . DIRECTORY_SEPARATOR);

var_dump(FILES_PATH);

require_once(APP_PATH . 'App.php');


$transactions = getTransactions(); // Fetch transaction data

$totals = calculateTotals($transactions);


require_once(VIEWS_PATH . 'transactions.php');
