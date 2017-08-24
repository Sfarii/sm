<?php

namespace ISETSO\MagazineBundle\Form\Journal;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use ISETSO\MagazineBundle\Entity\Provider\Provider;
use ISETSO\MagazineBundle\Entity\Journal\Origin;

class JournalConsumableType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('type', ChoiceType::class, array('label' => 'magazine.field.type' ,
                 'choices' => array(
                            'BL' => 'BL',
                            'Stock' => 'Stock',
                            'Facture' => 'Facture'
                            ),
                    'placeholder' => 'magazine.placeholder.type'
                 ))
                ->add('dateEntre', DateType::class, array(
                    'widget' => 'single_text',
                    'format' => 'yyyy-MM-dd',
                ))
                ->add('provider', EntityType::class, array('label' => 'magazine.field.provider', 'class' => Provider::class, 'choice_label' => 'socialReason' , 'placeholder' => 'magazine.placeholder.provider'))
                ->add('origin', EntityType::class, array('label' => 'magazine.field.origin', 'class' => Origin::class, 'choice_label' => 'designation', 'placeholder' => 'magazine.placeholder.origin'))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ISETSO\MagazineBundle\Entity\Journal\JournalConsumable'
        ));
    }
}
