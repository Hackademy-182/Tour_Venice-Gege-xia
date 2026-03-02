<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LuogoController extends Controller
{
    public $luoghi = [

    'san-marco' => [
        'nome' => 'Piazza San Marco',
        'descrizione' => "Piazza San Marco, situata nel cuore di Venezia, è uno dei luoghi più iconici d'Italia. È famosa per la sua maestosa basilica, i campanili e gli eleganti palazzi storici che la circondano. Spesso chiamata “il salotto d’Europa”, ospita caffè storici e eventi culturali. La piazza è costantemente animata da turisti e veneziani, con piccioni che la rendono pittoresca e vivace. È un simbolo della ricca storia artistica e architettonica di Venezia, meta imprescindibile per chi visita la città.",
        'img' => 'https://martinaway.com/wp-content/uploads/2020/09/Piazza-San-Marco-Venezia.jpg',
        'tipologia' => 'Piazza storica',
        'superficie' => 'Circa 12.000 m²',
        'luoghi_chiave' => 'Basilica di San Marco, Campanile, Palazzo Ducale',
        'posizione' => 'https://it.maps-venice.com/img/0/piazza-san-marco-a-venezia-la-mappa.jpg'
    ],

    'murano' => [
        'nome' => 'Murano',
        'descrizione' => "Murano è celebre in tutto il mondo per la sua tradizione vetraria secolare. Passeggiando tra i canali dell’isola, si possono visitare le vetrerie, ammirare le lampade e i vetri artistici e scoprire la storia di questa famosa arte artigianale.",
        'img' => 'https://www.veneto.info/wp-content/uploads/sites/114/murano-hd.jpg',
        'tipologia' => 'Isola della laguna',
        'superficie' => 'Circa 1,17 km²',
        'luoghi_chiave' => 'Museo del Vetro, Basilica dei Santi Maria e Donato',
        'posizione' => 'https://www.vivovenetia.it/wp-content/uploads/2018/11/murano-1.png'
    ],

    'burano' => [
        'nome' => 'Burano',
        'descrizione' => "Burano è famosa per le sue case coloratissime e per la tradizione del merletto. L’isola è pittoresca e fotogenica, con canali tranquilli e piccoli ristoranti che servono specialità di pesce.",
        'img' => 'https://www.civitatis.com/f/italia/venecia/guia/burano-m.jpg',
        'tipologia' => 'Isola della laguna',
        'superficie' => 'Circa 0,21 km²',
        'luoghi_chiave' => 'Case colorate, Museo del Merletto',
        'posizione' => 'https://www.vivovenetia.it/wp-content/uploads/2019/01/burano.png'
    ],

    'torcello' => [
        'nome' => 'Torcello',
        'descrizione' => "Torcello è una delle isole più tranquille della laguna di Venezia, famosa per la sua basilica antica con mosaici bizantini. È un luogo perfetto per chi cerca pace e storia lontano dalla folla.",
        'img' => 'https://www.italieonline.eu/user/blogimg/leto/veneto/torcello-uvod.jpg',
        'tipologia' => 'Isola storica',
        'superficie' => 'Circa 0,44 km²',
        'luoghi_chiave' => 'Basilica di Santa Maria Assunta, Ponte del Diavolo',
        'posizione' => 'https://www.vivovenetia.it/wp-content/uploads/2020/03/torcello.jpg'
    ],

    'lido' => [
        'nome' => 'Lido di Venezia',
        'descrizione' => "Il Lido è l’isola famosa per le spiagge sabbiose e per ospitare il Festival del Cinema di Venezia. Qui si mescolano relax, eleganza e arte cinematografica.",
        'img' => 'https://veneziaspiagge.it/wp-content/uploads/2025/03/bluemoon.jpg',
        'tipologia' => 'Isola-balneare / Spiaggia',
        'superficie' => 'Circa 11 km²',
        'luoghi_chiave' => 'Spiagge, Palazzo del Cinema, Gran Viale',
        'posizione' => 'https://www.marinadivenezia.it/frontend/images/placeholders/google-map-img.jpg?id=0f4bbda80327dfb631cb'
    ],

    'giudecca' => [
        'nome' => 'Giudecca',
        'descrizione' => "Giudecca è un’isola residenziale famosa per la sua vista panoramica su Venezia e per le antiche chiese. Perfetta per passeggiate tranquille e per godersi il panorama della città.",
        'img' => 'https://www.italia.it/content/dam/tdh/it/destinations/veneto/venezia/isola-della-giudecca/media/20220504125326-isola-della-giudecca-veneto-shutterstock-1263486223.jpg',
        'tipologia' => 'Isola residenziale',
        'superficie' => 'Circa 0,59 km²',
        'luoghi_chiave' => 'Chiesa del Redentore, Molino Stucky',
        'posizione' => 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhNWlpgvYl6GkvnZh2qZd5qHCQoJfiOIeVbj1J1pRo3wcB8ivvvn7e1wSJN3sMenWimNFS8CpHxeRdvdSgE5uzgAAG2dVktPnTdrCt5PCX5m-kP674UMchv1ComOtq-xgJOOn6vOU4MmP7g/s1433/Giudecca-%25C2%25A9google+map-%25C2%25A9Monica+Galeotti+mapping.jpg'
    ],

    'sant-erasmo' => [
        'nome' => 'Sant’Erasmo',
        'descrizione' => "Sant’Erasmo è conosciuta come l’orto di Venezia. È un’isola agricola posizione si coltivano ortaggi e vini, ideale per chi ama la natura e le escursioni tranquille lontano dalla città.",
        'img' => 'https://www.nauticareport.it/resizer/picscache/720x420c50/97c0e018eece9bc2f495191100a2d767.jpg',
        'tipologia' => 'Isola agricola',
        'superficie' => 'Circa 3,26 km²',
        'luoghi_chiave' => 'Campi agricoli, Torre Massimiliana',
        'posizione' => 'https://www.vivovenetia.it/wp-content/uploads/2021/04/santerasmo.png'
    ],

    'certosa' => [
        'nome' => 'Certosa',
        'descrizione' => "Certosa è un’isola poco conosciuta della laguna, famosa per il monastero e gli spazi verdi. Perfetta per passeggiate e gite in bicicletta, lontano dal turismo di massa.",
        'img' => 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/16/9e/99/90/il-polmone-verde-per.jpg?w=1200&h=-1&s=1',
        'tipologia' => 'Isola naturale / Parco',
        'superficie' => 'Circa 0,24 km²',
        'luoghi_chiave' => 'Parco della Certosa, Porto turistico',
        'posizione' => 'https://www.worldtravelin360.com/wp-content/uploads/2023/07/After.jpg'
    ],
];

    public function index()
    {
        return view('home', ['luoghi' => $this->luoghi]);
    }

    public function show($luogo)
    {
        if (isset($this->luoghi[$luogo])) {
            $luogo = $this->luoghi[$luogo];
            return view('luogo', compact('luogo'));
        }

        abort(404);
    }
}
