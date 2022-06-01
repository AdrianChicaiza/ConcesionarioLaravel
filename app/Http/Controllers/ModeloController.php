<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModeloController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $autos =[

            [
                'Imagen' => 'https://www.nissan-cdn.net/content/dam/Nissan/ec/vehicles/Versa_MY20/launch/menu/versa-my20-thumb-menu.png.ximg.l_3_m.smart.png',
                'Marca' => 'Mazda 6',
                'Estado' => 'Usado',
                'Web' => 'https://www.mazda.com.ec/'
            ],
            [
                'Imagen' => 'https://www.nissan-cdn.net/content/dam/Nissan/ec/vehicles/leaf/overview/nissan-leaf-menu.png.ximg.l_3_m.smart.png',
                'Marca' => 'Ford',
                'Estado' => 'Nuevo',
                'Web' => 'https://www.ford.com/es-co/'

            ],
            [
                'Imagen' => 'https://www.nissan-cdn.net/content/dam/Nissan/ec/vehicles/frontier21/vehicles/frontier/MY21/VAP/Frontier-PRO-4X-menu.png.ximg.l_3_m.smart.png',
                'Marca' => 'Suzuki',
                'Estado' => 'Nuevo',
                'Web' => 'https://www.ford.com/es-co/'

            ],
            [
                'Imagen' => 'https://www.nissan-cdn.net/content/dam/Nissan/nissan_latin_america/vehicles/X%20Trail%20T32/Minor_Change/range/RangePage_1536x864_Xtrail.png.ximg.l_3_m.smart.png',
                'Marca' => 'Suzuki',
                'Estado' => 'Nuevo',
                'Web' => 'https://www.ford.com/es-co/'

            ],
            [
                'Imagen' => 'https://www.nissan-cdn.net/content/dam/Nissan/ec/vehicles/kicks1/my21/vap/nissan-2021-kicks_platinum_cvt_cafe_bi_ton-bitono_azul-negro-exterior-miniatura_lateral-i.jpg.ximg.l_3_m.smart.jpg',
                'Marca' => 'Suzuki',
                'Estado' => 'Nuevo',
                'Web' => 'https://www.ford.com/es-co/'

            ],
            [
                'Imagen' => 'https://www.nissan-cdn.net/content/dam/Nissan/ec/vehicles/kicks1/my21/vap/nissan-2021-kicks_platinum_cvt_cafe_bi_ton-bitono_azul-negro-exterior-miniatura_lateral-i.jpg.ximg.l_3_m.smart.jpg',
                'Marca' => 'Suzuki',
                'Estado' => 'Nuevo',
                'Web' => 'https://www.ford.com/es-co/'

            ]



        ];







    return view('modelos',compact('autos'));
    }
}