<?php

class LogProcessor
{
    public static function processLogFiles($logFiles)
    {
        self::outputLogData(array_map(file, $logFiles));
    }

    /*protected static function outputLogData($data)
    {

    }*/

    protected static function outputLogData( $array ) {

        foreach( $array as $row ) {
            $i = 0;
            foreach($row as $v){
                $new_array[] = $row[$i];
                $i++;
            }

        }
        print_r(array_count_values( $new_array ));
    }
}