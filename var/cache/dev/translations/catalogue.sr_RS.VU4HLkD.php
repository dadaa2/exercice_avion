<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('sr_RS', array (
  'AutocompleteBundle' => 
  array (
    'Loading more results...' => 'Учитавање још резултата...',
    'No results found' => 'Nema rezultata',
    'No more results' => 'Nema više rezultata',
  ),
));

$catalogueSr = new MessageCatalogue('sr', array (
));
$catalogue->addFallbackCatalogue($catalogueSr);
$catalogue_eng = new MessageCatalogue('-eng', array (
));
$catalogueSr->addFallbackCatalogue($catalogue_eng);

return $catalogue;
