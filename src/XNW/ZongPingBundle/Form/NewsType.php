<?php

namespace XNW\ZongPingBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use XNW\ZongPingBundle\XNWZongPingBundle;

class NewsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('content')
            //->add('userId')
            ->add('status')
            ->add('user', EntityType::class, array(
                'class' => 'XNWZongPingBundle:User',
                'choice_label' => 'name',
                //'multiple' => true,
                //'expanded' => true,
            ))
            ->add('createdAt')
            ->add('updatedAt')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'XNW\ZongPingBundle\Entity\News'
        ));
    }
}
