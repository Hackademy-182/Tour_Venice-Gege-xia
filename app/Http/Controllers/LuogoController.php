<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LuogoController extends Controller
{
    public $luoghi = [
        'san-marco' => [
            'nome' => 'Piazza San Marco',
            'descrizione' => "Piazza San Marco, situata nel cuore di Venezia, è uno dei luoghi più iconici d'Italia. È famosa per la sua maestosa basilica, i campanili e gli eleganti palazzi storici che la circondano. Spesso chiamata “il salotto d’Europa”, ospita caffè storici e eventi culturali. La piazza è costantemente animata da turisti e veneziani, con piccioni che la rendono pittoresca e vivace. È un simbolo della ricca storia artistica e architettonica di Venezia, meta imprescindibile per chi visita la città.",
            'img' => 'https://martinaway.com/wp-content/uploads/2020/09/Piazza-San-Marco-Venezia.jpg'
        ],

        'murano' => [
            'nome' => 'Murano',
            'descrizione' => "Murano è celebre in tutto il mondo per la sua tradizione vetraria secolare. Passeggiando tra i canali dell’isola, si possono visitare le vetrerie, ammirare le lampade e i vetri artistici e scoprire la storia di questa famosa arte artigianale.",
            'img' => 'https://www.veneto.info/wp-content/uploads/sites/114/murano-hd.jpg'
        ],

        'burano' => [
            'nome' => 'Burano',
            'descrizione' => "Burano è famosa per le sue case coloratissime e per la tradizione del merletto. L’isola è pittoresca e fotogenica, con canali tranquilli e piccoli ristoranti che servono specialità di pesce.",
            'img' => 'https://www.civitatis.com/f/italia/venecia/guia/burano-m.jpg'
        ],

        'torcello' => [
            'nome' => 'Torcello',
            'descrizione' => "Torcello è una delle isole più tranquille della laguna di Venezia, famosa per la sua basilica antica con mosaici bizantini. È un luogo perfetto per chi cerca pace e storia lontano dalla folla.",
            'img' => 'https://www.italieonline.eu/user/blogimg/leto/veneto/torcello-uvod.jpg'
        ],

        'lido' => [
            'nome' => 'Lido di Venezia',
            'descrizione' => "Il Lido è l’isola famosa per le spiagge sabbiose e per ospitare il Festival del Cinema di Venezia. Qui si mescolano relax, eleganza e arte cinematografica.",
            'img' => 'https://veneziaspiagge.it/wp-content/uploads/2025/03/bluemoon.jpg'
        ],

        'giudecca' => [
            'nome' => 'Giudecca',
            'descrizione' => "Giudecca è un’isola residenziale famosa per la sua vista panoramica su Venezia e per le antiche chiese. Perfetta per passeggiate tranquille e per godersi il panorama della città.",
            'img' => 'https://www.italia.it/content/dam/tdh/it/destinations/veneto/venezia/isola-della-giudecca/media/20220504125326-isola-della-giudecca-veneto-shutterstock-1263486223.jpg'
        ],

        'sant-erasmo' => [
            'nome' => 'Sant’Erasmo',
            'descrizione' => "Sant’Erasmo è conosciuta come l’orto di Venezia. È un’isola agricola dove si coltivano ortaggi e vini, ideale per chi ama la natura e le escursioni tranquille lontano dalla città.",
            'img' => 'https://www.nauticareport.it/resizer/picscache/720x420c50/97c0e018eece9bc2f495191100a2d767.jpg'
        ],

        'certosa' => [
            'nome' => 'Certosa',
            'descrizione' => "Certosa è un’isola poco conosciuta della laguna, famosa per il monastero e gli spazi verdi. Perfetta per passeggiate e gite in bicicletta, lontano dal turismo di massa.",
            'img' => 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/16/9e/99/90/il-polmone-verde-per.jpg?w=1200&h=-1&s=1'
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
