<?php

namespace App\Form;

use App\Entity\GestionRegistro;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GestionRegistroType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('chequeo')
            ->add('mk')
            ->add('idInterfaz')
            ->add('idLote')
            ->add('idControl')
            ->add('fechaIngreso')
            ->add('fechaLm')
            ->add('importe')
            ->add('idControl1')
            ->add('idControl2')
            ->add('fechaControl1')
            ->add('notas')
            ->add('observaciones')
            ->add('fechaRegistro')
            ->add('fechaActualizacion')
            ->add('marcaBanco')
            ->add('numBatch')
            ->add('numDocumento')
            ->add('bloqueo')
            ->add('formaId')
            ->add('auxiliarId')
            ->add('usuarioId')
            ->add('secuenciaRegistroId')
            ->add('cuentaId')
            ->add('auxiliar')
            ->add('forma')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => GestionRegistro::class,
        ]);
    }
}
