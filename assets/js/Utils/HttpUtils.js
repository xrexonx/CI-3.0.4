(function () {
    'use strict';

    angular
        .module('AppServices')
        .service('Http', function ($http, $httpParamSerializer) {

            var HOST = 'http://localhost/CI-3.0.4/';

            function _ajaxSend (routeName, method, data, headers) {
                return $http({
                    url     : HOST + routeName,
                    method  : method || 'GET',
                    headers : headers || {'Content-Type': 'application/x-www-form-urlencoded' },
                    data    : $httpParamSerializer(data) || {},
                    cache   : true
                });
            }

            return {
                send:  _ajaxSend
            };

        });

})();