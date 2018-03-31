<?php

class LogProcessor
{
    public static function processLogFiles($logFiles)
    {
        self::outputLogData(array_map('file', $logFiles));
    }

    protected static function outputLogData($data)
    {
        foreach ($data as $d){
            array_filter($d, function ($t) {
                return self::test(explode(" " , $t));
            });
        }
    }


    protected static function test($data)
    {
        print_r($data);
    }
}