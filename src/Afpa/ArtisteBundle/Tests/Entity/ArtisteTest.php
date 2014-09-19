<?php

namespace Afpa\ArtisteBundle\Tests\Entity;

use Afpa\ArtisteBundle\Entity\Artiste;

Class ArtisteTest extends \PHPUnit_Framework_TestCase
{
	public function testCategory()
	{
		$artist = new Artiste();
		$artist->setPopularite(80);
		$result = $artist->getCategory();
		
		$this->assertEquals('Super-Star', $result);
	}
}
