<?php

if (!defined('BASEPATH')) die("\nDon't forget the bootstrap!!\n\n");

require_once BASEPATH.'/includes/PHPDS_core.class.php';




/**
 * Test class for PHPDS_controller.
 * Generated by PHPUnit on 2011-08-09 at 01:06:29.
 */
class PHPDS_coreTest extends PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        $PHPDS = TEST_main::instance();
        $this->object = $PHPDS->_factory('PHPDS_core');

        $this->object->construct();
    }

    /**
     * This call is deprecated
     */
    function testsafeName()
    {
        /* @var PHPDS_core $core */
        $core = $this->object;

        $this->assertEquals('a-b-c-d-e-f-g-h', $core->safeName('A--B C/D"E%F\\G\'H'));
        $this->assertEquals('abcdefgh', $core->safeName('A--B C/D"E%F\\G\'H', ''));
        $this->assertEquals('a.b.c.d.e.f.g.h', $core->safeName('A--B C/D"E%F\\G\'H', '.'));
        $this->assertFalse($core->safeName(''));
        $this->assertEquals('-', $core->safeName('--'));
    }

    /**
     * This call is deprecated
     */
    function testrightTrim()
    {
        /* @var PHPDS_core $core */
        $core = $this->object;

        $this->assertEquals('ab', $core->rightTrim('abcd', 'cd'));
        $this->assertEquals('abcd', $core->rightTrim('abcd ', 'cd'));
        $this->assertEquals('abcd', $core->rightTrim('abcd', 'c'));
    }
}