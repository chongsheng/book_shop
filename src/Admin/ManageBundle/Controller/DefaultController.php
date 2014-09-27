<?php

namespace Admin\ManageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AdminManageBundle:Default:index.html.twig');
    }
    public function login_checkAction()
    {
        
      $user_name =  trim($this->getRequest()->get('user'));
      $pwd = trim($this->getRequest()->get('pd'));
      if($user_name == "admin" && $pwd = "admin"){
         return $this->redirect($this->generateUrl('admin_manage_homepage'));
          
      }else{
         // $this->createNotFoundException('not admin');
          echo "manager is not exit";
          
      }
    }
}
