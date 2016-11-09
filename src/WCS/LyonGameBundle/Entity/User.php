<?php

namespace WCS\LyonGameBundle\Entity;

/**
 * User
 */
class User
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $country;

    /**
     * @var string
     */
    private $city;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return User
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return User
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }
    /**
     * @var \WCS\LyonGameBundle\Entity\Language
     */
    private $Language;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $trips;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->trips = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set language
     *
     * @param \WCS\LyonGameBundle\Entity\Language $language
     *
     * @return User
     */
    public function setLanguage(\WCS\LyonGameBundle\Entity\Language $language = null)
    {
        $this->Language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return \WCS\LyonGameBundle\Entity\Language
     */
    public function getLanguage()
    {
        return $this->Language;
    }

    /**
     * Add trip
     *
     * @param \WCS\LyonGameBundle\Entity\Trip $trip
     *
     * @return User
     */
    public function addTrip(\WCS\LyonGameBundle\Entity\Trip $trip)
    {
        $this->trips[] = $trip;

        return $this;
    }

    /**
     * Remove trip
     *
     * @param \WCS\LyonGameBundle\Entity\Trip $trip
     */
    public function removeTrip(\WCS\LyonGameBundle\Entity\Trip $trip)
    {
        $this->trips->removeElement($trip);
    }

    /**
     * Get trips
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTrips()
    {
        return $this->trips;
    }
}
