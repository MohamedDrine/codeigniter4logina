<?php namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Noauth implements FilterInterface // filtre qui permet de rediriger un utilisateur qui est  logger
{
    public function before(RequestInterface $request)
    {
        // Do something here
        if(session()->get('isLoggedIn')){
          return redirect()->to('/dashboard');
        }

    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response)
    {
        // Do something here
    }
}
