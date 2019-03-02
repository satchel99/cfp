function countyChanged(form) {
   
var Delaware = '<select name="town" style = "display:block;width:30%;margin-bottom:30px;border:1px solid #e4e4e4;color:#999999;	padding:10px 18px;background:url(../images/dd-arrow.svg) 97% 50% no-repeat #fff;appearance:none;-o-appearance:none;-moz-appearance:none;-ms-appearance:none;-webkit-appearance:none;cursor:pointer;"><option selected disabled>-- Select Town --</option><option value="Colchester">Colchester</option><option value="Delhi">Delhi</option><option value="Hamden">Hamden</option><option value="Kortright">Kortright</option><option value="Masonville">Masonville</option><option value="Meredith">Meredith</option><option value="Thompkons">Thompkons</option><option value="Walton">Walton</option></select>';

var Orange = '   <select name="town" style = "display:block;width:30%;margin-bottom:30px;border:1px solid #e4e4e4;color:#999999;	padding:10px 18px;background:url(../images/dd-arrow.svg) 97% 50% no-repeat #fff;appearance:none;-o-appearance:none;-moz-appearance:none;-ms-appearance:none;-webkit-appearance:none;cursor:pointer;"> <option selected disabled>-- Select Town --</option> <option value="Deerpark">Deerpark</option><option value="Goshen">Goshen</option><option value="Hamptonburgh">Hamptonburgh</option><option value="Middletown">Middletown</option><option value="Minisink">Minisink</option><option value="Mount Hope”>Mount Hope</option><option value="Portjervis">Portjervis</option><option value="Tuxedo">Tuxedo</option><option value="Wallkill">Wallkill</option><option value="Warwick">Warwick</option><option value="Waywayanda">Waywayanda</option></select>';

var Sullivan = '<select name="town" style = "display:block;width:30%;margin-bottom:30px;border:1px solid #e4e4e4;color:#999999;	padding:10px 18px;background:url(../images/dd-arrow.svg) 97% 50% no-repeat #fff;appearance:none;-o-appearance:none;-moz-appearance:none;-ms-appearance:none;-webkit-appearance:none;cursor:pointer;"><option selected disabled>-- Select Town --</option><option value="Bethel">Bethel</option><option value="Callicoon">Callicoon</option> <option value="Cochecton">Cochecton</option><option value="Delaware">Delaware</option><option value="Fallsburgh">Fallsburgh</option><option value="Forestburgh”>Forestburgh</option><option value="Highland">Highland</option><option value="Liberty">Liberty</option><option value="Lumberland">Lumberland</option><option value="Mamakating">Mamakating</option><option value="Neversink">Neversink</option><option value="Rockland">Rockland</option><option value="Thompson">Thompson</option><option value="Tusten">Tusten</option></select>';
    
var Ulster = '   <select name="town" style = "display:block;width:30%;margin-bottom:30px;border:1px solid #e4e4e4;color:#999999;	padding:10px 18px;background:url(../images/dd-arrow.svg) 97% 50% no-repeat #fff;appearance:none;-o-appearance:none;-moz-appearance:none;-ms-appearance:none;-webkit-appearance:none;cursor:pointer;"><option selected disabled>-- Select Town --</option><option value="Denning">Denning</option><option value="Gardiner">Gardiner</option><option value="New Paltz">New Paltz</option><option value="Rosendale">Rosendale</option><option value="Shawangunk">Shawangunk</option><option value="Wawarsing">Wawarsing</option></select>';
        
    
var all = '<select name="town" style = "display:block;width:30%;margin-bottom:30px;border:1px solid #e4e4e4;color:#999999;	padding:10px 18px;background:url(../images/dd-arrow.svg) 97% 50% no-repeat #fff;appearance:none;-o-appearance:none;-moz-appearance:none;-ms-appearance:none;-webkit-appearance:none;cursor:pointer;"><option selected disabled>-- Select Town --</option>                                    <option value="all">ALL TOWNS</option><option value="Bethel">Bethel</option><option value="Callicoon">Callicoon</option> <option value="Cochecton">Cochecton</option><option value="Delaware">Delaware</option><option value="Fallsburgh">Fallsburgh</option><option value="Forestburgh”>Forestburgh</option><option value="Highland">Highland</option><option value="Liberty">Liberty</option><option value="Lumberland">Lumberland</option><option value="Mamakating">Mamakating</option><option value="Neversink">Neversink</option><option value="Rockland">Rockland</option><option value="Thompson">Thompson</option><option value="Tusten">Tusten</option><option value="Denning">Denning</option><option value="Gardiner">Gardiner</option><option value="New Paltz">New Paltz</option><option value="Rosendale">Rosendale</option><option value="Shawangunk">Shawangunk</option><option value="Wawarsing">Wawarsing</option><option value="Deerpark">Deerpark</option><option value="Goshen">Goshen</option><option value="Hamptonburgh">Hamptonburgh</option><option value="Middletown">Middletown</option><option value="Minisink">Minisink</option><option value="Mount Hope”>Mount Hope</option><option value="Portjervis">Portjervis</option><option value="Tuxedo">Tuxedo</option><option value="Wallkill">Wallkill</option><option value="Warwick">Warwick</option><option value="Waywayanda">Waywayanda</option><option value="Colchester">Colchester</option><option value="Delhi">Delhi</option><option value="Hamden">Hamden</option><option value="Kortright">Kortright</option><option value="Masonville">Masonville</option><option value="Meredith">Meredith</option><option value="Thompkons">Thompkons</option><option value="Walton">Walton</option></select>';
        
var main = '<select name="towns" style = "display:block;width:30%;margin-bottom:30px;border:1px solid #e4e4e4;color:#999999;	padding:10px 18px;background:url(../images/dd-arrow.svg) 97% 50% no-repeat #fff;appearance:none;-o-appearance:none;-moz-appearance:none;-ms-appearance:none;-webkit-appearance:none;cursor:pointer;"><option selected disabled>-- Select County --</option><option value="all">ALL</option><option value="WESTBROOKVILLE">WESTBROOKVILLE</option><option value="CUDDEBACKVILLE">CUDDEBACKVILLE</option><option value="HUGUENOT">HUGUENOT</option><option value="GODEFFROY">GODEFFROY</option><option value="SPARROW BUSH">SPARROW BUSH</option><option value="PORT JERVIS">PORT JERVIS</option><option value="GOSHEN">GOSHEN</option><option value="FLORIDA">FLORIDA</option><option value="NEW HAMPTON">NEW HAMPTON</option><option value="CAMPBELL HALL">CAMPBELL HALL</option><option value="CHESTER">CHESTER</option><option value="MIDDLETOWN">MIDDLETOWN</option><option value="WESTTOWN">WESTTOWN</option><option value="MONTGOMERY">MONTGOMERY</option><option value="WASHINGTONVILLE">WASHINGTONVILLE</option><option value="ROCK TAVERN">ROCK TAVERN</option> <option value="OTISVILLE">OTISVILLE</option><option value="TUXEDO">TUXEDO</option><option value="TUXEDO PARK">TUXEDO PARK</option> <option value="SOUTHFIELDS">SOUTHFIELDS</option> <option value="PINE ISLAND">PINE ISLAND</option><option value="WARWICK">WARWICK</option><option value="GREENWOOD LAKE">GREENWOOD LAKE</option><option value="MONROE">MONROE</option> <option value="STERLING FOREST">STERLING FOREST</option> <option value="SLATE HILL">SLATE HILL</option><option value="NEW HAMPTON">NEW HAMPTON</option><option value="CIRCLEVILLE">CIRCLEVILLE</option><option value="BLOOMINGBURG">BLOOMINGBURG</option><option value="HOWELLS">HOWELLS</option> </select>';
        var selectedCounty = form.county.value;
        if (selectedCounty === "all") {
                        document.getElementById("townform").innerHTML = '';

        }
         else if (selectedCounty === "main") {
            document.getElementById("townform").innerHTML = main;
        }
        
        

        
    }
 $.ajax("getusername.php", {
        type: 'POST',
        success: function(response) {
            if (response.indexOf("Undefined index") !== -1 ) {
                    window.location.href = "login.html";
                        }
                   
            else {
                    document.getElementById("username").innerHTML = response;
                    $.ajax("uselog.php", {
                       type: 'POST',
                       success: function(response) {
    
                       }});
                }    
            }
    
    });
    $.ajax("getpoints.php", {
        type: 'POST',
        success: function(response) {
         document.getElementById("points").innerHTML = response;
    }
            });



    var logarr = [];

    function getVoters (form) {
    
        var firstname = form.firstname.value
        var lastname = form.lastname.value
    $.ajax("getvoters.php", {
        data: { firstname : firstname,
                lastname:lastname
              },
        type: 'POST',
        success: function(response) {
            console.log(response);
            var arrpart1 = response.split("?");
            var firststring = arrpart1[0];
            var secondstring = arrpart1[1];
            walkarr = secondstring.split("|");
            document.getElementById("searchtutors").innerHTML = firststring;
            document.getElementById("tableofdata").removeAttribute("hidden");
            window.location.href = "#votersection"
            
    }
    });
    
    
    }


    function logvoter(form) {
        var firstname;
        var lastname;
        var signed;
        var ifnowhy;
        var supportpramilla;
        var email;
        var comments;
        
        var town = logarr[0][8];
        var middleinitial =logarr[0][1];
        var jrsr = logarr[0][2];
        var streetname = logarr[0][5];
        var housenumber =logarr[0][4];
        
        firstname = logarr[0][0];
        lastname = logarr[0][3];

        
        signed = form.signedpramilla.value;
        //alert(signed);
        //alert(logarr);
        ifnotwhy = form.ifno.value;
        supportpramilla = form.writepramilla.value;
        email = form.email.value;
        comments = form.comment.value;
        
        //alert(firstname,lastname,town,streetname,signed,ifnotwhy,supportpramilla,email,comments);
        
        logarr.splice(0,1);
        console.log("should be empty now");
        console.log(logarr);
        
        $.ajax("logvoters.php", {
        data: { voterfirstname : firstname, voterlastname: lastname, votertown:town, voterstreetname: streetname, votersigned: signed, voterifnot: ifnotwhy, votersupportpramilla: supportpramilla, voteremail: email, volunteercomments: comments, jrsr: jrsr, middleinitial: middleinitial, housenumber:housenumber},
        type: 'POST',
        success: function(response) {
            //alert(response);
        }
    });
    document.getElementById("comment").value="";
    //document.getElementById("email").value="";
     
        $.ajax("getpoints.php", {
        type: 'POST',
        success: function(response) {
         document.getElementById("points").innerHTML = response;
    }
            });
    
document.getElementById("survey").setAttributeNode(document.createAttribute("hidden"))
document.getElementById("tableofdata").setAttributeNode(document.createAttribute("hidden"))

    window.location.href = "#home";
    
    alert("Thank you!");
    }
    
    
    function logcall (form) {
    var name;
    var town;
    var phone;
    var info = document.getElementById("info").innerHTML;
    var writepramilla = form.writepramilla.value;
	var email = form.email.value;
	var comments = form.comment.value;

    alert(info);
    var x = 0;
    for (x; x < info.length; x++) {
        if(info.substring(x,x+4) === "<br>") {
            name = info.substring(0,x);
            break;
        }
    }
    alert(name);
    x+=4;
    var y = x;
    for (x; x < info.length; x++) {
        if(info.substring(x,x+4) === "<br>") {
            town = info.substring(y,x);
            break;
        }
    }
    alert(town);
    x+=17;
    var z = x;
    for (x; x < info.length; x++) {
        if(info.substring(x,x+2) === '">') {
            phone = info.substring(z,x);
            break;
        }
    }
    
    alert(phone);
    //alert(phone);
    //alert(document.getElementById("info").innerHTML);
    $.ajax("logcalls.php", {
        data: { votername : name, voterphone: phone, votertown:town, voterwillwriteus: writepramilla, voteremail: email, callercomments: comments},
        type: 'POST'
    });
    document.getElementById("comment").value="";
    //document.getElementById("email").value="";
     
        $.ajax("getpoints.php", {
        type: 'POST',
        success: function(response) {
         document.getElementById("points").innerHTML = response;
    }
            });
        
    window.location.href = "#home";

    }

function breakdown(dbresults) {
      var name;
    var town;
    var phone;
    var info = dbresults;

  //  alert(info);
    var x = 0;
    for (x; x < info.length; x++) {
        if(info.substring(x,x+4) === "<br>") {
            name = info.substring(0,x);
            break;
        }
    }
   // alert(name);
    x+=4;
    var y = x;
    for (x; x < info.length; x++) {
        if(info.substring(x,x+4) === "<br>") {
            town = info.substring(y,x);
            break;
        }
    }
   // alert(town);
    x+=17;
    var z = x;
    for (x; x < info.length; x++) {
        if(info.substring(x,x+2) === '">') {
            phone = info.substring(z,x);
            break;
        }
    }
    
    alert(phone);
    
    var results = [];
    results.push(name);
    results.push(town);
    results.push(phone);
    
    return results;

  
  }

var walkarr = [];
var counter = 0;

function startWalk(form) {
    var zipcode = form.zipcode.value;
    var target = form.target.value
    var street = form.street.value;
    var party = form.party.value;


    $.ajax("walk.php", {
        type: 'POST',
        data: {zipcode:zipcode,target:target, streetname:street, party:party},
        success: function(response) {
          if (response.trim() == "0 results") {
                alert("entry not found, try again");
            }
        
        else {
            walkarr = response.split("|");
            var temparr = walkarr[0].split(",");
            document.getElementById("survfirstname").innerHTML = temparr[0] + " " + temparr[1];
            document.getElementById("survlastname").innerHTML = temparr[3] + " " + temparr[2];
            document.getElementById("survtown").innerHTML = temparr[4] + " " + temparr[5];
            document.getElementById("survstreetname").innerHTML = temparr[6] + " " + temparr[7] + " " + temparr[10];
            document.getElementById("survrealtown").innerHTML = temparr[8];
            document.getElementById("survparty").innerHTML = temparr[11];

            showWalk();

            document.getElementById("survey").removeAttribute("hidden"); 
            window.location.href = "#survey";
      }
        }
        
        
        
            });
    
    
}

function nextStep(form) {
    //alert("thank you!");
    var fakearr = walkarr[counter].split(",");
    logarr.push(fakearr);
    logvoter(form);
    
    if (counter < walkarr.length - 2) {
    counter++;
    }
    else {
        alert("sorry, no more houses after this!");
    }
    
   
    var temparr = walkarr[counter].split(",");
    
            document.getElementById("survey").removeAttribute("hidden");
            document.getElementById("survfirstname").innerHTML = temparr[0] + " " + temparr[1];
            document.getElementById("survlastname").innerHTML = temparr[3] + " " + temparr[2];
            document.getElementById("survtown").innerHTML = temparr[4] + " " + temparr[5];
            document.getElementById("survstreetname").innerHTML = temparr[6] + " " + temparr[7] + " " + temparr[10];
            document.getElementById("survrealtown").innerHTML = temparr[8];
            document.getElementById("survparty").innerHTML = temparr[11];

            window.location.href = "#survey";
    
}




function showWalk() {
    var rs = "";
    for (var i = 0; i < walkarr.length - 1; i++) {
    	rs = rs + "<font color = 'red'> voter number "  + (i + 1) + "</font>";
        var temparr = walkarr[i].split(",");
        rs = rs + "<font color = 'purple'> " + temparr[11] + "</font>" + " <a onclick = 'takemethere(" + i + ")'>" + temparr[0] + " " + temparr[3] + "</a>" + " House Number is: <font color = 'green'> " + temparr[4] + " " + temparr[10] + "</font>";
         if (temparr[9].length > 0) {
           rs = rs + "<br> <font color = 'orange'>Phone Number is :</font> " + "<a href = 'tel:" + temparr[9] + "'>" + temparr[9] + "</a>";
        }
        else {
        console.log("false");
        }
        rs = rs + "<br><br>";
        console.log(temparr[9]);
       
    }
    //alert(rs);
    document.getElementById("modalbody").innerHTML = rs;
    return rs;}

function setupSurvey(str) {
    var temparr = str.split(",");
    document.getElementById("survfirstname").innerHTML = temparr[0] + " " + temparr[1];
    document.getElementById("survlastname").innerHTML = temparr[3] + " " + temparr[2];
    document.getElementById("survtown").innerHTML = temparr[4] + " " + temparr[5];
    document.getElementById("survstreetname").innerHTML = temparr[6] + " " + temparr[7];
    document.getElementById("survrealtown").innerHTML = temparr[8];
    logarr.push(temparr);
    //alert(logarr);

    
}

function searchByAddress(form) {
    
    var housenumber = form.housenumber.value;
    var zipcode = form.zipcode.value;
    var streetname = form.streetname.value;
    
    //alert(streetname);

    $.ajax("byaddress.php", {
        data: { housenumber : housenumber,
                zipcode:zipcode,
                streetname: streetname
              },
        type: 'POST',
        success: function(response) {
            
            console.log(response);
            var arrpart1 = response.split("?");
            var firststring = arrpart1[0];
            var secondstring = arrpart1[1];
            walkarr = secondstring.split("|");
            document.getElementById("searchtutors").innerHTML = firststring;
            document.getElementById("tableofdata").removeAttribute("hidden");
            window.location.href = "#votersection"
            
    }
    });
    
}



$.ajax("test.php", {
        type: 'POST',
        success: function(response) {
        console.log("length is " + response.length);
        
            if (response.length < 3 ) {
                    window.location.href = "http://callforpramilla.com/login.html";
                    console.log("hi");
                    
                        }
                   
              
            }
    
    });


function takemethere(pos) {
    var temparr = walkarr[pos].split(",");
    document.getElementById("survey").removeAttribute("hidden");
    document.getElementById("survfirstname").innerHTML = temparr[0] + " " + temparr[1];
    document.getElementById("survlastname").innerHTML = temparr[3] + " " + temparr[2];
    document.getElementById("survtown").innerHTML = temparr[4] + " " + temparr[5];
    document.getElementById("survstreetname").innerHTML = temparr[6] + " " + temparr[7] + " " + temparr[10];
    document.getElementById("survrealtown").innerHTML = temparr[8];
    counter = pos;
    document.getElementById("closebutton").click();
    window.location.href = "#survey";
    
}