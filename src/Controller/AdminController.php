<?php

namespace App\Controller;

use EasyCorp\Bundle\EasyAdminBundle\Controller\EasyAdminController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AdminController extends EasyAdminController {

	private $passwordEncoder;

	public function __construct( UserPasswordEncoderInterface $passwordEncoder ) {
		$this->passwordEncoder = $passwordEncoder;
	}

	public function persistUserEntity( $user ) {
		$user->setPassword( $this->passwordEncoder->encodePassword(
			$user,
			$this->request->get( 'user' )['plainPassword']
		) );
		parent::persistEntity( $user );
	}

//
	public function updateUserEntity( $user ) {
		if ( $this->request->get( 'user' ) && $this->request->get( 'user' )['plainPassword'] ) {
			$user->setPassword( $this->passwordEncoder->encodePassword(
				$user,
				$this->request->get( 'user' )['plainPassword']
			) );
		}
		parent::updateEntity( $user );

	}
}
