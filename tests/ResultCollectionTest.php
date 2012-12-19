<?php
class ResultCollectionTest extends PHPUnit_Framework_TestCase
{
    public function testGetResultWithoutMocking()
    {
        $r = new Pseudo\Pdo\ResultCollection();
        $this->setExpectedException("Pseudo\Pdo\\Exception");
        $r->getResult("SELECT 1");
    }
}