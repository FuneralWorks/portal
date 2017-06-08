<?php
// src/AppBundle/Admin/SubscriptionsAdmin.php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;

class SubscriptionsAdmin extends AbstractAdmin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {

        

        // $query = $em->createQueryBuilder('c')
        //             ->select('c')
        //             ->from('AppBundle:Products', 'c')
        //             ->
        $formMapper
            // ->add('name', 'entity', array(
            //     'class' => 'AppBundle\Entity\Subscriptions',
            //     'property' => 'name'
            // ))
            ->tab('General')
                ->with('group1')
                    ->add('name')
                    ->add('startDate')
                    ->add('monthDuration')
                    ->add('sapContractNumber')
                    ->add('client', 'entity', array(
                        'class' => 'AppBundle\Entity\Clients',
                         'choice_label' => 'name'
                    ))
                ->end()
            ->end()


            
            ->tab('Produits')
                ->with('Produits')
                    ->add('products', 'entity', array(
                        'class' => 'AppBundle\Entity\Products',
                        'property' => 'name',
                        'by_reference' => false,
                        'multiple' => true
                    ))
                    
                ->end()
            ->end()
       ;
    }

    
    public function preUpdate($object){
        foreach ($object->getProducts() as $product) {
            $products->setSubscriptions($object);
        }
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
            ->add('startDate')
        ;
    }
}