<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{
    public function indexAction()
    {

        $em = $this->getDoctrine()->getManager();



        $entities = $em->getRepository(User::class)->findAll();

        return $this->render('@App/User/index.html.twig',[
            'entities' => $entities
        ]);
    }

    public function newAction(Request $request)
    {

        $entity = $this->get('fos_user.user_manager')->createUser();


        $form = $this->createForm(UserType::class, $entity);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){

            $em = $this->getDoctrine()->getManager();

            $entity->setPlainPassword($entity->getUsername());

            $em->persist($entity);
            $em->flush($entity);


            $this->addFlash('success', 'Usuario creado correctamente.');


            return $this->redirectToRoute('user_index');

        }


        return $this->render('@App/user/form.html.twig',[
            'form' => $form->createView(),
            'entity' => $entity
        ]);
    }

    public function updateAction(Request $request, User $entity)
    {

        $form = $this->createForm(UserType::class, $entity);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){

            $em = $this->getDoctrine()->getManager();

            $em->flush($entity);

            $this->addFlash('success', 'Usuario actualizado correctamente.');

            return $this->redirectToRoute('user_index');

        }

        return $this->render('@App/user/form.html.twig',[
            'form' => $form->createView(),
            'entity' => $entity
        ]);
    }
}
