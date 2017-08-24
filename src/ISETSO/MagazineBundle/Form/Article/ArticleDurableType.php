<?php

namespace ISETSO\MagazineBundle\Form\Article;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

use ISETSO\MagazineBundle\Entity\Article\Unit;
use ISETSO\MagazineBundle\Entity\Family\FamilyDurable;
use ISETSO\MagazineBundle\Entity\Family\SubFamily;
use ISETSO\MagazineBundle\Entity\Local\TypeLocal;
use ISETSO\MagazineBundle\Entity\Local\Local;

class ArticleDurableType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('designation', TextType::class, array('label' => 'magazine.field.designation'))
                ->add('garenti', TextType::class, array('label' => 'magazine.field.garenti'))
                ->add('unit', EntityType::class, array(
                                    'mapped' => true,
                                    'class'    => Unit::class,
                                    'choice_label' => 'designation',
                                    'placeholder' => 'magazine.placeholder.unit',
                                    'label'    => 'magazine.field.unit'
                                    ))
                ->add('family', EntityType::class, array(
                                    'mapped' => false,
                                    'class'    => FamilyDurable::class,
                                    'choice_label' => 'designation',
                                    'placeholder' => 'magazine.placeholder.family',
                                    'label'    => 'magazine.field.family',
                                    'required' => false,
                                    ))
                ->add('subFamily', EntityType::class, array(
                                    'mapped' => true,
                                    'class'    => SubFamily::class,
                                    'choice_label' => 'designation',
                                    'placeholder' => 'magazine.placeholder.subFamily',
                                    'label'    => 'magazine.field.subFamily'
                                    ))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ISETSO\MagazineBundle\Entity\Article\ArticleDurable'
        ));
    }
}
