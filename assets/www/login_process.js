$("#loginButton").click (function (event)
{
              
               $('#loginButton').prev('span').find('span.ui-btn-text').text("Processing...");   
                $( "[type='submit']" ).button( "disable" );
                
                var a=  $("#userid").val();
                var b=  $("#mobile").val();
                if (!a || !b){
                    $('#loginButton').prev('span').find('span.ui-btn-text').text("Login");   
                 $( "[type='submit']" ).button( "enable" );
                    alert("Please Fill up All Fields !!");
                    return false;
                    
                }
                else{


                	$.ajax({
                    type  : "POST",
                    url : "http://phonegap.sustcse10.net/gps_tracker/login_check.php",
                    data  : $("#userLoginForm").serialize(),
                    }).done(function(data) {
                
                       for(var i in data)
                        {
                         var row = data[i];

                        }
                        if (row == "done"){
                            var userID=$("#userid").val();
                            document.addEventListener("deviceready", onDeviceReady, false);
                             function onDeviceReady() {
                                window.localStorage.setItem("key", "valide");
                                window.localStorage.setItem("userid", userID);

                            }

                           
                            $('#loginButton').prev('span').find('span.ui-btn-text').text("Login Successfull..."); 
                            $( "[type='submit']" ).button( "enable" );
                            $('#loginButton').prev('span').find('span.ui-btn-text').text("Login");
                            $('#user_login_panel').slideUp('slow'); 
                            $('#user_main_panel').slideDown('slow'); 
                             
                        }
                        else {
                            alert("Wrong UserID/Password !!");
                            $('#loginButton').prev('span').find('span.ui-btn-text').text("Login");   
                            $( "[type='submit']" ).button( "enable" );
                        }

                    }).error(function() {
                    $('#loginButton').prev('span').find('span.ui-btn-text').text("Login");   
                    $( "[type='submit']" ).button( "enable" );
                      alert ('No Server Response');
                    });
                    evt.preventDefault();
                }
});