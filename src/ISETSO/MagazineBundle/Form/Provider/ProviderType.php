<?php

namespace ISETSO\MagazineBundle\Form\Provider;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

use ISETSO\MagazineBundle\Entity\Provider\ActivityDomain;

class ProviderType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('socialReason', TextType::class, array('label' => 'magazine.field.socialReason'))
                ->add('phone', IntegerType::class, array('label' => 'magazine.field.phone'))
                ->add('address', TextType::class, array('label' => 'magazine.field.address'))
                ->add('fax', IntegerType::class, array('label' => 'magazine.field.fax'))
                ->add('email', EmailType::class, array('label' => 'magazine.field.email'))
                ->add('contact', TextType::class, array('label' => 'magazine.field.contact'))
                ->add('activityDomain', EntityType::class, array('label' => 'magazine.field.activityDomain', 'choice_label' => 'designation',
                                    'placeholder' => 'magazine.placeholder.activityDomain', 'class' => ActivityDomain::class))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ISETSO\MagazineBundle\Entity\Provider\Provider'
        ));
    }
}
