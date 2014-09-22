<?php

namespace Admin\ManageBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Admin\ManageBundle\Entity\Msg;
use Admin\ManageBundle\Form\MsgType;

/**
 * Msg controller.
 *
 */
class MsgController extends Controller
{

    /**
     * Lists all Msg entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AdminManageBundle:Msg')->findAll();

        return $this->render('AdminManageBundle:Msg:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Msg entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Msg();
        $form = $this->createForm(new MsgType(), $entity);
        $form->submit($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_msg_show', array('id' => $entity->getId())));
        }

        return $this->render('AdminManageBundle:Msg:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Msg entity.
     *
     */
    public function newAction()
    {
        $entity = new Msg();
        $form   = $this->createForm(new MsgType(), $entity);

        return $this->render('AdminManageBundle:Msg:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Msg entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminManageBundle:Msg')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Msg entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AdminManageBundle:Msg:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Msg entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminManageBundle:Msg')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Msg entity.');
        }

        $editForm = $this->createForm(new MsgType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AdminManageBundle:Msg:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Msg entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminManageBundle:Msg')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Msg entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new MsgType(), $entity);
        $editForm->submit($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_msg_edit', array('id' => $id)));
        }

        return $this->render('AdminManageBundle:Msg:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Msg entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->submit($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AdminManageBundle:Msg')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Msg entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_msg'));
    }

    /**
     * Creates a form to delete a Msg entity by id.
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
