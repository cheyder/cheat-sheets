<?php

class Task
    {
        public $title;
        private $description;
        public $completed = false;

        public function __construct($title) 
        {
            $this->title = $title; //bezieht sich immer auf ein konkretes/instanziiertes Objekt
        }

        public function complete() 
        {
            $this->completed = true;
        }
        //Konvention Attribute in getter & setter zu framen
        public function setDescription($description)
        {
            //hat den Vorteil, dass sich Bedingungen und Weiteres einfügen lassen
            $this->description = $description;
        }

        public function getDescription()
        {
            return $this->description;
        }
    }
    $task1 = new Task(); //neue Aufgabe anlegen
    //Zugriff auf Objekte ohne Dollarzeichen
    $task1->title = 'Learn PHP'; //ändern einer Eigenschaft
    $task1->complete();

    $task1 = new Task('Learn SQL'); //ruft constructor auf, vorausgesetzt er ist vorhanden
    $task1->setDescription('Write some backend code.')
    echo $task1->getDescription();

    echo $task1->description; //nicht mehr möglich, wenn Attribut als 'public' gesetzt