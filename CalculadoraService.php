<?php

class CalculadoraService {
    const SUMA = 'suma';
    const RESTA = 'resta';
    const MULTIPLICAR = 'multiplicar';
    const DIVISION = 'division';
    const RESIDUO = 'residuo';

    public function sumar($primerValor, $segundoValor) {

        if (isset($primerValor, $segundoValor)) {
            return $primerValor + $segundoValor;
        }

        return null;
    }

    public function restar($primerValor, $segundoValor) {
        if (isset($primerValor, $segundoValor)) {
            return $primerValor - $segundoValor;
        }

        return null;
    }

    public function mulptiplicar($primerValor, $segundoValor) {
        if (isset($primerValor, $segundoValor)) {
            return $primerValor * $segundoValor;
        }

        return null;
    }

    public function division($primerValor, $segundoValor) {
        if (isset($primerValor, $segundoValor)) {
            return $primerValor / $segundoValor;
        }

        return null;
    }

    public function residuo($primerValor) {
        if (isset($primerValor)) {
            return $primerValor %  
        }
    }
}