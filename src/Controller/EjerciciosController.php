<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class EjerciciosController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        return $this->render('ejercicios/index.html.twig', [
            'controller_name' => 'EjerciciosController',
        ]);
    }
     /**
     * @Route("/pagina1", name="pagina1")
     */
    public function pagina1()
    {
        $var1 = 'Hola';
        $var2 = 'Mundo';

        $varT = $var1.' '.$var2; 

       return $this->render('ejercicios/pagina1.html.twig', 
       array('var1' => $var1, 'var2' => $var2, 'varT' => $varT ));
    }
     /**
     * @Route("/pagina2", name="pagina2")
     */
    public function pagina2()
    {
        $var1 = 2;
        $var2 = 6;
        $varT = $var1 + $var2;
        return $this->render('ejercicios/pagina2.html.twig', 
    array('var1' => $var1, 'var2' => $var2, 'varT' => $varT ));
    }
     /**
     * @Route("/pagina3", name="pagina3")
     */
    public function pagina3()
    {
        $info = phpinfo(); 

        return $this->render('ejercicios/pagina3.html.twig', 
        array('info' => $info ));
    }
    /**
     * @Route("/pagina4", name="pagina4")
     */
    public function pagina4()
    {
        return $this->render('ejercicios/pagina4.html.twig', [
            'controller_name' => 'EjerciciosController',
        ]);
    }
    
}
