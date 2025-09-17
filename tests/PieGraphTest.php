<?php
	namespace Noki\PhpGraph\Tests;

	use Noki\PhpGraph\PieGraph;
	use PHPUnit\Framework\TestCase;

	class PieGraphTest extends TestCase
	{
		public function testPieGraphDefaults()
		{
			$this->assertIsObject(new PieGraph(100, 100));
		}
	}

