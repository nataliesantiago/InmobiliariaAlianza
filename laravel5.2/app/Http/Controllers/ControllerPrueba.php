<?php namespace MunDocente\Http\Controllers;

use MunDocente\Http\Controllers\Controller;

class ControllerPrueba extends Controller {

    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function showMessage()
    {
        return 'Hola desde el controlador';
    }

}