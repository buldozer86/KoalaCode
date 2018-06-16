<?php
namespace App\DataFixtures;


use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppUserFixtures extends Fixture
{
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i <= 3; $i++) {
            $user = new User();

            $var = 'user' . $i;
            $dataTime = new \DateTime("now");
            $password = $this->encoder->encodePassword($user, $var . $i);

            $user->setLogin($var);
            $user->setPassword($password);
            $user->setFirstName($var . '_firstName');
            $user->setLastName($var . '_lastName');
            $user->setEmail($var . '@mail.com');
            $user->setDescription('Lorem Ipsum is simply dummy text of the printing and typesetting industry.');
            $user->setKarma(100);
            $user->setCreateDate($dataTime);
            $user->setUpdateDate($dataTime);

            $manager->persist($user);
            $manager->flush();
        }
    }
}