<?php
namespace App\Form\Type;

use App\Entity\Auteur;
use App\Entity\Langue;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class LivreType
 * @package App\Form\Type
 */
class LivreType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre', TextType::class, ['label' => 'Titre'])
            ->add('date_edition', DateTimeType::class)
            ->add('auteur',
                EntityType::class,
                [
                    'class' => Auteur::class,
                    'choice_label' => 'nom',
                    /*'query_builder' => function ($auteur) {
                        return $auteur->getNom() . ' ' . $auteur->getPrenom();
                    },*/
                    /*'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('auteur')
                            ->andWhere('auteur.id = :id')
                            ->setParameter('id', 3)
                            ->orderBy('auteur.nom', 'ASC');
                    },*/
                    /*'choice_value' => function ($auteur = null) {
                        return $auteur ? $auteur->getId().' '.$auteur->getNom() : '';
                    },*/
                    'multiple' => false,
                    'expanded' => false,
                ]
            )

            ->add('langues',
                EntityType::class,
                [
                    'class' => Langue::class,
                    'choice_label' => 'nom',
                    /*'query_builder' => function ($auteur) {
                        return $auteur->getNom() . ' ' . $auteur->getPrenom();
                    },*/
                    /*'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('auteur')
                            ->andWhere('auteur.id = :id')
                            ->setParameter('id', 3)
                            ->orderBy('auteur.nom', 'ASC');
                    },*/
                    /*'choice_value' => function ($auteur = null) {
                        return $auteur ? $auteur->getId().' '.$auteur->getNom() : '';
                    },*/
                    'multiple' => true,
                    'expanded' => false,
                ]
            )
            ->add('save', SubmitType::class, ['label' => 'Enregistrer']);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\Entity\Livre',
            'csrf_protection' => false,
        ));
    }
}
