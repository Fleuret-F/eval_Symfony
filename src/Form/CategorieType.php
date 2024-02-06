<?php

namespace App\Form;

use App\Entity\Article;
use App\Entity\Categorie;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CategorieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
<<<<<<< HEAD
            ->add('articles', EntityType::class, [
                'class' => Article::class,
'choice_label' => 'id',
'multiple' => true,
            ])
=======
            // ->add('articles', EntityType::class, [
            //     'class' => Article::class,
            //     'choice_label' => 'id',
            //     'multiple' => true,
            // ])
>>>>>>> 99f2fae1c871899639f12e2c8deae74e789ebf81
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Categorie::class,
        ]);
    }
}
