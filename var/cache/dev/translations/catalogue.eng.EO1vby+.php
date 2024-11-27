<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('eng', array (
  'messages' => 
  array (
    'AddInterventionForm.Start' => 'Start of the intervention',
    'AddInterventionForm.End' => 'End of the intervention',
    'AddInterventionForm.Type' => 'Type of intervention',
    'AddInterventionForm.Commentary' => 'Commentary',
    'AddInterventionForm.Submit' => 'Add the intervention',
    'planeDetail' => 'Detail of the plane  ',
    'planeCompanie' => 'Companie of the plane',
    'planeStatus' => 'Status of the avion',
    'addAIntervention' => 'Add an intervention of intervention of this plane',
    'historyOfIntervention' => 'History of intervention on this plane',
    'intervention.Date.Creation' => 'Creation date of the intervention',
    'intervention.Date.Start' => 'Start of the intervention',
    'intervention.Date.End' => 'End of the intervention',
    'intervention.Type' => 'Type of the intervention',
    'intervention.Comment ary' => 'Commentary',
    'intervention.interventionNotFound' => 'No intervention was found for this plane.',
  ),
  'validators+intl-icu' => 
  array (
    'Error' => '__Error',
  ),
));

$catalogue_eng = new MessageCatalogue('-eng', array (
));
$catalogue->addFallbackCatalogue($catalogue_eng);

return $catalogue;
