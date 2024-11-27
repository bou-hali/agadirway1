<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CarteModel;

class Cart extends BaseController
{
    public function index()
    {
        helper('form');
        return view('carte');
    }

    public function validation()
    {
        helper('form');
        
        // Charger le service de validation
        $validation = \Config\Services::validation();

        // Définir les règles de validation
        $validation->setRules(
            [
                'nom'       => 'required|min_length[3]', 
                'email'     => 'required|valid_email', 
                'carte'     => 'required', 
                'documents' => 'uploaded[documents]|max_size[documents,10240]|ext_in[documents,pdf,jpg,jpeg,png]',
            ],
            [ // Messages personnalisés (optionnel)
                'nom' => [
                    'required'   => 'Le nom est obligatoire.',
                    'min_length' => 'Le nom doit contenir au moins 3 caractères.',
                ],
                'email' => [
                    'required'    => 'L\'email est obligatoire.',
                    'valid_email' => 'Veuillez entrer une adresse email valide.',
                ],
                'documents' => [
                    'uploaded' => 'Veuillez télécharger un fichier.',
                    'max_size' => 'La taille maximale autorisée est de 10 Mo.',
                    'ext_in'   => 'Les extensions autorisées sont : pdf, jpg, jpeg, png.',
                ],
            ]
        );

        // Vérifier si la validation échoue
        if (!$validation->withRequest($this->request)->run()) {
            return view('carte', [
                'validation' => $validation,
            ]);
        }

        // Gestion des fichiers
        $documents = $this->request->getFile('documents');
        $documentsPath = '';
        if ($documents && $documents->isValid()) {
            $documentsPath = $documents->getRandomName();
            $documents->move(WRITEPATH . 'uploads', $documentsPath);
        }

        // Préparer les données pour l'insertion
        $model = new CarteModel();
        $data = [
            'nom'        => $this->request->getPost('nom'),
            'email'      => $this->request->getPost('email'),
            'carte'      => $this->request->getPost('carte'),
            'message'    => $this->request->getPost('message'), // Assurez-vous que c'est un champ texte
            'documents'  => $documentsPath,
            'created_at' => date('Y-m-d H:i:s'),
        ];

        // Insérer les données dans la base
        $model->insert($data);

        // Afficher un message de succès
        $successMessage = 'Votre inscription a été soumise avec succès. Merci !';

        return view('carte', [
            'successMessage' => $successMessage,
        ]);
    }
}
