<?php

namespace App\Controller\Admin;

use App\Entity\GestionRegistro;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;

class GestionRegistroCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return GestionRegistro::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            //IdField::new('id'),
            DateTimeField::new('fechaIngreso'),
            DateTimeField::new('fechaLm'),
            NumberField::new('importe'),
            DateTimeField::new('fechaRegistro'),
            DateTimeField::new('fechaActualizacion'),
            AssociationField::new('auxiliar'),
            AssociationField::new('forma')
            
        ];
    }
    
}
