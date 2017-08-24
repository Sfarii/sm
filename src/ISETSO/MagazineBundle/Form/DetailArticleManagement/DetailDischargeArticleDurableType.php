<?php

namespace ISETSO\MagazineBundle\Form\DetailArticleManagement;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

use ISETSO\MagazineBundle\Entity\Family\FamilyDurable;
use ISETSO\MagazineBundle\Entity\Family\SubFamily;

use ISETSO\MagazineBundle\Entity\Article\ArticleDurable;

use ISETSO\MagazineBundle\Entity\Article\Article;
use ISETSO\MagazineBundle\Entity\Journal\SupportingDocument;

class DetailDischargeArticleDurableType extends AbstractType
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
                ->add('article', EntityType::class, array('label' => false,'mapped' => false,
                                             'choice_label' => 'designation' , 
                                             'class' => ArticleDurable::class,
                                             'placeholder' => 'magazine.placeholder.articleDurable',
                                            )
                    )
                ->add('supportingDocument', EntityType::class, array('label' => false,
                                             'choice_label' => 'inventoryNumber' , 'multiple' => true,
                                             'class' => SupportingDocument::class,
                                             'placeholder' => 'magazine.placeholder.inventoryNumber',
                                            )
                    )
                ->add('quantity', IntegerType::class, array('label' => false,'read_only' => true))
                
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ISETSO\MagazineBundle\Entity\DetailArticleManagement\DetailDischargeArticle'
        ));
    }
}
