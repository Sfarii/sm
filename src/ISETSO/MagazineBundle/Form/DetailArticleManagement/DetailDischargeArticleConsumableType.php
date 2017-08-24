<?php

namespace ISETSO\MagazineBundle\Form\DetailArticleManagement;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

use ISETSO\MagazineBundle\Entity\Family\FamilyConsumable;
use ISETSO\MagazineBundle\Entity\Family\SubFamily;

use ISETSO\MagazineBundle\Entity\Article\ArticleConsumable;

use ISETSO\MagazineBundle\Entity\Article\Article;
use ISETSO\MagazineBundle\Entity\Journal\SupportingDocument;

class DetailDischargeArticleConsumableType extends AbstractType
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
                                    'class'    => FamilyConsumable::class,
                                    'choice_label' => 'designation',
                                    'placeholder' => 'magazine.placeholder.family',
                                    'required' => false
                                    ))
                ->add('subFamily', EntityType::class, array('label' => false,
                                    'mapped' => false,
                                    'class'    => SubFamily::class,
                                    'choice_label' => 'designation',
                                    'placeholder' => 'magazine.placeholder.subFamily',
                                    'required' => false,
                                    'disabled'=>false
                                    ))
                ->add('article', EntityType::class, array('label' => false,'mapped' => false,
                                             'choice_label' => 'designation' , 
                                             'class' => ArticleConsumable::class,
                                             'placeholder' => 'magazine.placeholder.articleConsumable',
                                            'disabled'=>false
                                            )
                    )
                ->add('supportingDocument', EntityType::class, array('label' => false,
                                            'choice_label' => 'inventoryNumber' , 
                                            'class' => SupportingDocument::class,
                                            'placeholder' => 'magazine.placeholder.inventoryNumber',
                                            'disabled'=>false
                                            )
                    )
                ->add('quantity', IntegerType::class, array('label' => false))
                
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
