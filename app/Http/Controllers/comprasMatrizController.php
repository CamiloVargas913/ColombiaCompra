<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \SplFixedArray;

class comprasMatrizController extends Controller
{
    public function compras(Request $request){
    	$code1=$request->input('producto1');
    	$code2=$request->input('producto2');
    	$code3=$request->input('producto3');
    	$code4=$request->input('producto4');
    	$code5=$request->input('producto5');
    	$code6=$request->input('producto6');
    	$code7=$request->input('producto7');
    	$code8=$request->input('producto8');
    	$code9=$request->input('producto9');
    	$code10=$request->input('producto10');
    	$valor=$request->input('valorcontrato');
    	$nombrecomprador=$request->input('nombrecomprador');
    	$apellido=$request->input('Apellido');
    	$cedula=$request->input('cedula');
    	$contrato=$request->input('contrato');
    	$descripcion=$request->input('descripcion');
    	$valorcontrato=$request->input('valorcontrato');

    	$comprador=new SplFixedArray();
    	$comprador=[];
    	$comprador=[
            "Nombre"=>$nombrecomprador, 
            "Apellido"=>$apellido, 
            "Cedula"=>$cedula, 
            "IDContrato"=>$contrato, 
            "Descripcion"=>$descripcion, 
            "ValorContrato"=>$valorcontrato
        ];
    	$usuario2=new SplFixedArray();
    	$usuario2=[];
        $codigos=new SplFixedArray();
        $codigos=[];
        $datos=new SplFixedArray();
        $datos=[];
        $datos2=new SplFixedArray();
        $datos2=[];
        $cont=0;
    	$codigos[]=["Codigo"=>30101500, "Nombre"=>"Ángulos","valor"=>15000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30101501, "Nombre"=>"Ángulos de aleación ferrosa","valor"=>15000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30101502, "Nombre"=>"Ángulos de aleación no ferrosa","valor"=>15000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30101503, "Nombre"=>"Ángulos de hierro","valor"=>15000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30101504, "Nombre"=>"Ángulos de acero","valor"=>15000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30101505, "Nombre"=>"Ángulos de acero inoxidable","valor"=>15000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30101506, "Nombre"=>"Ángulos de aluminio","valor"=>15000, "clase"=>"B", "tipo"=>3];
        $codigos[]=["Codigo"=>30101507, "Nombre"=>"Ángulos de magnesio","valor"=>15000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30101508, "Nombre"=>"Ángulos de titanio","valor"=>15000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30101509, "Nombre"=>"Ángulos de cobre","valor"=>15000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30101510, "Nombre"=>"Ángulos de latón","valor"=>15000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30101511, "Nombre"=>"Ángulos de bronce","valor"=>15000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30101512, "Nombre"=>"Ángulos de zinc","valor"=>15000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30101513, "Nombre"=>"Ángulos de estaño","valor"=>15000, "clase"=>"B", "tipo"=>3];
        $codigos[]=["Codigo"=>30101514, "Nombre"=>"Ángulos de plomo","valor"=>15000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30101515, "Nombre"=>"Ángulos de plástico","valor"=>15000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30101516, "Nombre"=>"Ángulos de caucho","valor"=>15000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30101517, "Nombre"=>"Ángulos de metales preciosos","valor"=>15000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30101700, "Nombre"=>"Vigas","valor"=>15000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30101701, "Nombre"=>"Vigas de aleación ferrosa","valor"=>15000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30101702, "Nombre"=>"Vigas de aleación no ferrosa","valor"=>15000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30101703, "Nombre"=>"Vigas de hierro","valor"=>15000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30101704, "Nombre"=>"Vigas de acero","valor"=>15000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30101705, "Nombre"=>"Vigas de acero inoxidable","valor"=>15000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30101706, "Nombre"=>"Vigas de aluminio","valor"=>15000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30101707, "Nombre"=>"Vigas de magnesio","valor"=>15000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30101708, "Nombre"=>"Vigas de titanio","valor"=>15000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30101709, "Nombre"=>"Vigas de cobre","valor"=>15000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30101710, "Nombre"=>"Vigas de latón","valor"=>15000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30101711, "Nombre"=>"Vigas de bronce","valor"=>15000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30101712, "Nombre"=>"Vigas de zinc","valor"=>15000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30101713, "Nombre"=>"Vigas de estaño","valor"=>15000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30101714, "Nombre"=>"Vigas de plomo","valor"=>15000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30101715, "Nombre"=>"Vigas de plástico","valor"=>15000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30101716, "Nombre"=>"Vigas de caucho","valor"=>15000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30101717, "Nombre"=>"Vigas de concreto","valor"=>15000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30101718, "Nombre"=>"Vigas de metales preciosos","valor"=>15000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30101719, "Nombre"=>"Vigas de haydita","valor"=>15000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30101720, "Nombre"=>"Vigas de triplex","valor"=>7000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30101800, "Nombre"=>"Conductos","valor"=>15000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30101801, "Nombre"=>"Conductos de aleación ferrosa","valor"=>15000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30101802, "Nombre"=>"Conductos de aleación no ferrosa","valor"=>15000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30101803, "Nombre"=>"Conductos de hierro","valor"=>15000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30101804, "Nombre"=>"Conductos de acero","valor"=>15000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30101805, "Nombre"=>"Conductos de acero inoxidable","valor"=>15000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30101806, "Nombre"=>"Conductos de aluminio","valor"=>15000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30101807, "Nombre"=>"Conductos de magnesio","valor"=>15000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30101808, "Nombre"=>"Conductos de titanio","valor"=>15000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30101809, "Nombre"=>"Conductos de cobre","valor"=>15000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30101810, "Nombre"=>"Conductos de latón","valor"=>15000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30101811, "Nombre"=>"Conductos de bronce","valor"=>15000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30101812, "Nombre"=>"Conductos de zinc","valor"=>15000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30101813, "Nombre"=>"Conductos de estaño","valor"=>15000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30101814, "Nombre"=>"Conductos de plomo","valor"=>15000, "clase"=>"B", "tipo"=>3];
        $codigos[]=["Codigo"=>30101815, "Nombre"=>"Conductos de plástico","valor"=>15000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30101816, "Nombre"=>"Conductos de caucho","valor"=>15000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30101817, "Nombre"=>"Conductos de metales preciosos","valor"=>15000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30101818, "Nombre"=>"Conductos de fibra de vidrio","valor"=>15000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30102000, "Nombre"=>"Hoja","valor"=>15000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30102001, "Nombre"=>"Lámina de aleación ferrosa","valor"=>15000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30102002, "Nombre"=>"Lámina de aleación no ferrosa","valor"=>15000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30102003, "Nombre"=>"Lámina de hierro","valor"=>15000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30102004, "Nombre"=>"Lámina de acero","valor"=>15000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30102005, "Nombre"=>"Lámina de acero inoxidable","valor"=>15000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30102006, "Nombre"=>"Lámina de aluminio","valor"=>15000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30102007, "Nombre"=>"Lámina de magnesio","valor"=>25000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30102008, "Nombre"=>"Lámina de titanio","valor"=>25000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30102009, "Nombre"=>"Lámina de cobre","valor"=>25000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30102010, "Nombre"=>"Lámina de latón","valor"=>25000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30102011, "Nombre"=>"Lámina de bronce","valor"=>25000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30102012, "Nombre"=>"Lámina de zinc","valor"=>25000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30102013, "Nombre"=>"Lámina de estaño","valor"=>25000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30102014, "Nombre"=>"Lámina de plomo","valor"=>25000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30102015, "Nombre"=>"Lámina de plástico","valor"=>25000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30102016, "Nombre"=>"Lámina de tántalo","valor"=>25000, "clase"=>"B", "tipo"=>3];
        $codigos[]=["Codigo"=>30102200, "Nombre"=>"Plancha","valor"=>25000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30102201, "Nombre"=>"Placa de aleación ferrosa","valor"=>25000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30102202, "Nombre"=>"Placa de aleación no ferrosa","valor"=>25000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30102203, "Nombre"=>"Placa de hierro","valor"=>25000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30102204, "Nombre"=>"Placa de acero","valor"=>25000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30102205, "Nombre"=>"Placa de acero inoxidable","valor"=>25000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30102206, "Nombre"=>"Placa de aluminio","valor"=>25000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30102207, "Nombre"=>"Placa de magnesio","valor"=>25000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30102208, "Nombre"=>"Placa de titanio","valor"=>25000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30102209, "Nombre"=>"Placa de cobre","valor"=>25000, "clase"=>"B", "tipo"=>3];
        $codigos[]=["Codigo"=>30102210, "Nombre"=>"Placa de latón","valor"=>25000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30102211, "Nombre"=>"Placa de bronce","valor"=>25000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30102212, "Nombre"=>"Placa de zinc","valor"=>25000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30102213, "Nombre"=>"Placa de estaño","valor"=>25000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30102214, "Nombre"=>"Placa de plomo","valor"=>25000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30102215, "Nombre"=>"Placa de plástico","valor"=>25000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30102216, "Nombre"=>"Placa de caucho","valor"=>25000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30102217, "Nombre"=>"Placa de concreto","valor"=>25000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30102218, "Nombre"=>"Placa de metales preciosos","valor"=>25000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30102220, "Nombre"=>"Placa de níquel","valor"=>25000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30102221, "Nombre"=>"Placa de fibra","valor"=>25000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30102222, "Nombre"=>"Placa de viruta","valor"=>25000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30102223, "Nombre"=>"Placa de enchape de madera","valor"=>25000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30102224, "Nombre"=>"Placa de tablero de papel o madera (coreboard)","valor"=>25000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30102225, "Nombre"=>"Placa de corcho","valor"=>25000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30102226, "Nombre"=>"Placa de butilo","valor"=>25000, "clase"=>"A", "tipo"=>3];
        $codigos[]=["Codigo"=>30102227, "Nombre"=>"Placa de tántalo","valor"=>25000, "clase"=>"B", "tipo"=>3];
        $codigos[]=["Codigo"=>30102300, "Nombre"=>"Perfiles","valor"=>25000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30102301, "Nombre"=>"Perfiles de aleación ferrosa","valor"=>25000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30102302, "Nombre"=>"Perfiles de aleación no ferrosa","valor"=>25000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30102303, "Nombre"=>"Perfiles de hierro","valor"=>25000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30102304, "Nombre"=>"Perfiles de acero","valor"=>25000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30102305, "Nombre"=>"Perfiles de acero inoxidable","valor"=>25000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30102306, "Nombre"=>"Perfiles de aluminio","valor"=>25000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30102307, "Nombre"=>"Perfiles de magnesio","valor"=>25000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30102308, "Nombre"=>"Perfiles de titanio","valor"=>25000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30102309, "Nombre"=>"Perfiles de cobre","valor"=>25000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30102310, "Nombre"=>"Perfiles de latón","valor"=>25000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30102311, "Nombre"=>"Perfiles de bronce","valor"=>25000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30102312, "Nombre"=>"Perfiles de zinc","valor"=>25000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30102313, "Nombre"=>"Perfiles de estaño","valor"=>25000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30102314, "Nombre"=>"Perfiles de plomo","valor"=>25000, "clase"=>"B", "tipo"=>1];
        $codigos[]=["Codigo"=>30102315, "Nombre"=>"Perfiles de plástico","valor"=>25000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30102316, "Nombre"=>"Perfiles de caucho","valor"=>25000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30102400, "Nombre"=>"Varillas","valor"=>25000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30102401, "Nombre"=>"Varillas de aleación ferrosa","valor"=>25000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30102402, "Nombre"=>"Varillas de aleación no ferrosa","valor"=>25000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30102403, "Nombre"=>"Varillas de hierro","valor"=>25000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30102404, "Nombre"=>"Varillas de acero","valor"=>25000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30102405, "Nombre"=>"Varillas de acero inoxidable","valor"=>25000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30102406, "Nombre"=>"Varillas de aluminio","valor"=>25000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30102407, "Nombre"=>"Varillas de magnesio","valor"=>25000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30102408, "Nombre"=>"Varillas de titanio","valor"=>25000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30102409, "Nombre"=>"Varillas de cobre","valor"=>25000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30102410, "Nombre"=>"Varillas de latón","valor"=>25000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30102411, "Nombre"=>"Varillas de bronce","valor"=>25000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30102412, "Nombre"=>"Varillas de zinc","valor"=>25000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30102413, "Nombre"=>"Varillas de estaño","valor"=>25000, "clase"=>"B", "tipo"=>1];
        $codigos[]=["Codigo"=>30102414, "Nombre"=>"Varillas de plomo","valor"=>25000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30102415, "Nombre"=>"Varillas de plástico","valor"=>25000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30102416, "Nombre"=>"Varillas de caucho","valor"=>25000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30102417, "Nombre"=>"Varillas de níquel","valor"=>25000, "clase"=>"B", "tipo"=>1];
        $codigos[]=["Codigo"=>30102800, "Nombre"=>"Pilotaje","valor"=>25000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30102801, "Nombre"=>"Pilares de aluminio","valor"=>25000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30102802, "Nombre"=>"Pilares de concreto","valor"=>25000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30102803, "Nombre"=>"Pilares de acero","valor"=>25000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30102804, "Nombre"=>"Pilares de madera","valor"=>25000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30102900, "Nombre"=>"Pilares","valor"=>25000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30102901, "Nombre"=>"Postes de cemento o concreto","valor"=>25000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30102903, "Nombre"=>"Postes de metal","valor"=>25000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30102904, "Nombre"=>"Postes de madera","valor"=>25000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30102905, "Nombre"=>"Postes de plástico","valor"=>9000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30102906, "Nombre"=>"Postes de fibra de vidrio","valor"=>25000, "clase"=>"B", "tipo"=>1];
        $codigos[]=["Codigo"=>30102907, "Nombre"=>"Postes de madera tratada","valor"=>25000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30103100, "Nombre"=>"Rieles","valor"=>25000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30103101, "Nombre"=>"Rieles de acero","valor"=>25000, "clase"=>"B", "tipo"=>1];
        $codigos[]=["Codigo"=>30103102, "Nombre"=>"Rieles de aluminio","valor"=>25000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30103103, "Nombre"=>"Rieles de metal","valor"=>25000, "clase"=>"B", "tipo"=>1];
        $codigos[]=["Codigo"=>30103104, "Nombre"=>"Rieles de madera","valor"=>25000, "clase"=>"B", "tipo"=>1];
        $codigos[]=["Codigo"=>30103200, "Nombre"=>"Enrejado","valor"=>25000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30103201, "Nombre"=>"Rejilla de acero","valor"=>25000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30103202, "Nombre"=>"Rejilla de acero inoxidable","valor"=>25000, "clase"=>"B", "tipo"=>1];
        $codigos[]=["Codigo"=>30103203, "Nombre"=>"Rejilla de aluminio","valor"=>25000, "clase"=>"B", "tipo"=>1];
        $codigos[]=["Codigo"=>30103204, "Nombre"=>"Rejilla de fibra de vidrio","valor"=>25000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30103205, "Nombre"=>"Rejilla de hierro","valor"=>25000, "clase"=>"B", "tipo"=>1];
        $codigos[]=["Codigo"=>30103206, "Nombre"=>"Rejilla de plástico","valor"=>25000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30103207, "Nombre"=>"Rejilla laminada","valor"=>25000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30103208, "Nombre"=>"Rejilla de madera","valor"=>25000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30103500, "Nombre"=>"Alma de panal","valor"=>25000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30103501, "Nombre"=>"Núcleo de panal de aluminio","valor"=>25000, "clase"=>"B", "tipo"=>1];
        $codigos[]=["Codigo"=>30103502, "Nombre"=>"Núcleo de panal de magnesio","valor"=>25000, "clase"=>"B", "tipo"=>1];
        $codigos[]=["Codigo"=>30103503, "Nombre"=>"Núcleo de panal de espuma","valor"=>25000, "clase"=>"B", "tipo"=>1];
        $codigos[]=["Codigo"=>30103504, "Nombre"=>"Núcleo de panal de plástico","valor"=>25000, "clase"=>"B", "tipo"=>1];
        $codigos[]=["Codigo"=>30103505, "Nombre"=>"Núcleo de panal de madera","valor"=>25000, "clase"=>"B", "tipo"=>1];
        $codigos[]=["Codigo"=>30103506, "Nombre"=>"Núcleo de panal de metal ferroso","valor"=>25000, "clase"=>"B", "tipo"=>1];
        $codigos[]=["Codigo"=>30103507, "Nombre"=>"Núcleo de panal de bronce","valor"=>25000, "clase"=>"B", "tipo"=>1];
        $codigos[]=["Codigo"=>30103508, "Nombre"=>"Núcleo de panal de cobre","valor"=>25000, "clase"=>"B", "tipo"=>1];
        $codigos[]=["Codigo"=>30103509, "Nombre"=>"Núcleo de panal de acero","valor"=>25000, "clase"=>"B", "tipo"=>1];
        $codigos[]=["Codigo"=>30103510, "Nombre"=>"Núcleo de panal de plomo","valor"=>25000, "clase"=>"B", "tipo"=>1];
        $codigos[]=["Codigo"=>30103511, "Nombre"=>"Núcleo de panal de zinc","valor"=>25000, "clase"=>"B", "tipo"=>1];
        $codigos[]=["Codigo"=>30103512, "Nombre"=>"Núcleo de panal de titanio","valor"=>25000, "clase"=>"B", "tipo"=>1];
        $codigos[]=["Codigo"=>30103513, "Nombre"=>"Núcleo de panal de latón","valor"=>25000, "clase"=>"B", "tipo"=>1];
        $codigos[]=["Codigo"=>30103514, "Nombre"=>"Núcleo de panal de metal no ferroso","valor"=>25000, "clase"=>"B", "tipo"=>1];
        $codigos[]=["Codigo"=>30103515, "Nombre"=>"Núcleo de panal de metales preciosos","valor"=>25000, "clase"=>"B", "tipo"=>1];
        $codigos[]=["Codigo"=>30103600, "Nombre"=>"Productos estructurales","valor"=>25000, "clase"=>"B", "tipo"=>1];
        $codigos[]=["Codigo"=>30103601, "Nombre"=>"Vigas de madera","valor"=>25000, "clase"=>"B", "tipo"=>1];
        $codigos[]=["Codigo"=>30103602, "Nombre"=>"Vigas compuestas de madera","valor"=>25000, "clase"=>"B", "tipo"=>1];
        $codigos[]=["Codigo"=>30103603, "Nombre"=>"Madera para marcos","valor"=>25000, "clase"=>"B", "tipo"=>1];
        $codigos[]=["Codigo"=>30103604, "Nombre"=>"Revestimiento o láminas de madera","valor"=>25000, "clase"=>"B", "tipo"=>1];
        $codigos[]=["Codigo"=>30103605, "Nombre"=>"Tablones de madera","valor"=>25000, "clase"=>"B", "tipo"=>1];
        $codigos[]=["Codigo"=>30103606, "Nombre"=>"Armazones de madera","valor"=>25000, "clase"=>"B", "tipo"=>1];
        $codigos[]=["Codigo"=>30103607, "Nombre"=>"Viguetas de madera","valor"=>25000, "clase"=>"B", "tipo"=>1];
        $codigos[]=["Codigo"=>30103608, "Nombre"=>"Postes de madera o postes telefónicos","valor"=>25000, "clase"=>"B", "tipo"=>1];
        $codigos[]=["Codigo"=>30103609, "Nombre"=>"Tabla de tabique de ventilación","valor"=>35000, "clase"=>"B", "tipo"=>1];
        $codigos[]=["Codigo"=>30103610, "Nombre"=>"Bloque de soporte en minas","valor"=>35000, "clase"=>"B", "tipo"=>1];
        $codigos[]=["Codigo"=>30103611, "Nombre"=>"Esteras de troncos","valor"=>35000, "clase"=>"B", "tipo"=>1];
        $codigos[]=["Codigo"=>30103612, "Nombre"=>"Vínculos de ferrocarril","valor"=>35000, "clase"=>"B", "tipo"=>1];
        $codigos[]=["Codigo"=>30103613, "Nombre"=>"Elemento prefabricado de hyadita","valor"=>35000, "clase"=>"B", "tipo"=>1];
        $codigos[]=["Codigo"=>30103614, "Nombre"=>"Vigueta de placa de acero","valor"=>35000, "clase"=>"B", "tipo"=>1];
        $codigos[]=["Codigo"=>30103615, "Nombre"=>"Viga de placa","valor"=>35000, "clase"=>"B", "tipo"=>1];
        $codigos[]=["Codigo"=>30103616, "Nombre"=>"Marco compuesto","valor"=>35000, "clase"=>"B", "tipo"=>1];
        $codigos[]=["Codigo"=>30103617, "Nombre"=>"Marco de madera","valor"=>35000, "clase"=>"B", "tipo"=>1];
        $codigos[]=["Codigo"=>30103618, "Nombre"=>"Marco de acero","valor"=>35000, "clase"=>"B", "tipo"=>1];
        $codigos[]=["Codigo"=>30103619, "Nombre"=>"Elemento de concreto prefabricado","valor"=>35000, "clase"=>"B", "tipo"=>1];
        $codigos[]=["Codigo"=>30103620, "Nombre"=>"Bloque de soporte en minas tratado","valor"=>35000, "clase"=>"B", "tipo"=>1];
        $codigos[]=["Codigo"=>30103621, "Nombre"=>"Vínculo de ferrocarril no tratado","valor"=>35000, "clase"=>"B", "tipo"=>1];
        $codigos[]=["Codigo"=>30103622, "Nombre"=>"Troncos cuadrados","valor"=>35000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30103623, "Nombre"=>"Barra o malla de refuerzo","valor"=>35000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30103700, "Nombre"=>"Trenza","valor"=>35000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30103701, "Nombre"=>"Trenza de acero inoxidable","valor"=>35000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30103800, "Nombre"=>"Fibras y filamentos mecánicos","valor"=>35000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30103801, "Nombre"=>"Fibra de acero","valor"=>35000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30103802, "Nombre"=>"Fibra de estaño","valor"=>35000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30103803, "Nombre"=>"Fibra de aluminio","valor"=>35000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30103804, "Nombre"=>"Fibra de aleación","valor"=>35000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30103900, "Nombre"=>"Ejes","valor"=>35000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30103901, "Nombre"=>"Socavón con cabeza","valor"=>35000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30111500, "Nombre"=>"Concreto y morteros","valor"=>35000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30111501, "Nombre"=>"Concreto aireado","valor"=>35000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30111502, "Nombre"=>"Concreto conductor","valor"=>35000, "clase"=>"B", "tipo"=>1];
        $codigos[]=["Codigo"=>30111503, "Nombre"=>"Concreto aislante","valor"=>35000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30111504, "Nombre"=>"Morteros","valor"=>35000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30111505, "Nombre"=>"Concreto premezclado","valor"=>35000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30111506, "Nombre"=>"Lechada","valor"=>35000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30111507, "Nombre"=>"Concreto curado en suelo","valor"=>35000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30111508, "Nombre"=>"Concreto permeable al agua","valor"=>35000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30111509, "Nombre"=>"Concreto basado en asfalto","valor"=>35000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30111600, "Nombre"=>"Cemento y cal","valor"=>35000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30111601, "Nombre"=>"Cemento","valor"=>35000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30111602, "Nombre"=>"Cal clorada","valor"=>35000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30111603, "Nombre"=>"Cal hidráulica","valor"=>35000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30111604, "Nombre"=>"Cal apagada","valor"=>35000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30111605, "Nombre"=>"Cal magra","valor"=>35000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30111607, "Nombre"=>"Cal viva","valor"=>35000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30111700, "Nombre"=>"Yesos","valor"=>35000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30111701, "Nombre"=>"Enlucido de yeso","valor"=>35000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30111800, "Nombre"=>"Agregados","valor"=>35000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30111801, "Nombre"=>"Agregado natural","valor"=>35000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30111802, "Nombre"=>"Agregado artificial","valor"=>35000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30111900, "Nombre"=>"Elementos para reforzar concreto","valor"=>35000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30111901, "Nombre"=>"Fibra para reforzar concreto","valor"=>35000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30111902, "Nombre"=>"Junta de expansión de construcción","valor"=>35000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30111903, "Nombre"=>"Lámina de malla de alambre","valor"=>35000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30121500, "Nombre"=>"Derivados bituminosos","valor"=>35000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30121501, "Nombre"=>"Alquitrán de carbón hulla","valor"=>35000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30121503, "Nombre"=>"Creosota","valor"=>35000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30121504, "Nombre"=>"Bitumen","valor"=>35000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30121600, "Nombre"=>"Asfaltos","valor"=>35000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30121601, "Nombre"=>"Asfalto","valor"=>35000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30121602, "Nombre"=>"Brea","valor"=>35000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30121603, "Nombre"=>"Gilsonita","valor"=>35000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30121604, "Nombre"=>"Residuos de alquitrán o petróleo","valor"=>35000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30121605, "Nombre"=>"Marcos de pozo con tapas del registro","valor"=>35000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30121700, "Nombre"=>"Materiales de construcción de caminos y carrileras","valor"=>35000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30121701, "Nombre"=>"Geomalla","valor"=>35000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30121702, "Nombre"=>"Geotextil","valor"=>35000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30121703, "Nombre"=>"Riel de puente","valor"=>35000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30121704, "Nombre"=>"Losa de concreto","valor"=>35000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30121705, "Nombre"=>"Losa de pavimento","valor"=>35000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30121706, "Nombre"=>"Borde de concreto","valor"=>35000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30121707, "Nombre"=>"Tablero de protección contra el ruido","valor"=>35000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30121708, "Nombre"=>"Baldosa de ladrillo","valor"=>35000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30121709, "Nombre"=>"Roca triturada sin grado","valor"=>35000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30121710, "Nombre"=>"Piedra de pavimento","valor"=>35000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30121711, "Nombre"=>"Borde de piedra natural","valor"=>35000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30121712, "Nombre"=>"Cubierta de poste","valor"=>35000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30121713, "Nombre"=>"Tapa de manhole","valor"=>35000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30121714, "Nombre"=>"Caja de manhole","valor"=>35000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30121715, "Nombre"=>"Junta de expansión de puente","valor"=>35000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30121716, "Nombre"=>"Montura de asiento de puente","valor"=>35000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30121717, "Nombre"=>"Baranda","valor"=>35000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30121718, "Nombre"=>"Cerca de seguridad y red cara la caída de rocas","valor"=>35000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30121719, "Nombre"=>"Separador de seguridad de calle","valor"=>35000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30121800, "Nombre"=>"Materiales de arquitectura paisajística","valor"=>35000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30121801, "Nombre"=>"Rejilla para árbol","valor"=>35000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30121802, "Nombre"=>"Varilla de protección de árbol","valor"=>35000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30121803, "Nombre"=>"Prado artificial","valor"=>35000, "clase"=>"C", "tipo"=>2];
        $codigos[]=["Codigo"=>30121900, "Nombre"=>"Materiales para estabilización y refuerzo de suelos","valor"=>35000, "clase"=>"C", "tipo"=>2];
        $codigos[]=["Codigo"=>30121901, "Nombre"=>"Estabilizador de suelo","valor"=>35000, "clase"=>"C", "tipo"=>2];
        $codigos[]=["Codigo"=>30131500, "Nombre"=>"Bloques","valor"=>35000, "clase"=>"C", "tipo"=>2];
        $codigos[]=["Codigo"=>30131502, "Nombre"=>"Bloques de concreto","valor"=>35000, "clase"=>"C", "tipo"=>2];
        $codigos[]=["Codigo"=>30131503, "Nombre"=>"Bloques de piedra","valor"=>35000, "clase"=>"C", "tipo"=>2];
        $codigos[]=["Codigo"=>30131504, "Nombre"=>"Bloques de cerámica","valor"=>35000, "clase"=>"C", "tipo"=>2];
        $codigos[]=["Codigo"=>30131505, "Nombre"=>"Bloques de haydita","valor"=>35000, "clase"=>"C", "tipo"=>2];
        $codigos[]=["Codigo"=>30131506, "Nombre"=>"Losa de roca natural","valor"=>35000, "clase"=>"C", "tipo"=>2];
        $codigos[]=["Codigo"=>30131507, "Nombre"=>"Bloque de concreto liviano","valor"=>35000, "clase"=>"C", "tipo"=>2];
        $codigos[]=["Codigo"=>30131508, "Nombre"=>"Bloque de vidrio","valor"=>35000, "clase"=>"C", "tipo"=>2];
        $codigos[]=["Codigo"=>30131509, "Nombre"=>"Bloque a prueba de sonido","valor"=>35000, "clase"=>"C", "tipo"=>2];
        $codigos[]=["Codigo"=>30131510, "Nombre"=>"Bloque de concreto para revestimiento","valor"=>35000, "clase"=>"C", "tipo"=>2];
        $codigos[]=["Codigo"=>30131511, "Nombre"=>"Unidad de concreto de escollera","valor"=>35000, "clase"=>"C", "tipo"=>2];
        $codigos[]=["Codigo"=>30131512, "Nombre"=>"Bloque de concreto aireado de peso liviano esterilizado en autoclave","valor"=>35000, "clase"=>"C", "tipo"=>2];
        $codigos[]=["Codigo"=>30131513, "Nombre"=>"Bloque de caucho","valor"=>35000, "clase"=>"C", "tipo"=>2];
        $codigos[]=["Codigo"=>30131514, "Nombre"=>"Bloque de culvert construido de concreto reforzado","valor"=>35000, "clase"=>"C", "tipo"=>2];
        $codigos[]=["Codigo"=>30131515, "Nombre"=>"Bloque de madera","valor"=>35000, "clase"=>"C", "tipo"=>2];
        $codigos[]=["Codigo"=>30131516, "Nombre"=>"Bloque braille","valor"=>35000, "clase"=>"C", "tipo"=>2];
        $codigos[]=["Codigo"=>30131517, "Nombre"=>"Bloque de adobe","valor"=>35000, "clase"=>"C", "tipo"=>2];
        $codigos[]=["Codigo"=>30131600, "Nombre"=>"Ladrillos","valor"=>35000, "clase"=>"C", "tipo"=>2];
        $codigos[]=["Codigo"=>30131602, "Nombre"=>"Ladrillos de cerámica","valor"=>35000, "clase"=>"C", "tipo"=>2];
        $codigos[]=["Codigo"=>30131603, "Nombre"=>"Ladrillos de concreto","valor"=>35000, "clase"=>"C", "tipo"=>2];
        $codigos[]=["Codigo"=>30131604, "Nombre"=>"Ladrillos de piedra","valor"=>35000, "clase"=>"C", "tipo"=>2];
        $codigos[]=["Codigo"=>30131605, "Nombre"=>"Ladrillo sílico – calcáreo","valor"=>35000, "clase"=>"C", "tipo"=>2];
        $codigos[]=["Codigo"=>30131606, "Nombre"=>"Ladrillo de loess","valor"=>35000, "clase"=>"C", "tipo"=>2];
        $codigos[]=["Codigo"=>30131607, "Nombre"=>"Ladrillo de arcilla","valor"=>35000, "clase"=>"C", "tipo"=>2];
        $codigos[]=["Codigo"=>30131608, "Nombre"=>"Ladrillo vitrificado con sal","valor"=>35000, "clase"=>"C", "tipo"=>2];
        $codigos[]=["Codigo"=>30131609, "Nombre"=>"Ladrillo manufacturado","valor"=>35000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30131610, "Nombre"=>"Ladrillo antifuego","valor"=>35000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30131700, "Nombre"=>"Azulejos y baldosas","valor"=>35000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30131702, "Nombre"=>"Losas o baldosas de piedra","valor"=>35000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30131703, "Nombre"=>"Losas o baldosas de concreto","valor"=>35000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30131704, "Nombre"=>"Losas o baldosas de cerámica","valor"=>35000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30131705, "Nombre"=>"Lápidas","valor"=>35000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30131706, "Nombre"=>"Losas o baldosas de metal","valor"=>35000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30141500, "Nombre"=>"Aislamiento térmico","valor"=>35000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30141501, "Nombre"=>"Burletes","valor"=>35000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30141503, "Nombre"=>"Aislamiento de espuma","valor"=>35000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30141505, "Nombre"=>"Revestimiento de aislamiento térmico","valor"=>35000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30141508, "Nombre"=>"Aislamiento de fibra","valor"=>35000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30141510, "Nombre"=>"Barrido de puerta","valor"=>35000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30141511, "Nombre"=>"Película de ventana","valor"=>35000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30141512, "Nombre"=>"Kits de aislamiento térmico","valor"=>35000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30141513, "Nombre"=>"Ladrillos aislantes térmicos","valor"=>35000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30141514, "Nombre"=>"Aislación de poliestireno expandido eps","valor"=>35000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30141515, "Nombre"=>"Aislación de poliestireno extruido xps","valor"=>35000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30141516, "Nombre"=>"Aislación de lana mineral","valor"=>35000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30141600, "Nombre"=>"Aislamiento especial","valor"=>35000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30141601, "Nombre"=>"Aislación acústica","valor"=>35000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30141603, "Nombre"=>"Escudos térmicas","valor"=>35000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30141604, "Nombre"=>"Aislación por recubrimiento aerosol","valor"=>35000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30141605, "Nombre"=>"Material a prueba de incendios","valor"=>35000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30141700, "Nombre"=>"Capas de sellamiento de aislamiento","valor"=>35000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30141701, "Nombre"=>"Capa sellante de tabla de asfalto","valor"=>35000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30141702, "Nombre"=>"Capa sellante plástica","valor"=>35000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30141703, "Nombre"=>"Capa sellante ce caucho","valor"=>35000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30151500, "Nombre"=>"Material para tejados y techos","valor"=>35000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30151501, "Nombre"=>"Techado prearmado","valor"=>35000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30151502, "Nombre"=>"Valles de techo","valor"=>35000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30151503, "Nombre"=>"Textiles de techado","valor"=>35000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30151505, "Nombre"=>"Membranas para techos","valor"=>35000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30151507, "Nombre"=>"Huelgos","valor"=>35000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30151508, "Nombre"=>"Tejas de asfalto","valor"=>35000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30151509, "Nombre"=>"Armazones","valor"=>35000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30151510, "Nombre"=>"Tejados de pizarra","valor"=>35000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30151511, "Nombre"=>"Tejas de concreto","valor"=>35000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30151512, "Nombre"=>"Tejas de ladrillo","valor"=>35000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30151513, "Nombre"=>"Tejas de cerámica","valor"=>35000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30151514, "Nombre"=>"Tejas metálicas","valor"=>35000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30151515, "Nombre"=>"Tejas de madera","valor"=>35000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30151600, "Nombre"=>"Accesorios para tejados","valor"=>35000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30151601, "Nombre"=>"Plafones de tejado","valor"=>35000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30151602, "Nombre"=>"Planchas de escurrimiento","valor"=>35000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30151603, "Nombre"=>"Parada de grava","valor"=>35000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30151605, "Nombre"=>"Drenajes de tejados","valor"=>35000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30151607, "Nombre"=>"Claraboyas de ventilación","valor"=>35000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30151608, "Nombre"=>"Sofitos","valor"=>35000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30151609, "Nombre"=>"Bordes de tejado","valor"=>35000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30151610, "Nombre"=>"Escarificadores de tejado","valor"=>35000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30151700, "Nombre"=>"Canalones de tejado y accesorios","valor"=>35000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30151701, "Nombre"=>"Boquillas de bajantes","valor"=>35000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30151702, "Nombre"=>"Dinteles para goteo","valor"=>35000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30151703, "Nombre"=>"Canaletas","valor"=>35000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30151704, "Nombre"=>"Bloques contra salpicaduras","valor"=>35000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30151800, "Nombre"=>"Materiales para revestimiento de paredes y exterior","valor"=>35000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30151801, "Nombre"=>"Postigos","valor"=>35000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30151802, "Nombre"=>"Recubrimiento","valor"=>35000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30151803, "Nombre"=>"Empalmes de revestimiento de paredes","valor"=>35000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30151805, "Nombre"=>"Estucado","valor"=>35000, "clase"=>"B", "tipo"=>2];
        $codigos[]=["Codigo"=>30151806, "Nombre"=>"Muros de bloque de vidrio","valor"=>35000, "clase"=>"B", "tipo"=>2];
        $codigos[]=["Codigo"=>30151807, "Nombre"=>"Materiales para terminados exteriores","valor"=>35000, "clase"=>"B", "tipo"=>2];
        $codigos[]=["Codigo"=>30151808, "Nombre"=>"Molde de ladrillo","valor"=>35000, "clase"=>"B", "tipo"=>2];
        $codigos[]=["Codigo"=>30151900, "Nombre"=>"Materiales y productos para acabados","valor"=>35000, "clase"=>"B", "tipo"=>2];
        $codigos[]=["Codigo"=>30151901, "Nombre"=>"Toldos","valor"=>35000, "clase"=>"B", "tipo"=>2];
        $codigos[]=["Codigo"=>30151902, "Nombre"=>"Marquesinas","valor"=>35000, "clase"=>"B", "tipo"=>2];
        $codigos[]=["Codigo"=>30152000, "Nombre"=>"Cercado","valor"=>35000, "clase"=>"B", "tipo"=>2];
        $codigos[]=["Codigo"=>30152001, "Nombre"=>"Cercado de metal","valor"=>35000, "clase"=>"B", "tipo"=>2];
        $codigos[]=["Codigo"=>30152002, "Nombre"=>"Cercado de madera","valor"=>35000, "clase"=>"B", "tipo"=>2];
        $codigos[]=["Codigo"=>30152003, "Nombre"=>"Vallado de fibrocemento","valor"=>35000, "clase"=>"B", "tipo"=>2];
        $codigos[]=["Codigo"=>30152100, "Nombre"=>"Superficie","valor"=>35000, "clase"=>"B", "tipo"=>2];
        $codigos[]=["Codigo"=>30152101, "Nombre"=>"Acero de perdigones","valor"=>35000, "clase"=>"B", "tipo"=>2];
        $codigos[]=["Codigo"=>30161500, "Nombre"=>"Materiales para acabados de paredes","valor"=>35000, "clase"=>"B", "tipo"=>2];
        $codigos[]=["Codigo"=>30161501, "Nombre"=>"Fibra prensada","valor"=>35000, "clase"=>"B", "tipo"=>2];
        $codigos[]=["Codigo"=>30161502, "Nombre"=>"Papel de colgadura","valor"=>35000, "clase"=>"B", "tipo"=>2];
        $codigos[]=["Codigo"=>30161503, "Nombre"=>"Drywall","valor"=>35000, "clase"=>"B", "tipo"=>2];
        $codigos[]=["Codigo"=>30161504, "Nombre"=>"Protectores de esquinas","valor"=>35000, "clase"=>"B", "tipo"=>2];
        $codigos[]=["Codigo"=>30161505, "Nombre"=>"Paneles o empanelado","valor"=>35000, "clase"=>"B", "tipo"=>2];
        $codigos[]=["Codigo"=>30161508, "Nombre"=>"Rodillo de papel de colgadura","valor"=>35000, "clase"=>"B", "tipo"=>2];
        $codigos[]=["Codigo"=>30161509, "Nombre"=>"Tabla de yeso","valor"=>35000, "clase"=>"B", "tipo"=>2];
        $codigos[]=["Codigo"=>30161510, "Nombre"=>"Cobertura de pared plástica","valor"=>35000, "clase"=>"B", "tipo"=>2];
        $codigos[]=["Codigo"=>30161511, "Nombre"=>"Tela de pared","valor"=>35000, "clase"=>"B", "tipo"=>2];
        $codigos[]=["Codigo"=>30161600, "Nombre"=>"Materiales para techos","valor"=>35000, "clase"=>"B", "tipo"=>2];
        $codigos[]=["Codigo"=>30161601, "Nombre"=>"Baldosines acústicos para techos","valor"=>5000, "clase"=>"B", "tipo"=>2];
        $codigos[]=["Codigo"=>30161602, "Nombre"=>"Paneles para techos","valor"=>5000, "clase"=>"B", "tipo"=>2];
        $codigos[]=["Codigo"=>30161603, "Nombre"=>"Encofrados","valor"=>5000, "clase"=>"B", "tipo"=>2];
        $codigos[]=["Codigo"=>30161604, "Nombre"=>"Sistemas de cielo raso","valor"=>5000, "clase"=>"B", "tipo"=>2];
        $codigos[]=["Codigo"=>30161700, "Nombre"=>"Suelos","valor"=>5000, "clase"=>"B", "tipo"=>2];
        $codigos[]=["Codigo"=>30161701, "Nombre"=>"Alfombrado","valor"=>5000, "clase"=>"B", "tipo"=>2];
        $codigos[]=["Codigo"=>30161702, "Nombre"=>"Pisos de madera","valor"=>5000, "clase"=>"B", "tipo"=>2];
        $codigos[]=["Codigo"=>30161703, "Nombre"=>"Linóleo","valor"=>5000, "clase"=>"B", "tipo"=>2];
        $codigos[]=["Codigo"=>30161705, "Nombre"=>"Pisos de caucho","valor"=>5000, "clase"=>"B", "tipo"=>2];
        $codigos[]=["Codigo"=>30161706, "Nombre"=>"Pisos de baldosa o piedra","valor"=>5000, "clase"=>"B", "tipo"=>2];
        $codigos[]=["Codigo"=>30161707, "Nombre"=>"Pisos de vinilo","valor"=>5000, "clase"=>"B", "tipo"=>2];
        $codigos[]=["Codigo"=>30161708, "Nombre"=>"Alfombras de nudos","valor"=>5000, "clase"=>"B", "tipo"=>2];
        $codigos[]=["Codigo"=>30161709, "Nombre"=>"Alfombras de penachos","valor"=>5000, "clase"=>"B", "tipo"=>2];
        $codigos[]=["Codigo"=>30161710, "Nombre"=>"Pisos laminados","valor"=>5000, "clase"=>"B", "tipo"=>2];
        $codigos[]=["Codigo"=>30161711, "Nombre"=>"Alfombras para exteriores","valor"=>5000, "clase"=>"B", "tipo"=>2];
        $codigos[]=["Codigo"=>30161712, "Nombre"=>"Perfiles laminados para suelos","valor"=>5000, "clase"=>"B", "tipo"=>2];
        $codigos[]=["Codigo"=>30161713, "Nombre"=>"Almohadilla para alfombras","valor"=>5000, "clase"=>"B", "tipo"=>2];
        $codigos[]=["Codigo"=>30161714, "Nombre"=>"Suelo de corcho","valor"=>45000, "clase"=>"B", "tipo"=>2];
        $codigos[]=["Codigo"=>30161715, "Nombre"=>"Enrejados de madera","valor"=>45000, "clase"=>"B", "tipo"=>2];
        $codigos[]=["Codigo"=>30161717, "Nombre"=>"Pisos para accesos","valor"=>45000, "clase"=>"B", "tipo"=>2];
        $codigos[]=["Codigo"=>30161718, "Nombre"=>"Piso de acero antideslizante","valor"=>45000, "clase"=>"B", "tipo"=>2];
        $codigos[]=["Codigo"=>30161719, "Nombre"=>"Fieltro para alfombras","valor"=>45000, "clase"=>"B", "tipo"=>2];
        $codigos[]=["Codigo"=>30161720, "Nombre"=>"Panel de piso","valor"=>45000, "clase"=>"B", "tipo"=>2];
        $codigos[]=["Codigo"=>30161721, "Nombre"=>"Umbral de piso","valor"=>45000, "clase"=>"B", "tipo"=>2];
        $codigos[]=["Codigo"=>30161800, "Nombre"=>"Ebanistería","valor"=>45000, "clase"=>"B", "tipo"=>2];
        $codigos[]=["Codigo"=>30161801, "Nombre"=>"Armarios","valor"=>45000, "clase"=>"B", "tipo"=>2];
        $codigos[]=["Codigo"=>30161803, "Nombre"=>"Armarios domésticos","valor"=>45000, "clase"=>"B", "tipo"=>2];
        $codigos[]=["Codigo"=>30161804, "Nombre"=>"Armarios de escuela","valor"=>45000, "clase"=>"B", "tipo"=>2];
        $codigos[]=["Codigo"=>30161805, "Nombre"=>"Armarios de laboratorio","valor"=>45000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30161806, "Nombre"=>"Closet","valor"=>45000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30161807, "Nombre"=>"Cajón","valor"=>45000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30161808, "Nombre"=>"Ensamble para deslizamiento del cajón","valor"=>45000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30161809, "Nombre"=>"Almohadillas contra cierre brusco","valor"=>45000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30161810, "Nombre"=>"Gabinete tri – view","valor"=>45000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30161900, "Nombre"=>"Moldeado y carpintería mecánica","valor"=>45000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30161901, "Nombre"=>"Puertas de rejilla","valor"=>45000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30161902, "Nombre"=>"Columnas","valor"=>45000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30161903, "Nombre"=>"Paneles de madera","valor"=>45000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30161904, "Nombre"=>"Cornisas","valor"=>45000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30161905, "Nombre"=>"Cercos de puertas","valor"=>45000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30161906, "Nombre"=>"Moldes","valor"=>45000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30161908, "Nombre"=>"Piezas de escaleras","valor"=>45000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30162000, "Nombre"=>"Molduras y carpintería","valor"=>45000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30162001, "Nombre"=>"Laminado de alta presión","valor"=>45000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30162002, "Nombre"=>"Laminado especial","valor"=>45000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30162003, "Nombre"=>"Laminado de metal","valor"=>45000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30162004, "Nombre"=>"Laminado de reborde","valor"=>45000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30162005, "Nombre"=>"Lámina térmica rígida o rtf","valor"=>45000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30162100, "Nombre"=>"Laminados interiores","valor"=>45000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30162101, "Nombre"=>"Escaleras de acero","valor"=>45000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30162102, "Nombre"=>"Escaleras de madera","valor"=>45000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30162103, "Nombre"=>"Escaleras de concreto","valor"=>45000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30162104, "Nombre"=>"Arista del escalón ","valor"=>45000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30162200, "Nombre"=>"Mostradores","valor"=>45000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30162201, "Nombre"=>"Mesón laminado","valor"=>45000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30162202, "Nombre"=>"Mesón de mármol cultivado","valor"=>45000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30162203, "Nombre"=>"Mesón de superficie sólida","valor"=>45000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30162204, "Nombre"=>"Mesón de granito","valor"=>45000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30162300, "Nombre"=>"Accesorios para gabinetes","valor"=>45000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30162301, "Nombre"=>"Piezas o ensamble de “lazy susan”","valor"=>45000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30162302, "Nombre"=>"Engaste de rejilla o cajón para condimentos","valor"=>45000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30162303, "Nombre"=>"Piezas o ensamble de caneca de la basura de sacar","valor"=>45000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30162304, "Nombre"=>"Piezas o ensamble de despensa","valor"=>45000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30162305, "Nombre"=>"Piezas o ensamble de bandeja de inclinar","valor"=>45000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30162306, "Nombre"=>"Piezas o ensamble de montura de puerta o toalla deslizable","valor"=>45000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30162307, "Nombre"=>"Piezas o ensamble de ancheta de sacar o voltear","valor"=>45000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30162308, "Nombre"=>"Tapa o ensamble de caja para el pan","valor"=>45000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30162309, "Nombre"=>"Estante para copas","valor"=>45000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30162310, "Nombre"=>"Bandera rodante","valor"=>45000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30162311, "Nombre"=>"Recipiente de almacenamiento de deslizar o su ensamble ","valor"=>45000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30162400, "Nombre"=>"Muros divisorios","valor"=>45000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30162401, "Nombre"=>"Pared plegable","valor"=>45000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30162402, "Nombre"=>"Pantalla o biombo o cubículo","valor"=>45000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30162403, "Nombre"=>"Sistema de pared interior","valor"=>45000, "clase"=>"A", "tipo"=>2];
        $codigos[]=["Codigo"=>30162404, "Nombre"=>"Pared de cuarto frío","valor"=>45000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30171500, "Nombre"=>"Puertas","valor"=>45000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30171501, "Nombre"=>"Puertas de cristal","valor"=>45000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30171502, "Nombre"=>"Puertas de pantalla","valor"=>45000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30171503, "Nombre"=>"Puertas rodantes","valor"=>45000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30171504, "Nombre"=>"Puertas de madera","valor"=>45000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30171505, "Nombre"=>"Puertas de metal","valor"=>45000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30171506, "Nombre"=>"Contrapuertas","valor"=>45000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30171507, "Nombre"=>"Marcos de puertas o quicios","valor"=>45000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30171508, "Nombre"=>"Puertas corrediza empotrable","valor"=>45000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30171509, "Nombre"=>"Puertas giratorias","valor"=>45000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30171510, "Nombre"=>"Puertas automáticas","valor"=>45000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30171511, "Nombre"=>"Puerta de vaivén","valor"=>45000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30171512, "Nombre"=>"Abridores de puertas","valor"=>45000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30171513, "Nombre"=>"Rodapiés","valor"=>45000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30171514, "Nombre"=>"Cerradores de puertas","valor"=>45000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30171515, "Nombre"=>"Puerta de inspección","valor"=>45000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30171516, "Nombre"=>"Pantalla para puertas","valor"=>45000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30171517, "Nombre"=>"Puertas a prueba de sonido","valor"=>45000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30171518, "Nombre"=>"Puertas imperfectas","valor"=>45000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30171519, "Nombre"=>"Puertas anti – explosión","valor"=>45000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30171520, "Nombre"=>"Loop de puerta y ventana","valor"=>45000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30171521, "Nombre"=>"Puerta hermética contra agua","valor"=>45000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30171522, "Nombre"=>"Puerta hermética sin circulación de aire","valor"=>45000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30171523, "Nombre"=>"Puerta de escape de incendio","valor"=>45000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30171524, "Nombre"=>"Puerta de protección contra rayos","valor"=>45000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30171525, "Nombre"=>"Puerta de presión","valor"=>45000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30171526, "Nombre"=>"Puerta plegable","valor"=>45000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30171600, "Nombre"=>"Ventanas","valor"=>45000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30171604, "Nombre"=>"Ventanas de guillotina","valor"=>45000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30171605, "Nombre"=>"Ventanas de apertura horizontal","valor"=>45000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30171606, "Nombre"=>"Ventanas giratorias","valor"=>45000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30171607, "Nombre"=>"Ventanas con hoja de desplazamiento horizontal","valor"=>45000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30171608, "Nombre"=>"Ventanas basculantes o de montante","valor"=>45000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30171609, "Nombre"=>"Ventanas fijas","valor"=>45000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30171610, "Nombre"=>"Miradores","valor"=>45000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30171611, "Nombre"=>"Ventana de miradores","valor"=>45000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30171612, "Nombre"=>"Ventanas salientes","valor"=>45000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30171613, "Nombre"=>"Paredes de vidrio","valor"=>45000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30171614, "Nombre"=>"Pantallas de ventana","valor"=>45000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30171615, "Nombre"=>"Ventanas francesas o puerta – ventanas","valor"=>45000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30171700, "Nombre"=>"Productos de cristal","valor"=>45000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30171701, "Nombre"=>"Adoquines","valor"=>45000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30171703, "Nombre"=>"Vidrio biselado","valor"=>45000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30171704, "Nombre"=>"Vidrio con plomo","valor"=>45000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30171705, "Nombre"=>"Vidrio laminado","valor"=>45000, "clase"=>"A", "tipo"=>1];
        $codigos[]=["Codigo"=>30171706, "Nombre"=>"Vidrio templado","valor"=>45000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30171707, "Nombre"=>"Vidrio de seguridad","valor"=>45000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30171708, "Nombre"=>"Vidrio flotado","valor"=>45000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30171709, "Nombre"=>"Vidrio con alambre incrustado","valor"=>45000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30171710, "Nombre"=>"Vidrio de aislación","valor"=>45000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30171711, "Nombre"=>"Vidrio corrugado","valor"=>45000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30171712, "Nombre"=>"Vitrales","valor"=>45000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30171800, "Nombre"=>"Claraboyas","valor"=>45000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30171801, "Nombre"=>"Claraboyas fijas","valor"=>45000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30171802, "Nombre"=>"Claraboyas con ventilación","valor"=>45000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30171803, "Nombre"=>"Claraboyas de tubo","valor"=>45000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30171804, "Nombre"=>"Tapa de humo","valor"=>45000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30171900, "Nombre"=>"Marcos de ventanas","valor"=>45000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30171901, "Nombre"=>"Marcos para ventanas de guillotina","valor"=>5000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30171902, "Nombre"=>"Marcos para ventanas de apertura horizontal","valor"=>5000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30171903, "Nombre"=>"Marcos para ventanas giratorias","valor"=>5000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30171904, "Nombre"=>"Marcos para ventanas con hojas de desplazamiento horizontal","valor"=>5000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30171905, "Nombre"=>"Marcos para ventanas basculantes o de montante","valor"=>5000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30171906, "Nombre"=>"Marcos para ventanas fijas","valor"=>5000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30171907, "Nombre"=>"Alfeizar o antepecho","valor"=>5000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30171908, "Nombre"=>"Arco de ventana","valor"=>5000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30172000, "Nombre"=>"Puertas","valor"=>5000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30172001, "Nombre"=>"Puerta de barra sencilla","valor"=>5000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30172002, "Nombre"=>"Puerta de doble barra","valor"=>5000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30172100, "Nombre"=>"Puertas para garaje y operadores","valor"=>5000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30172101, "Nombre"=>"Puerta de garaje pan","valor"=>5000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30172102, "Nombre"=>"Puerta de garaje en sándwich aislada","valor"=>5000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30172103, "Nombre"=>"Puerta de garaje de madera","valor"=>5000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30172104, "Nombre"=>"Puerta de garaje de carroza","valor"=>5000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30172105, "Nombre"=>"Puerta de garaje de pantalla","valor"=>5000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30172106, "Nombre"=>"Puerta de garaje de de pvc","valor"=>5000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30172107, "Nombre"=>"Puerta de garaje de eslabones de cadena","valor"=>5000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30172108, "Nombre"=>"Puerta de garaje rodante","valor"=>5000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30172109, "Nombre"=>"Componente de puerta de garaje","valor"=>5000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30172110, "Nombre"=>"Accesorio de puerta de garaje ","valor"=>5000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30172111, "Nombre"=>"Operador completo de puerta de garaje","valor"=>5000, "clase"=>"C", "tipo"=>1];
        $codigos[]=["Codigo"=>30172112, "Nombre"=>"Componente de operador de puerta de garaje"];
        $codigos[]=["Codigo"=>30172113, "Nombre"=>"Accesorio de operador de puerta de garaje"];
        
        
        foreach ($codigos as $index => $codigo) {    
            foreach ($codigo as $key => $value) {
                if ($value==$code1) {
                    $datos[]=[
                    "Codigo"=>$codigo['Codigo'],
                    "Nombre"=>$codigo['Nombre'],
                    "Valor"=>$codigo['valor'],
                    "Clase"=>$codigo['clase'],
                    "Tipo"=>$codigo['tipo'],
                    "Total"=>$cont+= $codigo['valor'],
                    ];
                }
                if ($value==$code2) {
                    $datos[]=[
                    "Codigo"=>$codigo['Codigo'],
                    "Nombre"=>$codigo['Nombre'],
                    "Valor"=>$codigo['valor'],
                    "Clase"=>$codigo['clase'],
                    "Tipo"=>$codigo['tipo'],
                    "Total"=>$cont+= $codigo['valor'],
                    ];
                }
                if ($value==$code3) {
                    $datos[]=[
                    "Codigo"=>$codigo['Codigo'],
                    "Nombre"=>$codigo['Nombre'],
                    "Valor"=>$codigo['valor'],
                    "Clase"=>$codigo['clase'],
                    "Tipo"=>$codigo['tipo'],
                    "Total"=>$cont+= $codigo['valor'],
                    ];
                }
                if ($value==$code4) {
                    $datos[]=[
                    "Codigo"=>$codigo['Codigo'],
                    "Nombre"=>$codigo['Nombre'],
                    "Valor"=>$codigo['valor'],
                    "Clase"=>$codigo['clase'],
                    "Tipo"=>$codigo['tipo'],
                    "Total"=>$cont+= $codigo['valor'],
                    ];
                }
                if ($value==$code5) {
                    $datos[]=[
                    "Codigo"=>$codigo['Codigo'],
                    "Nombre"=>$codigo['Nombre'],
                    "Valor"=>$codigo['valor'],
                    "Clase"=>$codigo['clase'],
                    "Tipo"=>$codigo['tipo'],
                    "Total"=>$cont+= $codigo['valor'],
                    ];
                }
                if ($value==$code6) {
                    $datos[]=[
                    "Codigo"=>$codigo['Codigo'],
                    "Nombre"=>$codigo['Nombre'],
                    "Valor"=>$codigo['valor'],
                    "Clase"=>$codigo['clase'],
                    "Tipo"=>$codigo['tipo'],
                    "Total"=>$cont+= $codigo['valor'],
                    ];
                }
                if ($value==$code7) {
                    $datos[]=[
                    "Codigo"=>$codigo['Codigo'],
                    "Nombre"=>$codigo['Nombre'],
                    "Valor"=>$codigo['valor'],
                    "Clase"=>$codigo['clase'],
                    "Tipo"=>$codigo['tipo'],
                    "Total"=>$cont+= $codigo['valor'],
                    ];
                }
                if ($value==$code8) {
                    $datos[]=[
                    "Codigo"=>$codigo['Codigo'],
                    "Nombre"=>$codigo['Nombre'],
                    "Valor"=>$codigo['valor'],
                    "Clase"=>$codigo['clase'],
                    "Tipo"=>$codigo['tipo'],
                    "Total"=>$cont+= $codigo['valor'],
                    ];
                }
                if ($value==$code9) {
                    $datos[]=[
                    "Codigo"=>$codigo['Codigo'],
                    "Nombre"=>$codigo['Nombre'],
                    "Valor"=>$codigo['valor'],
                    "Clase"=>$codigo['clase'],
                    "Tipo"=>$codigo['tipo'],
                    "Total"=>$cont+= $codigo['valor'],
                    ];
                }
                if ($value==$code10) {
                    $datos[]=[
                    "Codigo"=>$codigo['Codigo'],
                    "Nombre"=>$codigo['Nombre'],
                    "Valor"=>$codigo['valor'],
                    "Clase"=>$codigo['clase'],
                    "Tipo"=>$codigo['tipo'],
                    "Total"=>$cont+= $codigo['valor'],
                    ];
                }
            }               
        }

		foreach ($comprador as $key => $value) {
			$usuario=[
				"Nombre"=>$comprador['Nombre'],
				"Apellido"=>$comprador['Apellido'],
				"Cedula"=>$comprador['Cedula'],
				"N° Contrato"=>$comprador['IDContrato'],
				"Descripcion"=>$comprador['Descripcion'],
				"Valor Contrato"=>$comprador['ValorContrato'],
				
			];
		}
        
        if ($valor<$cont) {
        	return view('Alertas/alerta');
        }else if ($valor>=$cont) {
        	$usuario2=[
            	'users'=>$usuario
        	];
        	$datos2=[
            	'codigos'=>$datos
            
        	];
        	return view('tablecompra',$usuario2,$datos2);
        }

        echo "<br><br>";
       





        //echo $totalcosto;
        /*$datos2=[
            'archivos'=>$datos
        ];
        return view('table',$datos2);*/
    }
}
