<?php

class CompaniesView extends Companies
{
    public function getCompanyProfile($id)
    {
        return $this->companyProfile($id);
    }

}
