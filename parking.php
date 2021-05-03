<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>One-Day</title>  
</head>
<body class="wrap">

    <script src="index.js"></script>
    <div class="headerBar">
        <img src="img/logo.png" alt="">
        <a href="./Profile.html">
            <img src="img/user.png" class="user" alt="">
          </a>
    </div>
    <div class="blur">
        <br> <br> 
         
        <br> <br>
        <div id="search-form">
            <div id="header">
            <h1>BOOK YOUR PARKING TODAY!</h1>
            </div>
            <section>
            <div class="flight" id="flightbox">
                <form id="flight-form" action="./parkingResults.html">

                <div id="flight-depart">
                    <div class="info-box">
                        <label for="">LOT #</label>
                            <select>
                                <option value="0">Select Lot:</option>
                                <option value="1">Lot 1</option>
                                <option value="2">Lot 2</option>
                                <option value="3">Lot 3</option>
                              
                            </select>

                    </div>
                    <div class="info-box" id="arrive-box">
                        <label for="">HOURS</label>
                            <select>
                                <option value="0">Select Hours:</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="6">6</option>
                                <option value="12">12</option>
                                <option value="24">24</option>
                            </select>
                    </div>
                </div>
                
                <div id="flight-dates">
                    <div class="info-box">
                        <label for="">LEAVING ON</label>
                        <input class="calendar" type="date" >
                    </div>
                    <div class="info-box start" >
                        <label for="">START TIME</label>
                            <select>
                                <option value="0">Select Time:</option>
                                <option value="1">1:00 AM</option>
                                <option value="2">2:00 AM</option>
                                <option value="3">3:00 AM</option>
                                <option value="4">4:00 AM</option>
                                <option value="5">5:00 AM</option>
                                <option value="6">6:00 AM</option>
                                <option value="7">7:00 AM</option>
                                <option value="8">8:00 AM</option>
                                <option value="9">9:00 AM</option>
                                <option value="10">10:00 AM</option>
                                <option value="11">11:00 AM</option>
                                <option value="12">12:00 PM</option>
                                <option value="1PM">1:00 PM</option>
                                <option value="2PM">2:00 PM</option>
                                <option value="3PM">3:00 PM</option>
                                <option value="4PM">4:00 PM</option>
                                <option value="5PM">5:00 PM</option>
                                <option value="6PM">6:00 PM</option>
                                <option value="7PM">7:00 PM</option>
                                <option value="8PM">8:00 PM</option>
                                <option value="9PM">9:00 PM</option>
                                <option value="10PM">10:00 PM</option>
                                <option value="11PM">11:00 PM</option>
                            </select>
                    </div>
                
                </div>

            <a href="./flightResults.html">
                <div id="flight-search" >
                    <div class="info-box" ></div>
                        <input type="submit" id="search-flight" value="FIND YOUR SPOT" onclick="location.replace('./flightResults.html'); "/>
                    </div>
                </div>
            </a>
                
            </form> 
            </div>
            </section>
        </div>

     
           
    
</body>
</html>