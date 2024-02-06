
<!-- 
    function getTransactions(): array {

        $transactions = []

        $files = FILES_PATH . 'sample_1.csv';

        if ($file_exists($files)) {
          $handleFiles = fopen($files, 'r')
        };

        if ($file !== false) {
            fgetcsv ($handle);
        }

        while ($row fgetcsv($handle) !== false) {
            $transactions [] = [
                'date' = $row[0];
                'check_number' = $row[1],
                'description' = $row[2],
                'amount' = $row[3],
            ];
        }

        fclose($handleFiles);

        else {
             echo "file could not be found: $files"
        }
    }

    return $transactions





 -->