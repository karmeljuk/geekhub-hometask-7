<?php

namespace Acme\Task5Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Acme\DemoBundle\Form\ContactType;

// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AcmeTask5Bundle:Default:index.html.twig',
            array(
                'page_name'=>'index',
                'tent_name'=>'Imogene UL2 Tent',
                'price'=>'$249.99',
                'description'=>'Our lightest weight free-standing tent ever. Roomy enough for two, light enough for one.
                Setting the standard for ultra-lightweight livable space. 2013 Backpacker Magazine Gear Guide Pick for
                 Best Freestanding Ultralight Tent.',
            )
        );
    }

    public function aboutAction()
    {
        return $this->render('AcmeTask5Bundle:Default:about.html.twig',
            array(
                'page_name'=>'about',
                'description'=>'Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus
                commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem
                malesuada magna mollis euismod. Donec sed odio dui.',
            )
        );
    }

    public function contactAction()
    {
        return $this->render('AcmeTask5Bundle:Default:contact.html.twig',
            array(
                'page_name'=>'contact',
                'description'=>'Cras vulputate in felis at egestas. Mauris ut diam risus. Sed in dapibus sapien.
                Vestibulum viverra ut ligula in mattis. Proin in lacus pellentesque, tincidunt sem id, gravida urna.
                Donec lacus risus, imperdiet a purus non, tristique aliquam leo. Nam nec tincidunt sem, eu pulvinar
                erat. Nulla sed risus eu est blandit iaculis eget vel eros.'
            )
        );
    }
}
