<?php 

namespace App;

class MasterMind {

    public $initialColors = [];

    public function __construct($initialColors)
    {
        $this->initialColors = $initialColors;
    }

    public function start($searchColors) {
        $rightPlace = 0;
        $misplaced = 0;
        foreach($searchColors as $keyS => $seach) {
            foreach($this->initialColors as $keyI => $initial) {
                if($seach == $initial && $keyS == $keyI) {
                    $rightPlace++;
                } else if($seach == $initial) {
                    $misplaced++;
                }
            }
        }
        return [$rightPlace, $misplaced];
    }
}