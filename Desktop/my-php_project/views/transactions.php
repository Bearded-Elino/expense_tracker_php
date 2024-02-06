<?php require_once('../app/helpers.php'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Data</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }

        .income {
            color: green;
        }
        .expense {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Transaction Data</h1>
    <table>
        <thead>
            <tr>
                <th>Date</th>
                <th>Check #</th>
                <th>Description</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
            <!-- PHP code to output transaction data here -->

            <?php foreach ($transactions as $transaction): ?>
                    <tr>
                        <td><?= $transaction['date'] ?></td>
                        <td><?= isset($transaction['check_number']) ? $transaction['check_number'] : ''; ?></td>
                        <td><?= $transaction['description'] ?></td>
                        <td class="<?= ($transaction['amount'] < 0) ? 'expense' : 'income' ?>">
                            <?= number_format(formatAmount($transaction['amount']), 2) ?>
                        </td>
                    </tr>
            <?php endforeach; ?>

            

        </tbody>

        <tfoot>
            <tr>
                <th colspan="3">Total Income:</th>
                <td><?= '$' . number_format($totals['totalIncome'], 2) ?></td>
            </tr>
            <tr>
                <th colspan="3">Total Expense:</th>
                <td><?= '$' . number_format($totals['totalExpense'], 2) ?></td>
            </tr>
            <tr>
                <th colspan="3">Net Total:</th>
                <td><?= '$' . number_format($totals['netTotal'], 2) ?></td>
            </tr>
        </tfoot>
    </table>


</body>
</html>
