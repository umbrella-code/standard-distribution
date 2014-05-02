<?php

namespace Project\Models;

use Doctrine\ORM\Mapping as ORM;
use Umbrella\Source\Model;

/**
 * User
 *
 * @Entity
 * @Table(name="users")
 */
class User extends Model
{
    /**
     * @Id
     *
     * @Column(name="id", type="integer")
     * @GeneratedValue(strategy="AUTO")
     * @var integer
     */
    protected $id;

    /**
     * Firstname
     *
     * @Column(type="string")
     * @var string
     */
    protected $first_name = "";

    /**
     * Lastname
     *
     * @Column(type="string")
     * @var string
     */
    protected $last_name = "";

    /**
     * Email Address
     *
     * @Column(type="string")
     * @var string
     */
    protected $email = "";

    /**
     * Username
     *
     * @Column(type="string")
     * @var string
     */
    protected $username = "";

    public function __construct($first = '', $last = '', $email = '', $username = '')
    {
        $this->first_name = $first;
        $this->last_name = $last;
        $this->email = $email;
        $this->username = $username;
    }

    /**
     * Get first_name
     *
     * @return $this->first_name
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * Set first_name
     *
     * @param  string $firstName
     * @return \Project\Models\User $this
     */
    public function setFirstName($firstName)
    {
        $this->first_name = $firstName;

        return $this;
    }

    /**
     * Get last_name
     *
     * @return $this->last_name
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * Set last_name
     *
     * @param  string $lastName
     * @return \Project\Models\User $this
     */
    public function setLastName($lastName)
    {
        $this->last_name = $lastName;

        return $this;
    }

    /**
     * Get email
     *
     * @return $this->email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set email
     *
     * @param  string $email
     * @return \Project\Models\User $this
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get username
     *
     * @return $this->username
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set username
     *
     * @param  string $username
     * @return \Project\Models\User $this
     */
    public function setUsername($userName)
    {
        $this->username = $userName;

        return $this;
    }
}