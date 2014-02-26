    
    var dc=0;
    document.addEventListener("deviceready", onDeviceReady, false);
    document.addEventListener("online", onOnline, false);
    document.addEventListener("offline", onOffline, false);
    document.addEventListener("backbutton", onBackKeyDown, false);




    function onDeviceReady() {
        
        //navigator.geolocation.getCurrentPosition(onSuccess, onError);
        navigator.geolocation.getCurrentPosition(onSuccess, onError);
   
        window.setInterval(function(){
        navigator.geolocation.getCurrentPosition(onSuccess, onError);
        }, 300000); 
    }    

        
   function onBackKeyDown(e){
    e.preventDefault();
   }
    

    

    function onOnline() {
        $('#gps_tracker_status_off').slideUp('slow');
        $('#cause').slideUp('slow');
        $('#gps_tracker_status_on').slideDown('slow');
        $('#geolocation').slideDown('slow');
        
        
        //var options={ maximumAge: 5000, timeout: 30000, enableHighAccuracy: true };
        if (dc === "offtoon")
        {
        function onDeviceReady() {
        //navigator.geolocation.getCurrentPosition(onSuccess, onError);
        navigator.geolocation.getCurrentPosition(onSuccess, onError);
        
   
        window.setInterval(function(){
        navigator.geolocation.getCurrentPosition(onSuccess, onError);
        }, 300000);
          }   
      }
    }



    function onOffline() {
    // Handle the offline event
        if(isLogin === "valide")
        {
        $('#user_login_panel').slideUp('slow'); 
        $('#user_main_panel').slideDown('slow'); 
        }
        $('#gps_tracker_status_on').slideUp('slow');
        $('#geolocation').slideUp('slow');
        $('#gps_tracker_status_off').slideDown('slow');
        $('#cause').slideDown('slow');
        dc="offtoon";
        
    }
   
    

    

    



    function onSuccess(position) {

                var isLogin = window.localStorage.getItem("key");
                var userid= window.localStorage.getItem("userid");
                
                if(isLogin === "valide")
                {

                $('#user_login_panel').slideUp('slow'); 
                $('#user_main_panel').slideDown('slow'); 
                $.ajax({

                    type  : "POST",
                    url : "http://phonegap.sustcse10.net/gps_tracker/update.php",
                    data: {
                            userid : userid,
                            latitude : position.coords.latitude,
                            longitude : position.coords.longitude 
                          },
                    });
               

                var element = document.getElementById('geolocation');
                element.innerHTML = 'Latitude: '           + position.coords.latitude              + '<br />' +
                                    'Longitude: '          + position.coords.longitude             + '<br />' +
                                    'Accuracy: '           + position.coords.accuracy              + '<br />' +          
                                    'Timestamp: '          + position.timestamp                    + '<br />';
                $('#gps_tracker_status_off').slideUp('slow');
                $('#cause').slideUp('slow');
                $('#gps_tracker_status_on').slideDown('slow');
                $('#geolocation').slideDown('slow');

                }
                else{

                }
                //sending the data to remote mysql database
                

            }

            // onError Callback receives a PositionError object
            //
            
            function onError(error) {
               if(isLogin === "valide")
                {
                $('#gps_tracker_status_on').slideUp('slow');
                $('#geolocation').slideUp('slow');
                $('#gps_tracker_status_off').slideDown('slow');
                $('#cause').slideDown('slow');
                }
            }

            


    
