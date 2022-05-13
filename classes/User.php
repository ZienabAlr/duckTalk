<?php

class User
{

    protected $firstname;
    protected $lastname;
    protected $email;
    protected $password;
    // protected $expire;

    public function setFirstname($firstname)
    {
        if (empty($firstname)) {
            throw new Exception("username cannot be empty.");
            // in de klasse mocht er nooit een echo geschreven
        }
        $this->$firstname = $firstname;
        return $this; //??
    }

    public function getFirstname()
    {
        return $this->firstname;
    }


    /**
     * Get the value of lastname
     */
    public function getLastname()
    {
        return $this->lastname;
    }
    /**
     * Set the value of lastname
     *
     * @return  self //???
     */

    public function setLastname($lastname)
    {
        if (empty($lastname)) {
            throw new Exception("username cannot be empty.");
            // in de klasse mocht er nooit een echo geschreven
        }
        $this->$lastname = $lastname;
        return $this; //??
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
     * @return  self //???
     */

    public function setEmail($email)
    {

        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of password
     */

    public function getPassword()
    {

        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */
    public function setPassword($password)
    {
        if (empty($password)) {

            throw new Exception("Password cannot be empty.");
        }
        $this->password = $password;
        return $this;
    }
}
