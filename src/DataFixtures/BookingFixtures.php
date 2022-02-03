<?php

namespace App\DataFixtures;

use App\Entity\Booking;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class BookingFixtures extends Fixture
{
    public const BOOKING = [
        [
            'name' => 'Aedon Hold',
            'city' => 'France',
            'availability' => 'Monday - Thursday',
            'description' => 'The fist castle conquer by the king Deceneus',
            'picture' => 'https://images.unsplash.com/photo-1571504211935-1c936b327411?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=317&q=80'
        ],
        [
            'name' => 'Charhelm Castle',
            'city' => 'France',
            'availability' => 'Monday - Friday',
            'description' => 'The castle that have been capture by an ennemy',
            'picture' => 'https://images.unsplash.com/photo-1515356619894-b89131037e3d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80'
        ],
        [
            'name' => 'Tharnham Palace',
            'city' => 'France',
            'availability' => 'Sunday - Monday',
            'description' => '1,000 years of royal history',
            'picture' => 'https://images.unsplash.com/photo-1553434320-e9f5757140b1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=327&q=80'
        ]
    ];
    
    public function load(ObjectManager $manager): void
    {
        foreach(self::BOOKING as $bookingData){
            $booking = new Booking();
            $booking->setName($bookingData['name']);
            $booking->setCity($bookingData['city']);
            $booking->setAvailability($bookingData['availability']);
            $booking->setDescription($bookingData['description']);
            $booking->setPicture($bookingData['picture']);

            $manager->persist($booking);
        }

        $manager->flush();
    }
}
