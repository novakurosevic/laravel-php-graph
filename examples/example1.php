<?php

    use Noki\PhpGraph\Graph;

	$data = array(
		12124,
		5535,
		43373,
		22223,
		90432,
		23332,
		15544,
		24523,
		32778,
		38878,
		28787,
		33243,
		34832,
		32302
	);

	$graph = new Graph(500, 350);

	$graph->setTitle('Widgets Produced');
	$graph->setGradient('red', 'maroon');

	$graph->addData($data);

    $file_path = $graph->createGraph(basename(__FILE__, '.php'), 'F');
