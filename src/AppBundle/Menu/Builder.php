<?php

namespace AppBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

class Builder implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    public function mainMenu(FactoryInterface $factory, array $options)
    {
//		$menu = $factory->createItem('root');
//
//		$menu->addChild('Home', array('route' => 'app_homepage'));

        $menu = $factory->createItem(
            'root',
            array(
                'childrenAttributes' => array(
                    'class' => 'sidebar-menu',
                    'data-widget'=> 'tree'
                ),
            )
        );

        $menu->addChild(
            'MENU PRINCIPAL'
        )->setAttribute('class', 'header');

        if ($this->container->get('security.authorization_checker')->isGranted('ROLE_USER')) {

            $keyPersonal = 'ADMINISTRACIÓN';
            $menu->addChild(
                $keyPersonal,
                array(
                    'childrenAttributes' => array(
                        'class' => 'treeview-menu'
                    ),
                )
            )
                ->setUri('#')
                ->setExtra('icon', 'fa fa-folder-open-o')
                ->setAttribute('class', 'treeview');

            if ($this->container->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {

                $menu[$keyPersonal]
                    ->addChild(
                        'Parámetros',
                        array(
                            'route' => 'admin',
                        )
                    );

            }


        }


        return $menu;
    }
}