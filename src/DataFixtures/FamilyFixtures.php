<?php

namespace App\DataFixtures;

use App\Entity\Family;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class FamilyFixtures extends Fixture
{
    public const FAMILIES = [
        [
            'firstname' => 'Aragorn',
            'lastname' => 'II',
            'profile' => 'https://cdn.vox-cdn.com/thumbor/4TwUQN73zZaMG35iljQOlginc5Q=/328x0:1920x796/fit-in/1200x600/cdn.vox-cdn.com/uploads/chorus_asset/file/19083920/aragorn.jpg',
        ],
        [
            'firstname' => 'Aragorn',
            'lastname' => 'II',
            'profile' => 'https://cdn.vox-cdn.com/thumbor/4TwUQN73zZaMG35iljQOlginc5Q=/328x0:1920x796/fit-in/1200x600/cdn.vox-cdn.com/uploads/chorus_asset/file/19083920/aragorn.jpg',
        ],
        [
            'firstname' => 'Aragorn',
            'lastname' => 'II',
            'profile' => 'https://cdn.vox-cdn.com/thumbor/4TwUQN73zZaMG35iljQOlginc5Q=/328x0:1920x796/fit-in/1200x600/cdn.vox-cdn.com/uploads/chorus_asset/file/19083920/aragorn.jpg',
        ],
        [
            'firstname' => 'Aragorn',
            'lastname' => 'II',
            'profile' => 'https://cdn.vox-cdn.com/thumbor/4TwUQN73zZaMG35iljQOlginc5Q=/328x0:1920x796/fit-in/1200x600/cdn.vox-cdn.com/uploads/chorus_asset/file/19083920/aragorn.jpg',
        ],
        [
            'firstname' => 'Aragorn',
            'lastname' => 'II',
            'profile' => 'https://cdn.vox-cdn.com/thumbor/4TwUQN73zZaMG35iljQOlginc5Q=/328x0:1920x796/fit-in/1200x600/cdn.vox-cdn.com/uploads/chorus_asset/file/19083920/aragorn.jpg',
        ],
        [
            'firstname' => 'Aragorn',
            'lastname' => 'II',
            'profile' => 'https://cdn.vox-cdn.com/thumbor/4TwUQN73zZaMG35iljQOlginc5Q=/328x0:1920x796/fit-in/1200x600/cdn.vox-cdn.com/uploads/chorus_asset/file/19083920/aragorn.jpg',
        ],
        [
            'firstname' => 'Aragorn',
            'lastname' => 'II',
            'profile' => 'https://cdn.vox-cdn.com/thumbor/4TwUQN73zZaMG35iljQOlginc5Q=/328x0:1920x796/fit-in/1200x600/cdn.vox-cdn.com/uploads/chorus_asset/file/19083920/aragorn.jpg',
        ],
        [
            'firstname' => 'Aragorn',
            'lastname' => 'II',
            'profile' => 'https://cdn.vox-cdn.com/thumbor/4TwUQN73zZaMG35iljQOlginc5Q=/328x0:1920x796/fit-in/1200x600/cdn.vox-cdn.com/uploads/chorus_asset/file/19083920/aragorn.jpg',
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
