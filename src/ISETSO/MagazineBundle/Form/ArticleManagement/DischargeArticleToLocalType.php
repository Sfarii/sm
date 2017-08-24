<?php

namespace ISETSO\MagazineBundle\Form\ArticleManagement;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use ISETSO\MagazineBundle\Entity\Local\Local;
use ISETSO\MagazineBundle\Entity\Local\TypeLocal;

class DischargeArticleToLocalType extends AbstractType
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
                ->add('typelocal', EntityType::class, array(
                                                        'mapped' => false,
                                                        'class'    => TypeLocal::class,
                                                        'choice_label' => 'designation',
                                                        'placeholder' => 'magazine.placeholder.typelocal',
                                                        'label'    => 'magazine.field.typeLocal',
                                                        'required' => false,
                                                    )
                )
                ->add('toLocal', EntityType::class, array(
                                                        'label' => 'magazine.field.local',
                                                        'class' => Local::class,
                                                        'choice_label' => 'designation',
                                                        'placeholder' => 'magazine.placeholder.local'
                                                    )
                )
                ->add('observation', TextareaType::class, array('label' => 'magazine.field.observation'))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ISETSO\MagazineBundle\Entity\ArticleManagement\DischargeArticleToLocal'
        ));
    }
}
