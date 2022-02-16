<?php
require_once __DIR__ . '/creditCard.php';
require_once __DIR__ . '/../traits/PremiumUser.php';
class User
{   
    use PremiumUser;
    protected $id;
    protected $name;
    protected $lastName;
    protected $email;
    protected $age;
    protected $userName;
    protected $creditCards = [];

    public function __construct($name, $lastName, $email, int $age)
    {   
        try {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->age = $age;}
        catch (TypeError $error){
            throw new Exception($error->getMessage());
        }
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
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of lastName
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email)
    {   
        
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of age
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get the value of userName
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Set the value of userName
     *
     * @return  self
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Get the value of creditCards
     */
    public function getCreditCards()
    {
        return $this->creditCards;
    }

    /**
     * Set the value of creditCards
     *
     * @return  self
     */
    public function setCreditCards(array $creditCards)
    {
        foreach ($creditCards as $creditCard) {
            $this->creditCards[] = $this->checkCreditCard($creditCard);
        }
        return $this;
    }

    private function checkCreditCard(creditCard $creditCard)
    {
        return $creditCard;
    }

    function printUser()
    {
        echo 'NAME: ' . $this->name . ', SURNAME: ' . $this->lastName . ', EMAIL: ' . $this->email . ', AGE: ' . $this->age;
        //--> Normally, protected or private data cannot be printed on page via echo, the only way is to use a function.<--\\
    }
}
