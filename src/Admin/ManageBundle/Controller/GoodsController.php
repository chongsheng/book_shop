<?php

namespace Admin\ManageBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Admin\ManageBundle\Entity\Goods;
use Admin\ManageBundle\Form\GoodsType;

/**
 * Goods controller.
 *
 */
class GoodsController extends Controller
{

    /**
     * Lists all Goods entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AdminManageBundle:Goods')->findAll();

        return $this->render('AdminManageBundle:Goods:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Goods entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Goods();
        $form = $this->createForm(new GoodsType(), $entity);
        $form->submit($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_goods_show', array('id' => $entity->getId())));
        }

        return $this->render('AdminManageBundle:Goods:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Goods entity.
     *
     */
    public function newAction()
    {
        $entity = new Goods();
        $form   = $this->createForm(new GoodsType(), $entity);

        return $this->render('AdminManageBundle:Goods:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Goods entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminManageBundle:Goods')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Goods entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AdminManageBundle:Goods:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Goods entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminManageBundle:Goods')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Goods entity.');
        }

        $editForm = $this->createForm(new GoodsType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AdminManageBundle:Goods:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Goods entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminManageBundle:Goods')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Goods entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new GoodsType(), $entity);
        $editForm->submit($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_goods_edit', array('id' => $id)));
        }

        return $this->render('AdminManageBundle:Goods:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Goods entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->submit($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AdminManageBundle:Goods')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Goods entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_goods'));
    }

    /**
     * Creates a form to delete a Goods entity by id.
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
