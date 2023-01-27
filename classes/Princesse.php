<?php

class Princesse extends Personnage {

    private $saved;

    public function __construct()
    {
        parent::__construct();

        $this-> saved = 0;
        $this-> y = 450;
        $this-> x = 450;
    }

    /**
     * @return int
     */
    public function getSaved(): int
    {
        return $this->saved;
    }

    /**
     * @param int $saved
     */
    public function setSaved(int $saved): void
    {
        $this->saved = $saved;
    }
}