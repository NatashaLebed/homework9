<?php

namespace Acme\GuestbookBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class GuestsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('User', 'text')
            ->add('Mail', 'email')
            ->add('Message', 'text')
            ->add('Send', 'submit');
    }

    public function getName()
    {
        return 'guests';
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Acme\GuestbookBundle\Entity\Guests',
        ));
    }
}