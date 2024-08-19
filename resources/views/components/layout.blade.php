<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sito hack</title>
       
    @vite(['resources/css/app.css']);
  </head>

  <body>

  
<x-navbar></x-navbar>
{{--! inserisci il contenuto di una pagina in maniera dinamica 
  slot vuol dire posizione/inserimento 
  è un segnaposto --}}
  {{ $slot }}

  @vite(['resources/js/app.js']);
    </body>
</html>