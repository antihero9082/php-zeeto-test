<?php

namespace Acme\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Acme\HelloBundle\Entity\Posts;

/**
 * Posts controller.
 *
 */
class JobPostsController extends Controller
{
    /**
     * Lists all Posts entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('AcmeHelloBundle:Posts')->findAll();


        return $this->render('AcmeHelloBundle:Posts:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a Posts entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AcmeHelloBundle:Posts')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Job Posts entity.');
        }

        return $this->render('AcmeHelloBundle:Posts:show.html.twig', array(
            'entity'      => $entity,
        ));
    }

}
