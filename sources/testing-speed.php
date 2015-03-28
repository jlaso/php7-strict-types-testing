<?php
declare(strict_types=1);

require_once "gps/vendor/autoload.php";
require_once "FloatMath.php";


function calculateTime($numOps = 1000000)
{
    $start   = microtime(true);
    $average = 0;
    for ($i = 0; $i < $numOps; $i++) {
        $madrid = new \JLaso\Gps\Point(40.416691, -3.700345);
        $paris  = new \JLaso\Gps\Point(48.856667, 2.350987);

        $distance = $madrid->distanceTo($paris);
        $average  = $average ? FloatMath::accAverage($average, $distance) : $distance;
    }
    $end = microtime(true);

    return $end-$start;
}


system("cd gps; git checkout tags/1.1;");

$time = calculateTime($numOps = 10000000);
echo sprintf("Total time spent in calculate %d distances is %f\n", $numOps, $time);

