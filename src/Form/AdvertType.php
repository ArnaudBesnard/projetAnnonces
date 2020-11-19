<?php

namespace App\Form;

use App\Entity\Advert;
use App\Entity\Category;
use Symfony\Component\Form\AbstractType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdvertType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('category', EntityType::class, [
            'label' => 'Choisissez une catégorie *',
            'class' => Category::class,
            'choice_label' => 'name'
        ])
            ->add('title')
            ->add('content')
            ->add('price')
            ->add('email')
            //->add('postedAt')
            ->add('phone')
            ->add('author')
            ->add('city')
            ->add('province')
            ->add('postalCode')
            ->add('published')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Advert::class,
        ]);
    }
}
