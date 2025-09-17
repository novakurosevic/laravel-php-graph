<?php

    use Noki\PhpGraph\Graph;

	$data = array(
		"Jan" => -1324,
		"Feb" => -1200,
		"Mar" => -100,
		"Apr" => -1925,
		"May" => -1444,
		"Jun" => -957,
		"Jul" => -364,
		"Aug" => -221,
		"Sep" => -1300,
		"Oct" => -848,
		"Nov" => -719,
		"Dec" => -114
	);

	$graph = new Graph(500, 450);

	$graph->setBarColor('255, 255, 204');
	$graph->setTitle('Money Made at XYZ Corp');
	$graph->setTextColor('gray');

	$graph->addData($data);

	$graph->createGraph(basename(__FILE__, '.php') . '.png');
