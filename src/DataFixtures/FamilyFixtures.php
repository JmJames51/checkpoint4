<?php

namespace App\DataFixtures;

use App\Entity\Family;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class FamilyFixtures extends Fixture
{
    public const FAMILIES = [
        [
            'firstname' => 'Grisha',
            'lastname' => 'jaeger',
            'profile' => 'https://img4.goodfon.com/wallpaper/nbig/0/d7/shingeki-no-kyojin-attack-on-titan-anime-manga-japanese-roya.jpg',
        ],
        [
            'firstname' => 'Grisha',
            'lastname' => 'jaeger',
            'profile' => 'https://img4.goodfon.com/wallpaper/nbig/0/d7/shingeki-no-kyojin-attack-on-titan-anime-manga-japanese-roya.jpg',
        ],
        [
            'firstname' => 'Grisha',
            'lastname' => 'jaeger',
            'profile' => 'https://img4.goodfon.com/wallpaper/nbig/0/d7/shingeki-no-kyojin-attack-on-titan-anime-manga-japanese-roya.jpg',
        ],
        [
            'firstname' => 'Grisha',
            'lastname' => 'jaeger',
            'profile' => 'https://img4.goodfon.com/wallpaper/nbig/0/d7/shingeki-no-kyojin-attack-on-titan-anime-manga-japanese-roya.jpg',
        ],
        [
            'firstname' => 'Grisha',
            'lastname' => 'jaeger',
            'profile' => 'https://img4.goodfon.com/wallpaper/nbig/0/d7/shingeki-no-kyojin-attack-on-titan-anime-manga-japanese-roya.jpg',
        ],
        [
            'firstname' => 'Grisha',
            'lastname' => 'jaeger',
            'profile' => 'https://img4.goodfon.com/wallpaper/nbig/0/d7/shingeki-no-kyojin-attack-on-titan-anime-manga-japanese-roya.jpg',
        ],
        [
            'firstname' => 'Grisha',
            'lastname' => 'jaeger',
            'profile' => 'https://img4.goodfon.com/wallpaper/nbig/0/d7/shingeki-no-kyojin-attack-on-titan-anime-manga-japanese-roya.jpg',
        ],
        [
            'firstname' => 'Grisha',
            'lastname' => 'jaeger',
            'profile' => 'https://img4.goodfon.com/wallpaper/nbig/0/d7/shingeki-no-kyojin-attack-on-titan-anime-manga-japanese-roya.jpg',
        ],
    ];
    public function load(ObjectManager $manager): void
    {
        foreach (self::FAMILIES as $familyData) {
            $family = new Family();
            $family->setFirstname($familyData['firstname']);
            $family->setLastname($familyData['lastname']);
            $family->setProfile($familyData['profile']);

            $manager->persist($family);
        }

        $manager->flush();
    }
}
