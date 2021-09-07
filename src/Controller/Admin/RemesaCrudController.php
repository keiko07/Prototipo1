<?php

namespace App\Controller\Admin;

use App\Entity\Remesa;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class RemesaCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Remesa::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
