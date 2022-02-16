<?php 

class creditCard {
    private $id;
    private $cardNumber;
    private $expirationYear;
    private $securityNumber;

    
    public function __construct(float $cardNumber, int $expirationYear, int $securityNumber)
    {
        $this->cardNumber = $cardNumber;
        $this->expirationYear = $expirationYear;
        $this->securityNumber = $securityNumber;
    }
    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of cardNumber
     */ 
    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    /**
     * Set the value of cardNumber
     *
     * @return  self
     */ 
    public function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;

        return $this;
    }

    /**
     * Get the value of expirationYear
     */ 
    public function getExpirationYear()
    {
        return $this->expirationYear;
    }

    /**
     * Set the value of expirationYear
     *
     * @return  self
     */ 
    public function setExpirationYear($expirationYear)
    {
        $this->expirationYear = $expirationYear;

        return $this;
    }

    /**
     * Get the value of securityNumber
     */ 
    public function getSecurityNumber()
    {
        return $this->securityNumber;
    }

    /**
     * Set the value of securityNumber
     *
     * @return  self
     */ 
    public function setSecurityNumber($securityNumber)
    {
        $this->securityNumber = $securityNumber;

        return $this;
    }
}
?>