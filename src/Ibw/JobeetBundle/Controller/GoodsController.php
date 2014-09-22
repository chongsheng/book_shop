<?php

namespace Ibw\JobeetBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ibw\JobeetBundle\Entity\Goods;
use Ibw\JobeetBundle\Form\GoodsType;

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

        $entities = $em->getRepository('IbwJobeetBundle:Goods')->findAll();

        return $this->render('IbwJobeetBundle:Goods:index.html.twig', array(
            'entities' => $entities,
        ));
    }
   

    /**
     * Finds and displays a Goods entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IbwJobeetBundle:Goods')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Goods entity.');
        }

        return $this->render('IbwJobeetBundle:Goods:show.html.twig', array(
            'entity'      => $entity,
        ));
    }

}
