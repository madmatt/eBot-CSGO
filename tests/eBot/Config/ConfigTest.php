<?php
namespace eBot\Tests\Config;

// @todo Find a better way to do this...
require_once(dirname(dirname(dirname(__DIR__))) . '/config/constants.php');

class ConfigTest extends \PHPUnit_Framework_TestCase {
	public function testConfigSingleton() {
		$config = \eBot\Config\Config::getInstance();
		$config->setMysql_user('testuser');

		// Now get it again, and ensure the user is set correctly
		$config2 = \eBot\Config\Config::getInstance();
		$this->assertEquals('testuser', $config->getMysql_user());
	}
}