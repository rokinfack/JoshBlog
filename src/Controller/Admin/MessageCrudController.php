<?php

namespace App\Controller\Admin;

use App\Entity\Message;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class MessageCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Message::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('title'),
            TextEditorField::new('content'),
            // ImageField::new('imageMessage')
            // ->setBasePath('/assets/images/') // Le chemin de base pour afficher les images
            // ->setUploadDir('public/assets/images/') // Le chemin où les images téléchargées seront stockées
            // ->setUploadedFileNamePattern('[randomhash].[extension]') // Modèle de nom de fichier pour les images téléchargées
            // ->setLabel('Image de l\'article') // Étiquette du champ
            // ->setRequired(false) // Si le champ est requis ou non
        
        ];
    }
}
