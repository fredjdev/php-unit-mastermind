<?php

use App\MasterMind;
use PHPUnit\Framework\TestCase;

class MasterMindTest extends TestCase {
    // function to test master mind by colors
    public function testMasterMindByColors() {
        $initialColors = ['red'];
        $initialColors2 = ['red', 'orange'];
        $initialColors3 = ['red', 'orange', 'blue'];
        $searchColors = ['red'];
        $searchColors2 = ['yellow', 'blue'];
        $searchColors3 = ['yellow', 'red', 'marron'];
        $masterMindClass = new MasterMind($initialColors);
        $masterMindClass2 = new MasterMind($initialColors2);
        $masterMindClass3 = new MasterMind($initialColors3);
        // assetions
        $this->assertEquals([1, 0], $masterMindClass->start($searchColors));
        $this->assertEquals([0, 0], $masterMindClass2->start($searchColors2));
        $this->assertEquals([0, 1], $masterMindClass3->start($searchColors3));
    }
}