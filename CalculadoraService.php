<?php

class CalculadoraService {
    const SUMA = 'suma';
    const RESTA = 'resta';
    const MULTIPLICAR = 'multiplicar';
    const DIVISION = 'division';

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

    public function multiplicar($primerValor, $segundoValor) {
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
}