<?php
/**
 * @param string $picture
 * @return string
 */
function pictureB64(string $picture) : string{
    $imgData = base64_encode(file_get_contents($picture));
    $imgSrc = 'data:' . mime_content_type($picture) . ';base64,' . $imgData;
    $img = '<img src="' . $imgSrc . '" width="25rem" height="25rem">';
    return $img;
}

/**
 * @param mixed $data
 * @return string
 */
function validData(mixed $data) : string {

    //$data = filter_input(INPUT_POST, $data, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    return trim(strip_tags($data));

}

/**
 * @param array $data $_POST or $_GET
 * @return array
 */
function validForm(array $data) : array{
    
    foreach ($data as $key => $value) {
        if ($key == 'email') {
            $data[$key] = filter_var($value, FILTER_VALIDATE_EMAIL);
        } elseif ($key == 'pwd') {
            continue;
        } else {
            $data[$key] = strip_tags(trim($value));
        }
    }

    return $data;
}
