<?php

class CompaniesView extends Companies
{
    public function getCompany($id)
    {
        return $this->get($id);
    }

}
