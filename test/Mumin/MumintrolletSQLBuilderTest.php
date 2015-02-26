<?php

namespace Mos\Mumin;

/**
 * Test sql builder class
 */
class MumintrolletSQLBuilderTest extends \PHPUnit_Framework_TestCase
{
	
	public function testGetName()
	{
		$mumin = new \Mos\Mumin\MumintrolletSQLBuilder();
		
		$res = $mumin->getName();
        $exp = "My Name is Mumintrollet.";
        $this->assertEquals($res, $exp, "The name does not match.");
	}
	
}
