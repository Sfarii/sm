<?php

namespace ISETSO\MagazineBundle\Form\Journal;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

use ISETSO\MagazineBundle\Entity\Family\FamilyDurable;
use ISETSO\MagazineBundle\Entity\Family\SubFamily;

use ISETSO\MagazineBundle\Entity\Article\ArticleDurable;

class SupportingDocumentDurableType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('family', EntityType::class, array('label' => false,
                                    'mapped' => false,
                                    'class'    => FamilyDurable::class,
                                    'choice_label' => 'designation',
                                    'placeholder' => 'magazine.placeholder.family',
                                    'required' => false,
                                    ))
                ->add('subFamily', EntityType::class, array('label' => false,
                                    'mapped' => false,
                                    'class'    => SubFamily::class,
                                    'choice_label' => 'designation',
                                    'placeholder' => 'magazine.placeholder.subFamily',
                                    'required' => false,
                                    ))
                ->add('article', EntityType::class, array('label' => false,
                                             'choice_label' => 'designation' , 
                                             'class' => ArticleDurable::class,
                                             'placeholder' => 'magazine.placeholder.articleDurable',
                                            )
                    )
                ->add('inventoryNumber', TextType::class, array('label' => false))
                ->add('price', IntegerType::class, array('label' => false))
                ->add('quantity', IntegerType::class, array('label' => false))

                
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ISETSO\MagazineBundle\Entity\Journal\SupportingDocument'
        ));
    }
}
