<?php

namespace ISETSO\MagazineBundle\Form\ArticleManagement;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;

use ISETSO\UserBundle\Entity\User\User;

class DischargeArticleToUserType extends AbstractType
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
                ->add('toUser', EntityType::class, array('label' => 'magazine.field.toUser' ,
                                                        'choice_label' => 'username',
                                                        'class' => User::class,
                                                        'placeholder' => 'magazine.placeholder.user',
                                                        'query_builder' =>  function (EntityRepository $er) {
                                                                            
                                                                            return $er->createQueryBuilder('n')
                                                                                        ->where('n.roles NOT LIKE :roles')
                                                                                        ->setParameter('roles', '%ROLE_SUPER_ADMIN%')
                                                                                        ->setParameter('roles', '%ROLE_GESTION_DISCHARGE_TO_USER%');
                                                                        }
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
            'data_class' => 'ISETSO\MagazineBundle\Entity\ArticleManagement\DischargeArticleToUser'
        ));
    }
}
