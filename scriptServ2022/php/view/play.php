<?php
$options = '';
for ($i = 0; $i <= 100; $i++) {
    $options .= '<option value="' . $i . '">' . $i . '</option>';
}
require_once __DIR__ . '/../form/f_play.php';