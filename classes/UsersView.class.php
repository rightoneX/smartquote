<?php

class UserView extends Users{

    public function showUser($email){
        $results = $this->getUser($email);
        echo "Full name: ". $results['name'];
    }
}