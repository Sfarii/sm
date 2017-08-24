<?php

namespace ISETSO\MagazineBundle\Form\DetailArticleManagement;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

use ISETSO\MagazineBundle\Entity\Family\Family;
use ISETSO\MagazineBundle\Entity\Family\SubFamily;

use ISETSO\MagazineBundle\Entity\Article\Article;

class DetailOrderArticleType extends AbstractType
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
                                    'class'    => Family::class,
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
                                                             'choice_label' => 'designation',
                                                             'class' => Article::class,
                                                              'placeholder' => 'magazine.placeholder.article'))
                ->add('quantity', IntegerType::class, array('label' => false))
                
        ;
    }
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ISETSO\MagazineBundle\Entity\DetailArticleManagement\DetailOrderArticle'
        ));
    }
}
