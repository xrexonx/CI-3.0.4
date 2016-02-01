(function () {
    'use strict';

    angular
        .module('AppServices')
        .service('Login', function (Http) {

			return {
                login: function ($oUsers) {
                    return Http.send('login/logMeIn', 'POST', $oUsers, '');
                }
            };


        });

})();