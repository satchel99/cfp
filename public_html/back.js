var tester = 'I am calling you because you are a registered Unafilliated Voter. (Or A voter with no party)<br>For the first time ever, because of petitions submitted by Pramilla Malick you can vote in the September 13th primary. <br>Do you know about Pramilla Malick who is a candidate for state senate? <br>Pramilla is the Chair of Protect Orange County and has been leading the fight against the CPV power plant for years. <br>She is the only candidate who has and will continue to stand up to the corruption that exists in both parties. <br>She believes corruption is the cause of all major public policy crises of our day. <br>She is also a former small business owner and former union organizer.<br>September 13th is also her birthday and her wish is for all of us to have clean air, clean water,<br> and clean government which is only possible if you vote for her.  Both her Republican opponent and her Democratic primary challenger have tried to stop this primary from happening but <br>Pramilla fought for your right to be a part of the decision process.You have to write her name in, you can find out exactly how at pramilla.com/noparty';

var regular = 'I am calling you because you are a registered Democrat. <br>Did you know there is a primary coming up on Thursday September 13th? It is a Thursday this year and not Tuesday. <br>Do you know about Pramilla Malick who is a Democratic candidate for state senate? <br>Pramilla is the Chair of Protect Orange County and has been leading the fight against the CPV power plant for years. <br>She is the only democratic candidate from Orange County and the only candidate running to shut down the CPV power plant. <br>She believes corruption is the cause of all major public policy crises of our day. <br>She is also a former small business owner and former union organizer.<br>September 13th is also her birthday and her wish is for all of us to have clean air, clean water,<br>and clean government which is only possible if you vote for her.'

function countyChanged(form) {
   

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
                }    
            }
    
    });
    $.ajax("getpoints.php", {
        type: 'POST',
        success: function(response) {
         //document.getElementById("points").innerHTML = response;
    }
            });

    $.ajax("getname.php", {
        type: 'POST',
        success: function(response) {
         document.getElementById("callername").innerHTML = response;
    }
            });



    var logarr;
    var listtype = "";
    

    function getNumber (form) {
    
        var town = form.town.value;
        var party = form.party.value;
        var list = form.list.value;
        console.log(list);
        
        if (list == "absentee") {
        
        listtype = "absentee";
        
        $.ajax("getabsentee.php", {
        type: 'POST',
        success: function(response) {
            
            var temparr = response.split(",");
            logarr = response.split(",");
            document.getElementById("survey").removeAttribute("hidden");
            document.getElementById("votername").innerHTML = temparr[0];
            document.getElementById("survfirstname").innerHTML = temparr[0] + " " + temparr[1];
            document.getElementById("survlastname").innerHTML = temparr[3] + " " + temparr[2];
            document.getElementById("survtown").innerHTML = temparr[4] + " " + temparr[5];
            document.getElementById("survstreetname").innerHTML = temparr[6] + " " + temparr[7];
            document.getElementById("survrealtown").innerHTML = temparr[8];
            document.getElementById("survphonenumber").innerHTML = "<a href = 'tel:" + temparr[9] + "-" + temparr[10] + "'>" + temparr[9] + "-" + temparr[10] + "</a>";
            window.location.href = "#survey";
            
    }
    });
        
        
        }
        
        else {

   listtype = "notabsentee";

    $.ajax("getnumber.php", {
        data: { town : town,
                party:party,
                list:list
              },
        type: 'POST',
        success: function(response) {
            
            console.log(response);
            console.log(town);
            console.log(party);
            var temparr = response.split(",");
            logarr = response.split(",");
            
            
            
            if (party == 'BLK') {
            
            document.getElementById("scriptcore").innerHTML = tester;
            
            }
            
            else {
            document.getElementById("scriptcore").innerHTML = regular;
            }
            
            
            document.getElementById("survey").removeAttribute("hidden");
            document.getElementById("votername").innerHTML = temparr[0];
            document.getElementById("survfirstname").innerHTML = temparr[0] + " " + temparr[1];
            document.getElementById("survlastname").innerHTML = temparr[3] + " " + temparr[2];
            document.getElementById("survtown").innerHTML = temparr[4] + " " + temparr[5];
            document.getElementById("survstreetname").innerHTML = temparr[6] + " " + temparr[7];
            document.getElementById("survrealtown").innerHTML = temparr[8];
            document.getElementById("survphonenumber").innerHTML = "<a href = 'tel:" + temparr[9] + "'>" + temparr[9] + "</a>";
            window.location.href = "#survey";
            
            
          
            
            
            
    }
    });
    
    }
    
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

function logvoter(form) {
        var firstname;
        var lastname;
        var signed;
        var ifnowhy;
        var supportpramilla;
        var email;
        var comments;
        var town = logarr[8];
        var middleinitial =logarr[1];
        var jrsr = logarr[2];
        var streetname = logarr[5];
        var housenumber =logarr[4];
        
        firstname = logarr[0];
        lastname = logarr[3];
        signed = form.signedpramilla.value;
        ifnotwhy = form.ifno.value;
        supportpramilla = form.writepramilla.value;
        email = form.email.value;
        comments = form.comment.value;
        logarr.splice(0,1);

        //alert(firstname,lastname,town,streetname,signed,ifnotwhy,supportpramilla,email,comments);
        
        $.ajax("logthiscall.php", {
        data: { voterfirstname : firstname, voterlastname: lastname, votertown:town, voterstreetname: streetname, votersigned: signed, voterifnot: ifnotwhy, votersupportpramilla: supportpramilla, voteremail: email, volunteercomments: comments, jrsr: jrsr, middleinitial: middleinitial, housenumber:housenumber},
        type: 'POST',
        success: function(response) {
            alert("Thank you");
            window.location.href = "#home";
            var h1 = document.getElementById("survey");   // Get the first <h1> element in the document
            var att = document.createAttribute("hidden");       // Create a "class" attribute
            h1.setAttributeNode(att);                          // Add the class attribute to <h1>
            
        }
    });
    document.getElementById("comment").value="";
    //document.getElementById("email").value="";
     
    

    }
    

 function logabsentee (form) {
 
        var firstname;
        var lastname;
        var signed;
        var ifnowhy;
        var supportpramilla;
        var email;
        var comments;
        var gender = logarr[8].trim();
        var age = logarr[6].trim();
        var jrsr = logarr[2].trim();
        var city = logarr[7].trim();
        var areacode =logarr[9].trim();
        var phone =logarr[10].trim();
        
        //alert(phone);
        //alert("helloyo");
        
        firstname = logarr[0].trim();
        lastname = logarr[3].trim();
        signed = form.signedpramilla.value;
        ifnotwhy = form.ifno.value;
        supportpramilla = form.writepramilla.value;
        email = form.email.value;
        comments = form.comment.value;
        logarr.splice(0,1);

        //alert(firstname,lastname,town,streetname,signed,ifnotwhy,supportpramilla,email,comments);
        
        $.ajax("logabsentee.php", {
        data: { voterfirstname : firstname, voterlastname: lastname, gender:gender, city: city, votersigned: signed, voterifnot: ifnotwhy, votersupportpramilla: supportpramilla, voteremail: email, volunteercomments: comments, phone: phone, age: age, areacode:areacode},
        type: 'POST',
        success: function(response) {
            //alert(response);
            //alert("Thank you");
            window.location.href = "#home";
            var h1 = document.getElementById("survey");   // Get the first <h1> element in the document
            var att = document.createAttribute("hidden");       // Create a "class" attribute
            h1.setAttributeNode(att);                          // Add the class attribute to <h1>
            
        }
    });
    document.getElementById("comment").value="";
    //document.getElementById("email").value="";
     
 
 
 }

 function logcall (form) {
    
    	if (listtype == "absentee") {
    	alert("absentee");
    	logabsentee(form);
    	}
    	
    	else {
        logvoter(form);
        }
        

    }




function dense(form) {
    
   
     var zipcode = form.zipcode.value;
     var party = form.party.value;
    
    //alert(streetname);

    $.ajax("dense.php", {
        data: { zipcode:zipcode,
               party:party
              },
        type: 'POST',
        success: function(response) {
            
            console.log(response);
            document.getElementById("searchtutors").innerHTML = response;
            document.getElementById("tableofdata").removeAttribute("hidden");
            window.location.href = "#votersection";
            
    }
    });
    
}
