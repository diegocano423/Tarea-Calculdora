var controllers = angular.module('calculator.controllers', ['calculator.services'])
    
controllers.controller('CalculatorCtrl', ['$scope', 'CalculadoraService', function ($scope, CalculadoraService){

    var primerNumero = true;
    var operacion = '';
    $scope.primerValor;
    $scope.segundoValor;
    $scope.pantallaVal = '';

    $scope.valorPantalla = function(pNumero) {
        $scope.pantallaVal = $scope.pantallaVal + pNumero;     
        if (primerNumero) {
            $scope.primerValor = $scope.pantallaVal;
            console.log($scope.primerValor + ' primer valor');
        } else {
            $scope.segundoValor = $scope.pantallaVal
            console.log($scope.segundoValor + ' segundo');
        }
    };

    $scope.limpiarPantalla = function() {
        $scope.pantallaVal = '';
    };

    $scope.cambiarNumeros = function() {
        if (primerNumero) {
            primerNumero = false;
        }
    };

    $scope.sumarValores = function sumarValores () {
        $scope.cambiarNumeros();
        $scope.limpiarPantalla();
        operacion = 'suma';
    };

    $scope.multiplicarValores = function multiplicarValores () {
        $scope.cambiarNumeros();
        $scope.limpiarPantalla();
        operacion = 'multiplicar';
    };

    $scope.restarValores = function restarValores () {
        $scope.cambiarNumeros();
        $scope.limpiarPantalla();
        operacion = 'resta';
    };

    $scope.dividirValores = function dividirValores () {
        $scope.cambiarNumeros();
        $scope.limpiarPantalla();
        operacion = 'division';
    };

    $scope.calcularValores = function calcularValores () {
        CalculadoraService
            .empezarOperacion($scope.primerValor, $scope.segundoValor, operacion)
            .then(function(response) {
                if (response.data) {
                    $scope.pantallaVal = response.data;
                    primerNumero = true;
                }
            })
    };
}])