<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class HometaskController extends Controller
{
    public function simpleResponseAction()
    {
        return new Response('<html><body><br>Thisis simple Response object!</br></body></html>');
    }

    public function simpleTemplateAction()
    {
        return $this->render('AcmeDemoBundle:Hometask:thirdAction.html.twig',
            array(
                'dog_name'=>'Krom',
                'dog_breed'=>'Caucasian Shepherd Dog',
                'dog_age'=>'1 year',
            )
        );
    }

    public function extendedTemplateAction()
    {
        return $this->render('AcmeDemoBundle:Hometask:secondAction.html.twig',
            array(
                'dog_coat'=>'gray',
                'dog_weight'=>'45',
            )
        );
    }
}
