<?php

class About{
    public function index($user = 'Guest', $webpage = 'LightLifeCompany Site'){
        echo "Hello there, I am $user and welcome to my $webpage";
    }

    public function page(){
        echo 'About/page';
    }
}