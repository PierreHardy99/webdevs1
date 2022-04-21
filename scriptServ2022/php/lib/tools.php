<?php


function validData(string $data) :string {
    return strip_tags(trim($data));
}

/**
 * validate form data
 *
 * @param array $data   $_POST or $_GET
 * @return array
 */
function validDataType(array $data) :array {

    foreach ($data as $key => $value) {
        if ($key == 'email') {
            $data['email'] = filter_var($value, FILTER_VALIDATE_EMAIL);
        } elseif($key == 'pwd') {
            continue;
        } else {
            $data[$key] = strip_tags(trim($value));
        }
    }
    return $data;
}