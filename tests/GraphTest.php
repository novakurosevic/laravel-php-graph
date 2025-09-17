<?php
	namespace PhpGraph;

	use PhpGraph\Graph;
	use PHPUnit\Framework\TestCase;

	class GraphTest extends TestCase
	{
		public function testGraphDefaults()
		{
			$this->assertIsObject(new Graph(100, 100));
		}
	}
?>
