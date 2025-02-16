<?php

namespace App\DataFixtures;

use App\Entity\House;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $houseTypes = ['apartment', 'house', 'villa', 'studio'];
        $statuses = ['available', 'booked', 'inactive'];

        for ($i = 0; $i < 20; $i++) {
            $house = new House();
            $house->setTitle('House '.$i);
            $house->setDescription('This is a description for house '.$i);
            $house->setAddress('Street '.mt_rand(1, 100).', City '.mt_rand(1, 20).', Country');
            $house->setPricePerNight(mt_rand(50, 500));
            $house->setHouseType($houseTypes[array_rand($houseTypes)]);
            $house->setStatus($statuses[array_rand($statuses)]);
            $house->setCreatedAt(new \DateTime());

            $manager->persist($house);
        }

        $manager->flush();
    }
}
