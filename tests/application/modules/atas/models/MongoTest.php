<?php

class MongoTest extends PHPUnit_Framework_TestCase {
	
	public function testMongo(){
		$mongo = new Mongo();
		$this->assertTrue(!empty($mongo));
	}

}