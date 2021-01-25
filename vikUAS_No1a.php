<?php

class CardParking{
	function isCardStatus($status)
    {
        if ($status == 'sukses') {
            return TRUE;
        }
    }
    function isCardExpired($status)
    {
        if ($status == 'expired') {
            return TRUE;
        }
    }
    function isWrongCard($status)
    {
        if ($status == 'wrong') {
            return TRUE;
        }
    }

    function main($status) {
        if ($this->isCardStatus($status) == TRUE) {
            return 'sukses';
        }
        if ($this->isCardExpired($status) == TRUE) {
            return 'Your Card is expired.';
        }
        if ($this->isWrongUsername($status) == TRUE) {
            return 'Your Card is Wrong !';
        }
    }
}

?>