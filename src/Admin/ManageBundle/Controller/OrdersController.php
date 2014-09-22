<?php

namespace Admin\ManageBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Admin\ManageBundle\Entity\Orders;
use Admin\ManageBundle\Form\OrdersType;

/**
 * Orders controller.
 *
 */
class OrdersController extends Controller
{

    /**
     * Lists all Orders entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AdminManageBundle:Orders')->findAll();

        return $this->render('AdminManageBundle:Orders:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Orders entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Orders();
        $form = $this->createForm(new OrdersType(), $entity);
        $form->submit($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_orders_show', array('id' => $entity->getId())));
        }

        return $this->render('AdminManageBundle:Orders:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Orders entity.
     *
     */
    public function newAction()
    {
        $entity = new Orders();
        $form   = $this->createForm(new OrdersType(), $entity);

        return $this->render('AdminManageBundle:Orders:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Orders entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminManageBundle:Orders')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Orders entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AdminManageBundle:Orders:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Orders entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminManageBundle:Orders')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Orders entity.');
        }

        $editForm = $this->createForm(new OrdersType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AdminManageBundle:Orders:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Orders entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminManageBundle:Orders')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Orders entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new OrdersType(), $entity);
        $editForm->submit($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_orders_edit', array('id' => $id)));
        }

        return $this->render('AdminManageBundle:Orders:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Orders entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->submit($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AdminManageBundle:Orders')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Orders entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_orders'));
    }

    /**
     * Creates a form to delete a Orders entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
