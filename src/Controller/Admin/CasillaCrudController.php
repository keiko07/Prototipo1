<?php

namespace App\Controller\Admin;

use App\Entity\Casilla;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CasillaCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Casilla::class;
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
