<?php

namespace Ibw\JobeetBundle\Form;

use Ibw\JobeetBundle\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType {
	/**
	 *
	 * @param FormBuilderInterface $builder        	
	 * @param array $options        	
	 */
	public function buildForm(FormBuilderInterface $builder, array $options) {
		$builder->add("username")->add("password");
	}
	
	/**
	 *
	 * @param OptionsResolverInterface $resolver        	
	 */
	public function setDefaultOptions(OptionsResolverInterface $resolver) {
		$resolver->setDefaults ( array (
				'data_class' => 'Ibw\JobeetBundle\Entity\User' 
		) );
	}
	
	/**
	 *
	 * @return string
	 */
	public function getName() {
		return 'ibw_jobeetbundle_user_type';
	}
}
