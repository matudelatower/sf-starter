<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture {

	private $passwordEncoder;

	public function __construct( UserPasswordEncoderInterface $passwordEncoder ) {
		$this->passwordEncoder = $passwordEncoder;
	}

	public function load( ObjectManager $manager ) {
		$user = new User();
		$user->setUsername( 'admin' );
		$user->setEmail( 'matias.delatorre89@gmail.com' );
		$user->setRoles( [ 'ROLE_ADMIN' ] );
		$user->setEnabled( true );

		$user->setPassword( $this->passwordEncoder->encodePassword(
			$user,
			'123456'
		) );

		$manager->persist( $user );
		$manager->flush();
	}
}
