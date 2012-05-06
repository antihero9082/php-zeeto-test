<?php

namespace Acme\HelloBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class SubscribersType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('firstName', 'text')
            ->add('lastName', 'text')
            ->add('email')
        ;
    }
    
    public function getName()
    {
        return 'acme_hellobundle_subscriberstype';
    }
}
