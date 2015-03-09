<?php
/**
 * code-practices
 * before.php
 */

class PersonAtOffice
{

    /**
     * @var string
     */
    private $_name;

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
    public function getName() {
        return $this->_name;
    }

    /**
     * @return string
     */
    public function getPhoneNumber() {
        return "+({$this->_officeAreaCode}) {$this->_officeNumber}";
    }

    /**
     * @return string
     */
    public function getOfficeAreaCode() {
        return $this->_officeAreaCode;
    }

    /**
     * @return string
     */
    public function getOfficeNumber() {
        return $this->_officeNumber;
    }

    /**
     * @param string $officeAreaCode
     */
    public function setOfficeAreaCode($officeAreaCode) {
        $this->_officeAreaCode = $officeAreaCode;
    }

    /**
     * @param string $officeNumber
     */
    public function setOfficeNumber($officeNumber) {
        $this->_officeNumber = $officeNumber;
    }

}