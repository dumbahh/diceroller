<?php

  class dice {
    public $sides;

    
    public function roll($sides) {
      $this->sides = $sides;
      $result = rand(1, $sides);
      return $result;
    }
  }
