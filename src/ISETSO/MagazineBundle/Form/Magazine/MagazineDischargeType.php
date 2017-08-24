<?php

namespace ISETSO\MagazineBundle\Form\Magazine;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use ISETSO\UserBundle\Entity\User\User;

class MagazineDischargeType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('date', DateType::class, array(
                    'widget' => 'single_text',
                    'format' => 'yyyy-MM-dd',
                ))
                ->add('toUser', EntityType::class, array('label' => 'magazine.field.toUser' , 'choice_label' => 'username','class' => User::class, 'placeholder' => 'magazine.placeholder.user'))
                ->add('observation', TextareaType::class, array('label' => 'magazine.field.observation'))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ISETSO\MagazineBundle\Entity\Magazine\MagazineDischarge'
        ));
    }
}
