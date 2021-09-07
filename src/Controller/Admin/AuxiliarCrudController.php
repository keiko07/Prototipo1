<?php

namespace App\Controller\Admin;

use App\Entity\Auxiliar;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;

class AuxiliarCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Auxiliar::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            //IdField::new('id'),
            TextField::new('nombreAuxiliar1'),
            BooleanField::new('grupo1'),
            TextField::new('codigo1'),
            NumberField::new('orden1'),
            NumberField::new('orden2'),
            NumberField::new('auxiliar1'),
            NumberField::new('auxiliar2'),
            NumberField::new('auxiliar3'),
            TextField::new('tipoAuxiliar1'),
            TextField::new('tipoAuxiliar2'),
            TextField::new('cuentaObjeto'),
            TextField::new('cuentaAux1'),
            TextField::new('cuentaAux2'),
            TextField::new('nombreAuxiliar2'),
            TextField::new('nombreAuxiliar3'),
            BooleanField::new('categoria1'),
            BooleanField::new('categoria3'),
            TextField::new('activado1'),
            TextField::new('activado2'),
            TextField::new('activado3'),
            TextField::new('activado4'),
            TextField::new('activado5'),
            TextField::new('notas'),
            
            
            AssociationField::new('remesa'),
            AssociationField::new('tipoDocumento'),
            AssociationField::new('casilla'),
            AssociationField::new('cia'),
            AssociationField::new('criterio')     //NO SE PUEDE ASOCIAR EL CRITERIO POR QUE NO ESTA RELACIONADA EN ESTA BASE DE DATOS
        ];
    }
    
}
