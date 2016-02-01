(function () {
    'use strict';

    angular
        .module('AppServices')
        .service('Signup', function (Http) {

			return {
                create: function ($oUsers) {
                    return Http.send('signup/create', 'POST', $oUsers, '');
                }
            };


        });

})();