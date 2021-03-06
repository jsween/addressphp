<?php
class Contact
{
    /******Properties******/
    private $first_name;
    private $last_name;
    private $image_path;
    private $address;
    private $phone;
    private $email;
    /******Constructor******/
    function __construct($first_name, $last_name, $image_path, $address, $phone, $email)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->image_path = $image_path;
        $this->address = $address;
        $this->phone = $phone;
        $this->email = $email;
    }
    /******Setters******/
    function setFirstName($new_first_name)
    {
        $this->first_name = (string) $new_first_name;
    }
    function setLastName($new_last_name)
    {
        $this->last_name = (string) $new_last_name;
    }
    function setImagePath($new_image_path)
    {
        $this->image_path = (string) $new_image_path;
    }
    function setAddress($new_address)
    {
        $this->address = $new_address;
    }
    function setPhone($new_phone)
    {
        $this->phone = (string) $new_phone;
    }
    function setEmail($new_email)
    {
        $this->email = (string) $new_email;
    }
    /******Getters******/
    function getFirstName()
    {
        return $this->first_name;
    }
    function getLastName()
    {
        return $this->last_name;
    }
    function getImagePath()
    {
        return $this->image_path;
    }
    function getAddress()
    {
        return $this->address;
    }
    function getPhone()
    {
        return $this->phone;
    }
    function getEmail()
    {
        return $this->email;
    }
    /******Functions******/
    //save
    function save()
    {
        array_push($_SESSION['list_of_contacts'], $this);
    }
    //get all contacts
    static function getAll()
    {
        return $_SESSION['list_of_contacts'];
    }
    //delete all contacts
    static function deleteAll()
    {
        $_SESSION['list_of_contacts'] = array();
    }
}
 ?>
