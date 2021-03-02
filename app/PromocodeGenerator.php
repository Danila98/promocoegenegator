<?php

//AAAA-9999-9999-00AA
class PromocodeGenerator {

    private $alphabet = array(
        'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R',
        'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'
    );

    public function PromocodeGeneratorion()
    {
      
       $promocode = $this->alphabet[rand(0, 21)].$this->alphabet[rand(0, 21)].$this->alphabet[rand(0, 21)].$this->alphabet[rand(0, 21)].
       "-".rand(1000, 9999)."-".rand(1000, 9999)."-".rand(10, 99).$this->alphabet[rand(0, 21)].$this->alphabet[rand(0, 21)];

       return $promocode;
    }

}