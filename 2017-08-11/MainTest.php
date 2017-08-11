<?php
use PHPUnit\Framework\TestCase;
require 'Main.php';

class MainTest extends TestCase
{
	public function dataProvider() {
		
		return array(
		array("

   |
   |

",1)
		);
	}

	/**
	 * @dataProvider dataProvider
	 */
	public function testParse($input, $expected) {
		$main = new Main();
		$actual = $main->parse($input);

		$this->assertEquals($expected, $actual);
	}
}
