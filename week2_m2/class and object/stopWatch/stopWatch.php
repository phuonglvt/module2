<?php
class StopWatch {
    private static $start = array();
    public static function start($ten = 'default') {
        self::$start[$ten] = microtime(true);
    }
    public static function troi($ten = 'default') {
        return microtime(true) - self::$start[$ten];
    }
}
StopWatch::start();
sleep(0.0001);
echo 'Thời gian đã trôi qua: ' . StopWatch::troi() . ' seconds';