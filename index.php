<?php
function validatePhone($str)
{
    $regexp = '/^[0-9]{2}-0[0-9]{9}$/';
    if (preg_match($regexp, $str)) {
        echo "so dien thoai hop le";
    } else {
        echo "so dien thoai khong hop le";
    }
}
validatePhone("84-0965279961");