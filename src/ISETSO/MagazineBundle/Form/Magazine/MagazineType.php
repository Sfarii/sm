<?php

namespace ISETSO\MagazineBundle\Form\Magazine;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

use ISETSO\UserBundle\Entity\User\User;

class MagazineType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('designation', TextType::class, array('label' => 'magazine.field.designation'))
                ->add('inCharge', EntityType::class, array('multiple' => true,'label' => 'magazine.field.inCharge' ,'class' => User::class))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ISETSO\MagazineBundle\Entity\Magazine\Magazine'
        ));
    }
}
