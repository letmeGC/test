<?php

class Test
{
    public function __construct()
    {
        $today = strtotime(date("Y-m-d"), time());
        $now = time();
        if ($now >= ($today + 3600 * 6) && $now < ($today + 3600 * 12)) {
            echo "Good morning";
        } elseif ($now >= ($today + 3600 * 12) && $now <= ($today + 3600 * 18)) {
            echo "Good afternoon";
        } else {
            echo "Good evening";
        }
    }
}

$object = new Test();
