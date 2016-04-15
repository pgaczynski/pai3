<?php

namespace PAI\ParcelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\NotNull;
use PAI\ParcelBundle\Model\ParcelInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Parcel
 *
 * @ORM\Table(name="parcel")
 * @ORM\Entity(repositoryClass="PAI\ParcelBundle\Repository\ParcelRepository")
 */
class Parcel implements ParcelInterface
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255)
     * @NotBlank()
     * @Assert\Length(
     *     min = 2,
     *     max = 255,
     *     minMessage="Your city must be at least {{ limit }} characters long",
     *     maxMessage="Your city cannot be longer than {{ limit }} characters"
     *     )
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="postal_code", type="string", length=6)
     * @NotBlank()
     * @Assert\Length(
     *     min = 6,
     *     max = 6,
     *     minMessage="Your postal code must be at least {{ limit }} characters long",
     *     maxMessage="Your postal code cannot be longer than {{ limit }} characters"
     *     )
     * @Assert\Regex(
     *     pattern="/^\d\d-\d\d\d$/",
     *     message="Your postal code is not valid"
     * )
     */
    private $postal_code;

    /**
     * @var string
     *
     * @ORM\Column(name="street", type="string", length=255)
     * @NotBlank()
     * @Assert\Length(
     *     min = 2,
     *     max = 255,
     *     minMessage="Your street must be at least {{ limit }} characters long",
     *     maxMessage="Your street cannot be longer than {{ limit }} characters"
     *     )
     */
    private $street;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=255)
     * @NotBlank()
     * @Assert\Length(
     *     min = 2,
     *     max = 255,
     *     minMessage="Your first name must be at least {{ limit }} characters long",
     *     maxMessage="Your first name cannot be longer than {{ limit }} characters"
     *     )
     * @Assert\Regex(
     *     pattern="/\d/",
     *     match=false,
     *     message="Your name cannot contain a number"
     * )
     */
    private $first_name;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=255)
     * @NotBlank()
     * @Assert\Length(
     *     min = 2,
     *     max = 255,
     *     minMessage="Your last name must be at least {{ limit }} characters long",
     *     maxMessage="Your last name cannot be longer than {{ limit }} characters"
     *     )
     * @Assert\Regex(
     *     pattern="/\d/",
     *     match=false,
     *     message="Your name cannot contain a number"
     * )
     */
    private $last_name;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=11)
     * @NotBlank()
     * @Assert\Length(
     *     min = 9,
     *     max = 11,
     *     minMessage="Your phone number must be at least {{ limit }} characters long",
     *     maxMessage="Your phone number cannot be longer than {{ limit }} characters"
     *     )
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     * @NotBlank()
     * @Assert\Length(
     *     min = 8,
     *     max = 255,
     *     minMessage="Your e-mail address must be at least {{ limit }} characters long",
     *     maxMessage="Your e-mail address cannot be longer than {{ limit }} characters"
     *     )
     * @Assert\Email(
     *     message = "The email '{{ value }}' is not a valid email.",
     *     checkMX = true
     * )
     *
     */
    private $email;

    /**
     * @var float
     *
     * @ORM\Column(name="weight", type="float", length=5)
     * @NotBlank()
     * @NotNull()
     * @Assert\Range(
     *     min = 0.01,
     *     max = 99999,
     *     minMessage="Your weight value must be at least {{ limit }}",
     *     maxMessage="Your weight value cannot be longer than {{ limit }}"
     *     )
     */
    private $weight;


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
     * Set city
     *
     * @param string $city
     *
     * @return Parcel
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
     * Set postalCode
     *
     * @param string $postalCode
     *
     * @return Parcel
     */
    public function setPostalCode($postalCode)
    {
        $this->postal_code = $postalCode;

        return $this;
    }

    /**
     * Get postalCode
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postal_code;
    }

    /**
     * Set street
     *
     * @param string $street
     *
     * @return Parcel
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Parcel
     */
    public function setFirstName($firstName)
    {
        $this->first_name = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return Parcel
     */
    public function setLastName($lastName)
    {
        $this->last_name = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return Parcel
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Parcel
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
     * Set weight
     *
     * @param float $weight
     *
     * @return Parcel
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }
}

