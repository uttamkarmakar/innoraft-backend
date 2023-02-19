<?php

/**
 * Creating class to create object for firstname and lastname
 */
class details {
  /**
   * Variables for firstname and lastname.
   * @var string $firstName.
   * @var string $lastName.
   */
  public $firstName = "";
  public $lastName = "";
  /**
   * Constructor for the class details.
   * @param string $firstName
   * @param string $lastName
   * Setting the value to the object in the constructor.
   */
  function __construct(string $firstName,string $lastName) {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
  }

  /**
   * 
   */
  function check_data($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
 /**
 * Checking the data consists of alphabets only.
 *
 * @param integer $data
 * Passing name and surname to this to check the condition.
 */
  function check_valid($data) {
    if (!preg_match("/^[a-zA-Z-' ]*$/", $data))
      return TRUE;
    else
      return FALSE;
  }
  /**
 * Checking the data consists of alphabets only.
 *
 * @param mixed $data
 *  To check any data pass to this empty or not.
 * @return boolean.
 */
  function check_empty($data) {
    if (empty($data)) {
      return TRUE;
    }
    else {
      return FALSE;
    }
  }
}
/**
 * Class for initializing object for the uploading image.
 */
class imageClass {
  /**
   * @var $imageType,$imageName
   * @var $imageType,$imagName
   * @var $imageType,$imageSize
   * @var $imageType,$imageTname
   * Data members for the imageClass.
   */
  public $imageType;
  public $imageName;
  public $imageSize;
  public $imageTname;
}
/**
 * Class for checking number is correct or not.
 */
class GetNumber {
  /**
   * @var string $stringNum.
   * Store the phone number.
   */
  public $stringNum = "";
  /**
   * Constructor to initialize the string variable.
   * @param string $stringNum.
   */
  public function __construct(string $stringNum) {
    $this->stringNum = $stringNum;
  }
  /**
   * Function to check the string the empty or not.
   *  @param string $stringNum.
   *   Stores the phone number as a string.
   *  @return boolean
   */
  public function check_string_empty(string $stringNum) {
    if (empty($stringNum)) {
      return TRUE;
    }
    else {
      return FALSE;
    }
  }
  /**
   * Function to the string is valid or not.
   *  @param string $stringNum.
   *   Stores the phone number as a string.
   *  @return bool
   */
  public function string_valid(string $stringNum) {
    if (strlen($stringNum) > 13) {
      return FALSE;
    }
    elseif (!preg_match("/[+][9][1][6-9][0-9]{9}/", $_POST["phone"])) {
      return FALSE;
    }
    else {
      return TRUE;
    }
  }
}
/**
 * Class for creating object for the email.
 */
class GetEmail {
  /**
   * @var string $emailId
   */
  public $emailId;
  public function check_email($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  /**
   * Constructer to initialize the object data member
   */
  function __construct($emailId){
    $this->emailId = $emailId;
  }
  /**
   * Function to check whether the email Id is valid or not.
   * @param string $emailId
   * Passing the email Id to the parameter for checking.
   * @return bool
   */
  public function validate_email($emailId) {
    if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $emailId)) {
      return TRUE;
    }
    else {
      return FALSE;
    }
  }
   /**
   * Function to check whether the email Id is empty or not.
   * @param string $emailId
   * Passing the email Id to the parameter for checking.
   * @return bool
   */
  public function check_empty_email($emailId) {
    if (empty($emailId)){
      return TRUE;
    }
    else{
      return FALSE;
    }
  }
}
