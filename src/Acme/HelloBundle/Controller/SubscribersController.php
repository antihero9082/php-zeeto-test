<?php

namespace Acme\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Acme\HelloBundle\Entity\Subscribers;
use Acme\HelloBundle\Form\SubscribersType;

/**
 * Subscribers controller.
 *
 */
class SubscribersController extends Controller
{
    /**
     * Lists all Subscribers entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('AcmeHelloBundle:Subscribers')->findAll();

        return $this->render('AcmeHelloBundle:Subscribers:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a Subscribers entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AcmeHelloBundle:Subscribers')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Subscribers entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AcmeHelloBundle:Subscribers:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Displays a form to create a new Subscribers entity.
     *
     */
    public function newAction()
    {
        $entity = new Subscribers();
        $form   = $this->createForm(new SubscribersType(), $entity);

        return $this->render('AcmeHelloBundle:Subscribers:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new Subscribers entity.
     *
     */
    public function createAction()
    {
        $entity  = new Subscribers();
        $request = $this->getRequest();
        $form    = $this->createForm(new SubscribersType(), $entity);
        $form->bindRequest($request);
       

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();
            
                    

            return $this->redirect($this->generateUrl('homepage'));
            
        }

        return $this->render('AcmeHelloBundle:Subscribers:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing Subscribers entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AcmeHelloBundle:Subscribers')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Subscribers entity.');
        }

        $editForm = $this->createForm(new SubscribersType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AcmeHelloBundle:Subscribers:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Subscribers entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AcmeHelloBundle:Subscribers')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Subscribers entity.');
        }

        $editForm   = $this->createForm(new SubscribersType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('subscribers_edit', array('id' => $id)));
        }

        return $this->render('AcmeHelloBundle:Subscribers:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Subscribers entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('AcmeHelloBundle:Subscribers')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Subscribers entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('subscribers'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
