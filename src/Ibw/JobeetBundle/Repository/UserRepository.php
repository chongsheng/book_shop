<?php
namespace Ibw\JobeetBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Ibw\JobeetBundle\Entity\User;
class UserRepository extends EntityRepository {
    /**
     * 
     * @param type $user_name
     * @param type $password
     */
    public function  get_user($user_name = null,$password = null,$status = null){
       
        $query =  $this->createQueryBuilder('users')
                    ->where("users.username = :user_name")->setParameter('user_name',$user_name)
                    ->andWhere('users.password = :password')->setParameter("password",sha1($password))
                    ->setMaxResults(1);
        
        if($password){
            $query->andWhere('users.password = :password')->setParameter("password",sha1($password));
            
        }
        if($status){
            
            $query ->andWhere('users.status = :status')->setParameter("status",$status);
        }
        
        
        try {
            $user = $query->getQuery()->getSingleResult ();
        } catch ( \Doctrine\Orm\NoResultException $e ) {
             $user = null;
        }
       
        return $user;
 
    }
}