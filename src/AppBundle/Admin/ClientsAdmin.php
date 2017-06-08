<?php
// src/AppBundle/Admin/ClientsAdmin.php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;

class ClientsAdmin extends AbstractAdmin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            // ->add('name', 'entity', array(
            //     'class' => 'AppBundle\Entity\Clients',
            //     'property' => 'name'
            // ))
            ->add('name')
            ->add('description')
            ->add('utilisateurs', 'entity', array(
                'class' => 'UtilisateursBundle\Entity\Utilisateurs',
                'property' => 'username'
            ))
            
            // ...
       ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
       $datagridMapper
            ->add('name')
            
       ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name')
       ;
    }

    // Fields to be shown on show action
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('name')
            
        ;
    }
}