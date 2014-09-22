<?php

namespace Ibw\JobeetBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
    //use Ibw\JobeetBundle\Entity\User;
//use Ibw\JobeetBundle\Form\UserType;

class DefaultController extends Controller {
        /**
         * @author chen Doe <929318603@11.com>
         * @return type
         */
    public function indexAction(){
        $session = $this->getRequest()->getSession();
        //echo $session->get('user_name');exit;
		return $this->render ( 'IbwJobeetBundle:Default:index.html.twig'  );
    }
	// ...
	public function loginAction() {
		return $this->render ( 'IbwJobeetBundle:Default:login.html.twig');
	}
	
	
	public function changeLanguageAction()
	{
		$language = $this->getRequest()->get('language');
		return $this->redirect($this->generateUrl('ibw_jobeet_homepage', array('_locale' => $language)));
	}
        
    public function login_checkAction(){
            
           $get_user_name = trim($this->getRequest()->get('_username'));
           $get_user_password = trim($this->getRequest()->get('_password'));
           $em = $this->getDoctrine ()->getManager ();
           
	       $entity = $em->getRepository ( 'IbwJobeetBundle:User' )->get_user( $get_user_name, $get_user_password,1);
            
            
            if (! $entity) {
                  throw $this->createNotFoundException ( 'Unable to find user entity.' );
            }else if ($entity->getStatus() == 0){
                throw $this->createNotFoundException ( 'user status is error.' );
            }else{
                $session = $this->getRequest()->getSession();
                $session->set('user_id',$entity->getId());
                $session->set('user_name',$entity->getUsername());
                
                //return $this->render ( 'IbwJobeetBundle:Default:index.html.twig');
                return $this->redirect($this->generateUrl('homepage'));
            }
           
        }

        public function logoutAction(){
                $session = $this->getRequest()->getSession();
                $session->set('user_id',null);
                $session->set('user_name',null);
                return $this->redirect($this->generateUrl('ibw_jobeet_homepage'));
                
        }

}