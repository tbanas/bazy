<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\MealType;

class LoadMealTypeData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $breakfast = new MealType("śniadanie");
        $brunch = new MealType("drugie śniadanie");
        $lunch = new MealType("lunch");
        $dessert = new MealType("deser");
        $tea = new MealType("podwieczorek");
        $supper = new MealType("kolacja");

        $manager->persist($breakfast);
        $manager->persist($brunch);
        $manager->persist($lunch);
        $manager->persist($dessert);
        $manager->persist($tea);
        $manager->persist($supper);
        $manager->flush();
    }
}