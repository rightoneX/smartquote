<?php

class IndustriesView extends Industries
{

    public function getIndustryName($code)
    {
        return $this->industryInformation($code);
    }

}
