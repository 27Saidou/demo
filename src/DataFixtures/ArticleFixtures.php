<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ArticleFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i=1; $i <=10 ;$i++) {
            $article = new Article();
            $article->setTitle("le titre de l'article")
            ->setContent("<p>Contenu de article $i</p>")
            ->setImage("http://placehold.it/350x150")
            ->setCreatedAt(new \DateTime());
            $manager->persist($article);
        }
        // $manager->persist($product);

        $manager->flush();
    }
}
