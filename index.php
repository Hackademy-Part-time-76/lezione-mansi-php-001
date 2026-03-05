 <?php
    echo 'Ciao';

    //DATI
    // Dati Primitivi
    // Stringhe
    //Interi
    //Boleani
    // Deicmali
    //NULL
     $frase = 'Francesco sono io'; //stringa
    $eta_persona = 89; //intero
   $prezzo = 78.99; //decimale
     $boolean = true;

   echo $frase . ' ' . $eta_persona . ' ' . $prezzo . ' ' . $boolean;

     $name = 'Matteo';
    $eta = 18;

     $frase1 = '$name ha esattamente $eta anni';
     $frase2 = "$name ha esattamente $eta anni";
     echo $frase1;


    //Dati Complessi
     $stato = false;
     $array = []; //array vuoto
     $array = ['ciao', 746, true]; //array vuoto
    $array[] = 'aulab';
     $array[1] = 'buon giorno';
     print_r($sttao);
     $stato = '';
   var_dump($array);

    //Truthy
    //variabili diversi da 0, diversi da vuoto, true

    //Falsy

    //variabili uguali a 0, uguali a stringa vuota e false

    const NOME = [];

    echo NOME;


    $users = [
        ['nome' => 'Francesco'],
        ['ciccio' => 'Antonio'],
    ];

    var_dump($users[1]['ciccio']);
