<?php
namespace Ibw\JobeetBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Ibw\JobeetBundle\Entity\Goods;
class GoodsRepository extends EntityRepository {
    /**
     * 
     * @param type $user_name
     * @param type $password
     */
public function  get_goods(int $id = null,string $name  = null, $max = null, $offset = null){
       
        $qb =  $this->createQueryBuilder('goods')->orderBy('goods.id','desc');
        if($id){
            $qb->andWhere('googd.id = :password')->setParameter("id",$id);
        }
        if($name){
            $qb ->andWhere('googd.name = :name')->setParameter("name",$name);
        }
        
        if ($max) {
            $qb->setMaxResults ( $max );
	}
		
        if ($offset) {
            $qb->setFirstResult ( $offset );
        }        
        try {
            $goods = $qb->getQuery()->getResult ();
            
        } catch ( \Doctrine\Orm\NoResultException $e ) {
             $user = null;
        }
        return $goods;
 
    }
}