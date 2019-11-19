<?php

require('classes/Database.class.php');
require('classes/ContactModel.class.php');

switch($_GET['action']){

    case 'create':
        $c = new Contact();
        $c->Surname = $_POST['surname'];
        $c->Name = 'Something';
        $c->Save();

    break;

    case 'delete':
        $idToDelete =  $_GET['id'];
        $ContactToDelete = Contact::Load($idToDelete);
        $ContactToDelete->Delete();

    break;
}

// redirect back
header('location: index.php');