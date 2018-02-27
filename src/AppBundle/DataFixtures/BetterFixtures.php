<?php
/**
 * Created by PhpStorm.
 * User: Pierre
 * Date: 27/02/2018
 * Time: 19:10
 */

namespace AppBundle\DataFixtures;


use AppBundle\Entity\Better;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class BetterFixtures extends Fixture
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $better_1 = new Better('AlexBettingUK');
        $better_2 = new Better('KBS PRONO');
        $better_3 = new Better('NICO PRONO');
        $better_4 = new Better('ParisSportifs.com');
        $better_5 = new Better('KJAMES');

        $manager->persist($better_1);
        $manager->persist($better_2);
        $manager->persist($better_3);
        $manager->persist($better_4);
        $manager->persist($better_5);

        $manager->flush();

    }
}