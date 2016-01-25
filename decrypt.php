<?php

/**
 *
 * @Author: Marcelo C Menezes
 * https://github.com/marcelocmenezes
 *
 */

class Decript {

    public function descriptografar($email) {
        $aux = null;

        for ($i =0; $i < strlen($email); $i++) {
            $sb =  substr($email, $i, 1);

            // Se não for do tipo numério ou caracter especial.
            if ( !is_numeric($sb) || !ctype_punct($sb))
                $sb = $this->retornaLetra($this->calculo($this->retornaNumero($sb)));

            $aux = $aux . $sb;

        }

        return $aux;
    }

    private function calculo($n)
    {
        if (is_int($n)) {
            $n -= 15;
            if ($n < 1) return $n + 26;
            else return $n;
        } else {
            return $n;
        }
    }

    public function retornaNumero($letra)
    {
        switch ($letra) {
            case "a":
                return 1;
                break;
            case "b":
                return 2;
                break;
            case "c":
                return 3;
                break;
            case "d":
                return 4;
                break;
            case "e":
                return 5;
                break;
            case "f":
                return 6;
                break;
            case "g":
                return 7;
                break;
            case "h":
                return 8;
                break;
            case "i":
                return 9;
                break;
            case "j":
                return 10;
                break;
            case "k":
                return 11;
                break;
            case "l":
                return 12;
                break;
            case "m":
                return 13;
                break;
            case "n":
                return 14;
                break;
            case "o":
                return 15;
                break;
            case "p":
                return 16;
                break;
            case "q":
                return 17;
                break;
            case "r":
                return 18;
                break;
            case "s":
                return 19;
                break;
            case "t":
                return 20;
                break;
            case "u":
                return 21;
                break;
            case "v":
                return 22;
                break;
            case "w":
                return 23;
                break;
            case "x":
                return 24;
                break;
            case "y":
                return 25;
                break;
            case "z":
                return 26;
                break;
            default :
                return $letra;
        }

    }

    public function retornaLetra($numero) {
        switch($numero) {
            case 1:
                return "a";
                break;
            case 2:
                return "b";
                break;
            case 3:
                return "c";
                break;
            case 4:
                return "d";
                break;
            case 5:
                return "e";
                break;
            case 6:
                return "f";
                break;
            case 7:
                return "g";
                break;
            case 8:
                return "h";
                break;
            case 9:
                return "i";
                break;
            case 10:
                return "j";
                break;
            case 11:
                return "k";
                break;
            case 12:
                return "l";
                break;
            case 13:
                return "m";
                break;
            case 14:
                return "n";
                break;
            case 15:
                return "o";
                break;
            case 16:
                return "p";
                break;
            case 17:
                return "q";
                break;
            case 18:
                return "r";
                break;
            case 19:
                return "s";
                break;
            case 20:
                return "t";
                break;
            case 21:
                return "u";
                break;
            case 22:
                return "v";
                break;
            case 23:
                return "w";
                break;
            case 24:
                return "x";
                break;
            case 25:
                return "y";
                break;
            case 26:
                return "z";
                break;

            default :
                return $numero;
        }


    }

}

$teste = new decript();
echo $teste->descriptografar("b3rdcigpi4pv0gp@htmadv.rdb");
