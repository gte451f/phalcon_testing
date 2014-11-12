<?php

class unitSampleTest extends \Codeception\TestCase\Test
{

    /**
     *
     * @var \UnitTester
     */
    protected $tester;

    /**
     * executed before each test
     */
    protected function _before()
    {
        $moduleDi = $this->getModule('Phalcon1')->di;
        $defaultDi = \Phalcon\Di::getDefault();
        $this->assertSame($moduleDi, $defaultDi);
    }

    /**
     * executed after each test
     */
    protected function _after()
    {
        //
    }
    
    // the test
    public function testMe()
    {
        $controller = new IndexController();
        $this->assertNull($controller->indexAction());
    }
}