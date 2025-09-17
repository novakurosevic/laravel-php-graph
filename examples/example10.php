<?php

    use Noki\PhpGraph\StackedGraph;

	$popularity = array('Windows 7' => 80, 'Mac OS 10' => 35, 'Fedora' => 9);
	$cost = array('Windows 7' => 10, 'Mac OS 10' => 30, 'Fedora' => 90);
	$speed = array('Windows 7' => 50, 'Mac OS 10' => 50, 'Fedora' => 80);

	$graph = new StackedGraph(500, 300);

	$graph->setTitle('Operating System Scores');
	$graph->setTitleLocation('left');
	$graph->setXValuesHorizontal(true);
	$graph->setTextColor('blue');
	$graph->setBarColor('#0066CC', '#669999', '#66CCCC');
	$graph->setLegend(true);
	$graph->setLegendTitle('Popularity', 'Cost', 'Speed');

	$graph->addData($popularity, $cost, $speed);

	$graph->createGraph(basename(__FILE__, '.php') . '.png');
