<?php
$keys = isset($_GET['key']) ? array_map('trim', explode(',', strtolower($_GET['key']))) : array();
$packages = array();

$packages[] = array(
    'name' => 'H84F-H74W-SNU3-DJ89',
    'title' => 'HermitCraft Dimensions',
    'version' => '1.0.2',
    'priority' => 0,
    'location' => 'h84f-h74w-snu3-dj89.json',
);

$out = array('minimumVersion' => 1, 'packages' => $packages);
header('Content-Type: text/plain; charset=utf-8');
echo json_encode($out);
