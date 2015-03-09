<?php
/**
 * code-practices
 * after.php
 */

class OfficePhone
{

    /**
     * @var string
     */
    private $_officeAreaCode;

    /**
     * @var string
     */
    private $_officeNumber;

    /**
     * @return string
     */
    public function getOfficeAreaCode() {
        return $this->_officeAreaCode;
    }

    /**
     * @param string $areaCode
     */
    public function setOfficeAreaCode($areaCode) {
        $this->_officeAreaCode = $areaCode;
    }

    /**
     * @return string
     */
    public function getOfficeNumber() {
        return $this->_officeNumber;
    }

    /**
     * @param string $officeNumber
     */
    public function setOfficeNumber($officeNumber) {
        $this->_officeNumber = $officeNumber;
    }

    /**
     * @return string
     */
    public function getPhoneNumber() {
        return "+({$this->_officeAreaCode}) {$this->_officeNumber}";
    }

}

class Person
{
    /**
     * @var OfficePhone
     */
    private $_officePhone;

    /**
     * @var string
     */
    private $_name;

    public function __construct() {
        $this->_officePhone = new OfficePhone();
    }

    /**
     * @return string
     */
    public function getName() {
        return $this->_name;
    }

    /**
     * @return string
     */
    public function getPhoneNumber() {
        return $this->_officePhone->getPhoneNumber();
    }

    /**
     * @return OfficePhone
     */
    public function getOfficePhone() {
        return $this->_officePhone;
    }

}