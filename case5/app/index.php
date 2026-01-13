<?php
$redis = new Redis();
$redis->connect('redis', 6379);

$key = "time";

if ($redis->exists($key)) {
    echo "Data from Redis Cache: " . $redis->get($key);
} else {
    $time = date("Y-m-d H:i:s");
    $redis->set($key, $time, 10);
    echo "Data from Database (simulated): " . $time;
}
