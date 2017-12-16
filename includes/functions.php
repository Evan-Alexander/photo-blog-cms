<?php

// Remove leading zeros from date
function strip_zeros_from_date($marked_string="") {
    // Remove the marked zeros
    $no_zeros = str_replace('*0', '', $marked_string);
    // Remove any remaining marks
    $cleaned_string = str_replace('*', '', $no_zeros);
    return $cleaned_string;
}

function redirect_to( $location = NULL ) {
    if ($location != NULL) {
        header("Location: {$location}");
        exit;
    }
}
function output_message($message="") {
    if (!empty($message)) {
        return "<p class=\"message\">{$message}</p>";
    } else {
        return "";
    }
}

function sanitize_string($string) {
    $result;
    if ($string == '') {
        echo 'Please complete the form.';
    } else {
        $result = trim($string);
        $result = filter_var($result, FILTER_SANITIZE_STRING);
        $result = filter_var($result, FILTER_SANITIZE_MAGIC_QUOTES);
        $result = filter_var($result, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    return $result;
}

function pre($data) {
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}


?>
