<?php
require_once('simpletest/unit_tester.php');
require_once('simpletest/reporter.php');
require_once('../wsi/DAO/ConfigManager.class.php');

class ConfigManagerTest extends UnitTestCase {

    function testCreatingNewFile() {
    	//Given

    	//When

    	//Then
        $this->assertTrue(true);
        $this->assertFalse(false);
    }

}

$test = new ConfigManagerTest();
$test->run(new HtmlReporter());
?>