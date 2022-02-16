<?php

/**
 * 
 */
trait PremiumUser
{
    public $level;

    public function __construct($level)
    {
        $this->level->$level;
    }
    /**
     * Get the value of level
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set the value of level
     *
     * @return  self
     */
    public function setLevel($level)
    {
        if ($level == "bronze") {
            $this->level = 30;
        } else if ($level == "silver") {
            $this->level = 45;
        } else if ($level == "gold") {
            $this->level = 55;
        }

        return $this;
    }
}
