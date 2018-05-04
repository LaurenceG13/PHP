<?php
  class Tyrion extends Lannister
  {
    public function sleepWith($obj)
    {
        if ($obj instanceof Lannister)
          print "Not even if I'm drunk !" . PHP_EOL;
        if ($obj instanceof Sansa)
          print "Let's do this." . PHP_EOL;
    }
  }
 ?>
