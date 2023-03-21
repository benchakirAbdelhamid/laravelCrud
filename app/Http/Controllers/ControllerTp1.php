<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerTp1 extends Controller
{
    public function etudiant()
    {
        $data = [];
        $data['nom'] = 'benchakir';
        $data['prenom'] = 'abdelhamid';
        $data['poste'] = 'devloper';
        $data['Modules'] = ['frontend', 'ui/us design', 'backend', 'dataStrucure'];
        return view('affichage', $data);
    }
}
