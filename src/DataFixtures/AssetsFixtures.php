<?php

namespace App\DataFixtures;

use App\Entity\Assets;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AssetsFixtures extends Fixture
{
    public const ASSETS = [
        [
            'name' => 'Iron',
            'quantity' => '45987',
        ],
        [
            'name' => 'Iron',
            'quantity' => '45987',
        ],
        [
            'name' => 'Iron',
            'quantity' => '45987',
        ],
        [
            'name' => 'Iron',
            'quantity' => '45987',
        ],
        [
            'name' => 'Iron',
            'quantity' => '45987',
        ],
        [
            'name' => 'Iron',
            'quantity' => '45987',
        ],
        [
            'name' => 'Iron',
            'quantity' => '45987',
        ],
        [
            'name' => 'Iron',
            'quantity' => '45987',
        ],
        [
            'name' => 'Iron',
            'quantity' => '45987',
        ],
        [
            'name' => 'Iron',
            'quantity' => '45987',
        ],

    ];

    public function load(ObjectManager $manager): void
    {
        foreach (self::ASSETS as $assetsData) {
            $assets = new Assets();
            $assets->setName($assetsData['name']);
            $assets->setQuantity($assetsData['quantity']);
            
            $manager->persist($assets);
        }

        $manager->flush();
    }
}
