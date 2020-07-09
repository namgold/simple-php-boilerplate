<?php
require_once 'app/backend/core/Init.php';

$setting = new Setting();
$Setting = $setting->getAll();
function getSetting($key) {
    global $Setting;
    return current(array_filter($Setting, function($element) use($key) {
        return $element->_key == $key;
    }))->value;
}