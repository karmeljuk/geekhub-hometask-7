<?php

namespace Acme\Task7Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function sendEmailAction()
    {
        $mailer = $this->get('my_mailer');
        $mailer->send('somemail@somesite.net');
    }

    public function sendNewsletterAction()
    {
        $mailer = $this->get('my_mailer');
        $newsletter = new Acme\Task7Bundle\Newsletter\NewsletterManager($mailer);
    }

}
