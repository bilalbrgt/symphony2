<?php

namespace App\Form;

use App\Entity\Article;
use function PHPSTORM_META\type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', null,
                [
                    'label'=> "titire de l'aticle"
                ])

            ->add('description')
            ->add('imageSrc', null,[
              'label' => "descriptions de l image"
            ])
            ->add('imageAlt')
            ->add('isPublished')

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}
