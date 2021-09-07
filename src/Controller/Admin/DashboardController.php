<?php

namespace App\Controller\Admin;

use App\Entity\Auxiliar;
use App\Entity\Remesa;
use App\Entity\TipoDocumento;
use App\Entity\Casilla;
use App\Entity\Cia;
use App\Entity\Criterio;
use App\Entity\Forma;
use App\Entity\GestionRegistro;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Project');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Auxiliar', 'fas fa-list', Auxiliar::class);
        yield MenuItem::linkToCrud('Remesa', 'fas fa-list', Remesa::class);
        yield MenuItem::linkToCrud('Tipo Documento', 'fas fa-list', TipoDocumento::class);
        yield MenuItem::linkToCrud('Casilla','fas fa-list', Casilla::class);
        yield MenuItem::linkToCrud('Cia','fas fa-list', Cia::class);
        yield MenuItem::linkToCrud('Criterio','fas fa-list', Criterio::class);
        yield MenuItem::linkToCrud('Forma','fas fa-list', Forma::class);
        yield MenuItem::linkToCrud('Gestion de registros','fas fa-list', GestionRegistro::class);
    }
}
