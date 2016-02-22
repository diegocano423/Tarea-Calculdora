var services = angular.module('calculator.services', [])
services.service('CalculadoraService', ['$http', function($http) {
    var empezarOperacion = function empezarOperacion(primerValor, segundoValor, operacion) {
        var url = 'controlador.php';
            url += '?primerValor=' + primerValor;
            url += '&segundoValor=' + segundoValor;
            url += '&operacion=' + operacion;

            return $http({url: url});
        };

    return {
        empezarOperacion: empezarOperacion
    }
}])