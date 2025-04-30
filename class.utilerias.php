<?php
/**
 * CLASE QUE CONTIENE LOS MÉTODOS PARA DEL MÓDULO PRÉSTAMOS
 */

class Util{ 
    /*! 
        @function num2letras () 
        @abstract Dado un n?mero lo devuelve escrito. 
        @param $num number - N?mero a convertir. 
        @param $fem bool - Forma femenina (true) o no (false). 
        @param $dec bool - Con decimales (true) o no (false). 
        @result string - Devuelve el n?mero escrito en letra. 
    */ 
    function num2letras($num, $fem = false, $dec = true) { 
        $matuni[2]  = "dos"; 
        $matuni[3]  = "tres"; 
        $matuni[4]  = "cuatro"; 
        $matuni[5]  = "cinco"; 
        $matuni[6]  = "seis"; 
        $matuni[7]  = "siete"; 
        $matuni[8]  = "ocho"; 
        $matuni[9]  = "nueve"; 
        $matuni[10] = "diez"; 
        $matuni[11] = "once"; 
        $matuni[12] = "doce"; 
        $matuni[13] = "trece"; 
        $matuni[14] = "catorce"; 
        $matuni[15] = "quince"; 
        $matuni[16] = "dieciseis"; 
        $matuni[17] = "diecisiete"; 
        $matuni[18] = "dieciocho"; 
        $matuni[19] = "diecinueve"; 
        $matuni[20] = "veinte"; 
        $matunisub[2] = "dos"; 
        $matunisub[3] = "tres"; 
        $matunisub[4] = "cuatro"; 
        $matunisub[5] = "quin"; 
        $matunisub[6] = "seis"; 
        $matunisub[7] = "sete"; 
        $matunisub[8] = "ocho"; 
        $matunisub[9] = "nove"; 
    
        $matdec[2] = "veint"; 
        $matdec[3] = "treinta"; 
        $matdec[4] = "cuarenta"; 
        $matdec[5] = "cincuenta"; 
        $matdec[6] = "sesenta"; 
        $matdec[7] = "setenta"; 
        $matdec[8] = "ochenta"; 
        $matdec[9] = "noventa"; 
        $matsub[3]  = 'mill'; 
        $matsub[5]  = 'bill'; 
        $matsub[7]  = 'mill'; 
        $matsub[9]  = 'trill'; 
        $matsub[11] = 'mill'; 
        $matsub[13] = 'bill'; 
        $matsub[15] = 'mill'; 
        $matmil[4]  = 'millones'; 
        $matmil[6]  = 'billones'; 
        $matmil[7]  = 'de billones'; 
        $matmil[8]  = 'millones de billones'; 
        $matmil[10] = 'trillones'; 
        $matmil[11] = 'de trillones'; 
        $matmil[12] = 'millones de trillones'; 
        $matmil[13] = 'de trillones'; 
        $matmil[14] = 'billones de trillones'; 
        $matmil[15] = 'de billones de trillones'; 
        $matmil[16] = 'millones de billones de trillones'; 
        
        //Zi hack
        $float=explode('.',$num);
        $num=$float[0];
    
        $num = trim((string)@$num); 
        if (!empty($num) && $num[0] == '-') {
        $neg = 'menos '; 
        $num = substr($num, 1); 
        }else 
        $neg = ''; 
        while (!empty($num) && $num[0] == '0') $num = substr($num, 1); 
        if ((!empty($num) && $num[0] < '1') or (!empty($num) && $num[0] > 9)) $num = '0' . $num; 
        $zeros = true; 
        $punt = false; 
        $ent = ''; 
        $fra = ''; 
        for ($c = 0; $c < strlen($num); $c++) { 
        $n = $num[$c]; 
        if (! (strpos(".,'''", $n) === false)) { 
            if ($punt) break; 
            else{ 
                $punt = true; 
                continue; 
            } 
    
        }elseif (! (strpos('0123456789', $n) === false)) { 
            if ($punt) { 
                if ($n != '0') $zeros = false; 
                $fra .= $n; 
            }else 
    
                $ent .= $n; 
        }else 
    
            break; 
    
        } 
        $ent = '     ' . $ent; 
        if ($dec and $fra and ! $zeros) { 
        $fin = ' coma'; 
        for ($n = 0; $n < strlen($fra); $n++) { 
            if (($s = $fra[$n]) == '0') 
                $fin .= ' cero'; 
            elseif ($s == '1') 
                $fin .= $fem ? ' una' : ' un'; 
            else 
                $fin .= ' ' . $matuni[$s]; 
        } 
        }else 
        $fin = ''; 
        if ((int)$ent === 0) return 'Cero ' . $fin; 
        $tex = ''; 
        $sub = 0; 
        $mils = 0; 
        $neutro = false; 
        while ( ($num = substr($ent, -3)) != '   ') { 
        $ent = substr($ent, 0, -3); 
        if (++$sub < 3 and $fem) { 
            $matuni[1] = 'una'; 
            $subcent = 'as'; 
        }else{ 
            $matuni[1] = $neutro ? 'un' : 'uno'; 
            $subcent = 'os'; 
        } 
        $t = ''; 
        $n2 = substr($num, 1); 
        if ($n2 == '00') { 
        }elseif ($n2 < 21) 
            $t = ' ' . $matuni[(int)$n2]; 
        elseif ($n2 < 30) { 
            $n3 = $num[2]; 
            if ($n3 != 0) $t = 'i' . $matuni[$n3]; 
            $n2 = $num[1]; 
            $t = ' ' . $matdec[$n2] . $t; 
        }else{ 
            $n3 = $num[2]; 
            if ($n3 != 0) $t = ' y ' . $matuni[$n3]; 
            $n2 = $num[1]; 
            $t = ' ' . $matdec[$n2] . $t; 
        } 
        $n = $num[0]; 
        if ($n == 1) { 
            $t = ' ciento' . $t; 
        }elseif ($n == 5){ 
            $t = ' ' . $matunisub[$n] . 'ient' . $subcent . $t; 
        }elseif ($n != 0){ 
            $t = ' ' . $matunisub[$n] . 'cient' . $subcent . $t; 
        } 
        if ($sub == 1) { 
        }elseif (! isset($matsub[$sub])) { 
            if ($num == 1) { 
                $t = ' mil'; 
            }elseif ($num > 1){ 
                $t .= ' mil'; 
            } 
        }elseif ($num == 1) { 
            $t .= ' ' . $matsub[$sub] . '?n'; 
        }elseif ($num > 1){ 
            $t .= ' ' . $matsub[$sub] . 'ones'; 
        }   
        if ($num == '000') $mils ++; 
        elseif ($mils != 0) { 
            if (isset($matmil[$sub])) $t .= ' ' . $matmil[$sub]; 
            $mils = 0; 
        } 
        $neutro = true; 
        $tex = $t . $tex; 
        } 
        $tex = $neg . substr($tex, 1) . $fin; 
        //Zi hack --> return ucfirst($tex);
        //$end_num=ucfirst($tex).' pesos '.$float[1].'/100 M.N.';
        $end_num = ucfirst($tex);
        return strtolower($end_num); 
    }

    public function fecha_letra($d, $m, $a){
        //$dia = "dos";
        $dia = $this->num2letras($d);

        $mes = "";
        switch($m){
            case 1: $mes = 'enero'; break;
            case 2: $mes = 'febrero'; break;
            case 3: $mes = 'marzo'; break;
            case 4: $mes = 'abril'; break;
            case 5: $mes = 'mayo'; break;
            case 6: $mes = 'junio'; break;
            case 7: $mes = 'julio'; break;
            case 8: $mes = 'agosto'; break;
            case 9: $mes = 'septiembre'; break;
            case 10: $mes = 'octubre'; break;
            case 11: $mes = 'noviembre'; break;
            case 12: $mes = 'diciembre'; break;
        }

        //$anio = "mil";
        $anio = $this->num2letras($a);
        return "$dia de $mes de $anio";         
    }

    function load_view($view_path, $data = [], $return = false) {
        // Extrae variables del arreglo como si fueran variables individuales
        extract($data);
    
        // Comienza a capturar la salida del buffer
        ob_start();
    
        // Incluye la vista (como si fuera "reporte/psychosocialRiskFactors.php")
        include $view_path . '.php';
    
        // Obtiene el contenido del buffer
        $output = ob_get_clean();
    
        // Devuelve o imprime
        if ($return) {
            return $output;
        } else {
            echo $output;
        }
    }
    
}