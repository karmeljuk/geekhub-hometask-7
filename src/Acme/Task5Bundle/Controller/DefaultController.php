<?php

namespace Acme\Task5Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AcmeTask5Bundle:Default:index.html.twig',
            array(
                'name'=>'Krom',
                'dog_breed'=>'Caucasian Shepherd Dog',
                'dog_age'=>'1 year',
            )
        );
    }

    public function aboutAction()
    {
        return $this->render('AcmeTask5Bundle:Default:about.html.twig',
            array(
                'name'=>'Krom',
                'dog_breed'=>'Caucasian Shepherd Dog',
                'dog_age'=>'1 year',
            )
        );
    }

    public function contactAction()
    {
        return $this->render('AcmeTask5Bundle:Default:contact.html.twig',
            array(
                'name'=>'Krom',
                'dog_breed'=>'Caucasian Shepherd Dog',
                'dog_age'=>'1 year',
            )
        );
    }
}
