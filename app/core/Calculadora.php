<?php

    class Calculadora{

        public function versaoCalculadora() : string{
            $versao = "2026/5";
            return $versao;
        }

        public function somar(int $valor1, int $valor2): int{
            $soma = $valor1 + $valor2;
            return $soma;
        }

        public function multiplicar(int $valor1, int $valor2): string{
            $resultado = $valor1 * $valor2;
            return $resultado;
        }

        public function tipoNumero (int $valor): string{
            $sobra = $valor % 2;
            if($sobra == 0) {
                return "par";
            }else{
                return "ímpar";
            }
        }

        public function aprovacao($valor1): bool{
            if($valor1 > 5) {
                return true;
            } else{
                return false;
            }
        }

        public function media(int $valor1, int $valor2, int $valor3 = 0): int{
            if($valor1 == 0 || $valor2 == 0) {
                return 0;
            }
            if($valor3 == 0) {
                $media = ($valor1 + $valor2) / 2;
            } else
            if($valor3 != 0){
                $media = ($valor1 + $valor2 + $valor3) / 3;
            }
            $media = round($media); // floor arredonda para baixo
            return $media;
        }

    }


?>