<?php
// Define helper functions

/**
 * Format date string to a readable format.
 *
 * @param string $date Date string in format "Y-m-d".
 * @return string Formatted date string.
 */
function formatDate(string $date): string {
    return date('M j, Y', strtotime($date));
}

/**
 * Format currency amount string to a float value.
 *
 * @param string $amount Currency amount string.
 * @return float Formatted float value.
 */
function formatAmount(string $amount): float {
    // Remove any non-numeric characters except for the decimal point
    $cleaned_amount = preg_replace('/[^0-9.-]/', '', $amount);

    // Convert the cleaned amount to a float
    $formatted_amount = (float) $cleaned_amount;

    return $formatted_amount;
    var_dump('formatAmount');
}



// Add more helper functions as needed
?>