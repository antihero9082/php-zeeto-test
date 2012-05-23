<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Progammerguy
 * Date: 5/23/12
 * Time: 2:01 PM
 * To change this template use File | Settings | File Templates.
 */
namespace Acme\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Acme\HelloBundle\Entity\Posts;

class CareerController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $entities = $em->getRepository('AcmeHelloBundle:JobPosts')->findAll();
        $contents = array();
        foreach($entities as $entity)
        {
            $contents['jobType'] = $entity->getJobType();
            $contents['jobTitle'] = $entity->getJobTitle();
            $contents['text'] = stripslashes($entity->getContent());
            $contents['createdAt'] = $entity->getCreatedAt();
        }



        return $this->render('AcmeHelloBundle:Hello:index.html.twig',array('contents'=>$contents));

    }
        public function newAction()
    {

    }

}