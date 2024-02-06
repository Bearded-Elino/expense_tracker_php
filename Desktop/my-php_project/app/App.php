<?php

declare(strict_types=1);


function getTransactions(): array {
    $transactions = [];
    $file = FILES_PATH . 'sample_1.csv';

    // Check if the file exists
    if (file_exists($file)) {
        $handle = fopen($file, 'r');

        if ($handle !== false) {
            // Skip the first row (header)
            fgetcsv($handle);
            
            while (($row = fgetcsv($handle)) !== false) {
                // Parse CSV row and add transaction to $transactions array
                $transactions[] = [
                    'date' => $row[0],
                    'check_number' => $row[1],
                    'description' => $row[2],
                    'amount' => $row[3]
                ];
            }
            fclose($handle);
        }
    } else {
        echo "File does not exist: $file";
    }

    return $transactions;
}




function calculateTotals(array $transactions): array {
    $totalIncome = 0;
    $totalExpense = 0;

    foreach ($transactions as $transaction) {
        $amount = (float) str_replace(['$', ','], '', $transaction['amount']);
        if ($amount > 0) {
            $totalIncome += $amount;
        } else {
            $totalExpense += $amount;
        }
    }

    $netTotal = $totalIncome + $totalExpense;

    return [
        'totalIncome' => $totalIncome,
        'totalExpense' => $totalExpense,
        'netTotal' => $netTotal
    ];
}
