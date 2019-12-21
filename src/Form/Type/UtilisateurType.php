<?php

namespace App\Form\Type;

use App\Entity\Societe;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class UtilisateurType
 *
 * @package App\Controller
 */
class UtilisateurType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id', IntegerType::class, [
                'mapped' => false,
                'label' => 'Id',
            ])
            ->add(
                'nom',
                TextType::class,
                [
                    'label' => 'Nom',
                    'required' => true
                ]
            )
            ->add(
                'prenom',
                TextType::class,
                [
                    'label' => 'Prenom',
                    'required' => true
                ]
            )
            ->add(
                'email',
                EmailType::class,
                [
                    'label' => 'Email',
                    'required' => true
                ]
            )->add(
                'roles',
                TextType::class,
                [
                    'label' => 'Roles',
                    'mapped' => false,
                    'required' => true
                ]
            )
            ->add(
                'societe',
                EntityType::class,
                [
                    'class' => Societe::class,
                    'choice_label' => 'Societe',
                    'multiple' => false
                ]
            );
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\Entity\Utilisateur',
            'csrf_protection' => false,
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'utilisateur';
    }
}
