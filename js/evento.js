    //Browser Support Code
    function ajaxFunction(){
        var ajaxRequest;  // The variable that makes Ajax possible!
        try{
            // Opera 8.0+, Firefox, Safari
            ajaxRequest = new XMLHttpRequest();
        }

        catch (e){
            // Internet Explorer Browsers
            try{
                ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
            }

            catch (e) {
                try{
                    ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                }

                catch (e){
                    // Something went wrong
                    alert("Your browser broke!");
                    return false;
                }
            }
        }

        var posx1 = $('#pos').html();
        var posx2 = $('#pos2').html();
        var idx1 = $('#id').html();
        var votox1 = $('#num').html();
        var idx2= $('#id2').html();
        var votox2 =  $('#num2').html();

        var pos = parseInt(posx1);
        var pos2 = parseInt(posx2);
        var id = parseInt(idx1);
        var id2 = parseInt(idx2);
        var voto = parseInt(votox1);
        var voto2 = parseInt(votox2);

        var esperado = expected(voto,voto2);
        var esperado2 = expected(voto2,voto)
        var ganador = pos + win(voto,esperado,24);
        var perdedor = pos2 + loss(voto2,esperado2,24);
        var queryString = "?id=" + id ;
        queryString +=  "&id2=" + id2;
        queryString +=  "&num=" + voto;
        queryString +=  "&pganador=" + ganador;
        queryString +=  "&pperdedor=" + perdedor;
        ajaxRequest.open("GET", "contar.php" + queryString, true);
        ajaxRequest.send(null);
        ajaxget2();
    }
//-->

//Browser Support Code
function ajaxFunction2(){
    var ajaxRequest;  // The variable that makes Ajax possible!
    try{
        // Opera 8.0+, Firefox, Safari
        ajaxRequest = new XMLHttpRequest();
    }

    catch (e){
        // Internet Explorer Browsers
        try{
            ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
        }

        catch (e) {
            try{
                ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
            }

            catch (e){
                // Something went wrong
                alert("Your browser broke!");
                return false;
            }
        }
    }
    var posx2 = $('#pos2').html();
    var posx1 = $('#pos').html();
    var idx1 = $('#id').html();
    var votox1 = $('#num').html();
    var idx2= $('#id2').html();
    var votox2 =  $('#num2').html();

    var pos = parseInt(posx1);
    var pos2 = parseInt(posx2);
    var id = parseInt(idx1);
    var id2 = parseInt(idx2);
    var voto = parseInt(votox1);
    var voto2 = parseInt(votox2);

    var esperado = expected(voto,voto2);
    var esperado2 = expected(voto2,voto)
    var ganador = pos2 + win(voto,esperado,24);
    var perdedor =pos + loss(voto2,esperado2,24);
    var queryString = "?id=" + id2 ;
    queryString +=  "&id2=" + id;
    queryString +=  "&pganador=" + ganador;
    queryString +=  "&pperdedor=" + perdedor;
    queryString +=  "&num=" + voto2;

    ajaxRequest.open("GET", "contar.php" + queryString, true);
    ajaxRequest.send(null);
    ajaxget1();
}
//-->
function ajaxget1(){
    var conexion;
    if (window.XMLHttpRequest)
    {
        conexion = new XMLHttpRequest();
    }
    else
    {
        conexion = new ActiveXObject("Microsoft.XMLHTTP");
    }
    conexion.onreadystatechange=function()
    {
        if(conexion.readyState==4 && conexion.status==200){
            document.getElementById("u1").innerHTML=conexion.responseText;
        }
    }
    conexion.open("GET","actual.php",true);
    conexion.send();
}

function ajaxget2(){
    var conexion;
    if (window.XMLHttpRequest)
    {
        conexion = new XMLHttpRequest();
    }
    else
    {
        conexion = new ActiveXObject("Microsoft.XMLHTTP");
    }
    conexion.onreadystatechange=function()
    {
        if(conexion.readyState==4 && conexion.status==200){
            document.getElementById("u2").innerHTML=conexion.responseText;
        }
    }
    conexion.open("GET","actual2.php",true);
    conexion.send();
}

function expected($Rb, $Ra) {
    return 1/(1 + Math.pow(10, ($Rb-$Ra)/400));
}
// Calculate the new winnner score
function win($vote, $expected, $k) {
    return $vote + $k * (1-$expected);
}
// Calculate the new loser score
function loss($vote, $expected, $k) {
    return $vote + $k * (0-$expected);
}

function x() {
    var count = 0;

    $('.container').click(function () {
        count += 1;

        if (count == 10) {
            ajaxget1();
            ajaxget2();
            Materialize.toast('Tranquilo', 3000);
            count = 0;
        }
    });
}

x();