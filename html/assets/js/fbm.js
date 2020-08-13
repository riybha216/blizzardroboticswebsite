document.addEventListener("DOMContentLoaded", function () {
    window.fbAsyncInit = function () {
        FB.init({
            xfbml: true,
            version: 'v8.0'
        });
    };

    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    FB.CustomerChat.showDialog();
    FB.CustomerChat.hideDialog();

});

window.onload = function () {
    setTimeout(loadAfterTime, 7000)
};


function loadAfterTime() {
    document.getElementById("fbscripts").click();
    document.getElementById("fbscripts").click();
}
