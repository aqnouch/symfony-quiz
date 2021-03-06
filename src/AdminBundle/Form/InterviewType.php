<?php

namespace AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Form Interview
 */
class InterviewType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('question')
            ->add('answer', 'textarea', array('attr' => array('rows' => 8) ) )
            ->add('position')
            ->add('topicsOld')
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function setDefaultOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Acme\ModelBundle\Entity\Interview'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'acme_modelbundle_interview';
    }
}
