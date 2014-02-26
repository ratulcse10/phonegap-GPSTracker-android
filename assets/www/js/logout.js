$("#logoutButton").click (function (event)
{
            alert ("You have logged out"); 
            $('#user_main_panel').slideUp('slow');
            $('#user_login_panel').slideDown('slow');
            device.exitApp();
});