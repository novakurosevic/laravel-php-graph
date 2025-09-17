<?php
	namespace PhpGraph;

	use PhpGraph\StackedGraph;
	use PHPUnit\Framework\TestCase;

	class StackedGraphTest extends TestCase
	{
		public function testStackedGraphDefaults()
		{
			$this->assertIsObject(new StackedGraph(100, 100));
		}
	}
?>
