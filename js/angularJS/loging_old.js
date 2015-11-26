var app = angular.module('Loging', []);
app.controller('LogingController', function ($scope) {

    if (localStorage.FB_user_id) {
        document.getElementById('User-img').innerHTML = '<img class="img-responsive img-circle" src="http://graph.facebook.com/' + localStorage.FB_user_id + '/picture" width="100" height="100"/>';
    }

    $scope.LogOut = function () {
        if (localStorage.FB_user_id) {
            FB.logout(function (response) {
                localStorage.clear();
                location.reload();
            });
        }
        else {
            localStorage.clear();
            location.reload();
        }
    }
    
    function statusChangeCallback(response) {
        if (response.status === 'connected') {
            if (localStorage.isAuthenticated) {
                FB.api('/me', { fields: 'id,name,email' }, function (response) {
                    localStorage.isAuthenticated = true;
                    localStorage.user_email = response.email;
                    localStorage.FB_user_id = response.id;
                });

            } else {
                FB.logout(function (response) {
                    localStorage.clear();
                });
            }
        } else if (response.status === 'not_authorized') {
            console.log('not Authorize for website');
        } else {

        }
    }
    
    window.fbAsyncInit = function () {
        FB.init({
            appId: '979759612088204',
            cookie: true,
            xfbml: true,
            version: 'v2.5'
        });

        FB.getLoginStatus(function (response) {
            statusChangeCallback(response);

        });

    };
    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) { return; }
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));



    $scope.FBRegister = function FBlogin() {
        FB.login(function (response) {
            if (response.status === 'connected') {
                FB.api('/me', { fields: 'email,name,id' }, function (response) {
                    localStorage.isAuthenticated = true;
                    localStorage.user_email = response.email;
                    localStorage.user_name = response.name;
                    localStorage.FB_user_id = response.id;
                    $scope.greeting = localStorage.user_name;
                    $scope.fbimageid = response.id;
                    document.getElementById('User-img').innerHTML = '<img class="img-responsive img-circle" src="http://graph.facebook.com/' + response.id + '/picture" width="100" height="100"/>';
                });
            } else if (response.status === 'not_authorized') {
                // The person is logged into Facebook, but not Coqeep app.
            } else {
                // The person is not logged into Facebook, so we're not sure if
                // they are logged into this app or not.
            }
        }, { 'scope': 'email' });
    }


});