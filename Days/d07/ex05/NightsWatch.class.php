<?php
  class NightsWatch implements IFighter
  {
    private $fighter = array();
    public function recruit($perso)
    {
      $this->fighter[] = $perso;
    }
    public function fight()
    {
      foreach ($this->fighter as $perso)
      {
        if ($perso instanceof IFighter)
          $perso->fight();
      }
    }
  }
?>
