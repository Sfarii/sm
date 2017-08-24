<?php

namespace ISETSO\MagazineBundle\Form\Check;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class CheckType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('etat', ChoiceType::class, array('label' => 'magazine.field.etat' ,
                        'choices' => array(
                                "a"=> 'magazine.etatOption.accept',
                                "r"=> 'magazine.etatOption.refuse',
                                "w"=> 'magazine.etatOption.wait'
                            ),
                        'multiple' => false,
                        'placeholder' => 'magazine.placeholder.etat'
                    ))
        ;
    }
    
    public function getName()
    {
        return 'search_form';
    }
}
