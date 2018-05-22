<?php

namespace App\Controller;

use EasyCorp\Bundle\EasyAdminBundle\Controller\AdminController as BaseAdminController;


class AdminController extends BaseAdminController
{
//	User
    public function listUserAction()
    {
        if (!$this->isGranted("ROLE_ADMIN")) {
            return $this->redirectToRoute('admin', ['entity' => 'User', 'action' => 'edit', 'id' => $this->getUser()->getId()]);
        }
        return $this->listAction();
    }
    public function createNewUserEntity()
    {
        return $this->get('fos_user.user_manager')->createUser();
    }
    public function prePersistUserEntity($user)
    {
        $this->get('fos_user.user_manager')->updateUser($user, false);
    }
    public function preUpdateUserEntity($user)
    {
        $this->get('fos_user.user_manager')->updateUser($user, false);
    }
}