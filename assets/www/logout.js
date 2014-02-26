$("#logoutButton").click (function (event)
{
            document.addEventListener("deviceready", onDeviceReady, false);
                             function onDeviceReady() {
                              window.localStorage.clear();
                                // localStorage is now empty
              }
            alert ("You have logged out"); 
            $('#user_main_panel').slideUp('slow');
            $('#user_login_panel').slideDown('slow');
});