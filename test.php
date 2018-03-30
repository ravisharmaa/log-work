<?php

require_once('LogProcessor.php');
/*$logFiles = array_filter($_SERVER['argv'], function($fileName) {
        return is_file($fileName)?:false;
});*/

LogProcessor::processLogFiles(array_slice(array_filter($_SERVER['argv'], function($fileName) {
    return is_file($fileName)?:false;
}), 1));

