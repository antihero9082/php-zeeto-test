<?php

// src/Acme/HelloBundle/Controller/HelloController.php
namespace Acme\HelloBundle\Controller;

use Acme\HelloBundle\Entity\Subscribers;
use Acme\HelloBundle\Controller\SubscribersController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class HelloController extends Controller
{
 
    
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $entities = $em->getRepository('AcmeHelloBundle:JobPosts')->findAll();
        $contents = array();
        foreach($entities as $entity)
        {
           $contents['text'] = stripslashes($entity->getContent());
           $contents['createdAt'] = $entity->getCreatedAt();
        }
        
     
     
     return $this->render('AcmeHelloBundle:Hello:index.html.twig',array('contents'=>$contents));
     
    }
    
    public function updateAction(Request $request)
    {
        
    }
    public function newAction(Request $request){
        $subscriber = new Subscribers();
        $subscriber->setFirstName('First');
        $subscriber->setLastName('last');
        $subscriber->setEmail('email');
        
        $form = $this->createFormBuiler($subscriber)
                ->add('first','text')
                ->add('last' , 'text')
                ->add('email' , 'text')
                ->getForm();
        
        return $this->render('AcmeHelloBundle:Hello:index.html.twig', array(
            'form'=> $form->createView(),
            ));
    }
}

?>
