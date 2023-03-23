<!DOCTYPE html>
<?php include ('config.php');
    $sql = "SELECT * FROM `sleeptracker`;";
    $mysql = mysqli_query($conn, $sql);
    debug_to_console("Test");


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<style>
       .heading {
    margin-left: 3%;
}
    .heading p {
    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
    font-size: 44px;
    line-height: 70px;
}
    .tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}
.tab_button_side{
   border-radius: 12px;
}
/* Style the buttons that are used to open the tab content */
.tab {
  overflow: hidden;
  /* border: 1px solid #ccc;
  background-color: #f1f1f1; */
  border: 1px solid #F8F5F5;
  width: 365px;
    height: 27px;
    margin-left: 3%;
    border-top-left-radius: 1em!important;
    border-bottom-left-radius: 1em!important;
    border-top-right-radius: 1em!important;
      border-bottom-right-radius: 1em!important;
    }
.tab button {
    background: #FFFFFF;
    border: 1px solid #FCFBFB;
    border-radius: 0px;
    width: 85.35px;
height: 24px;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  /* padding: 14px 16px; */
  transition: 0.3s;
  font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 13px;
line-height: 27px;

color: #4D4D4D;
}
.graph_button_side{
    border: 1px solid #F8F5F5;
  border-top-right-radius: 1em!important;
  border-bottom-right-radius: 1em!important;
}
.graph_button_left{
  width: 106.69px !important;
border-top-left-radius: 1em!important;
border-bottom-left-radius: 1em!important;
}
/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #6844E2;
}
.tab button.active {
  background-color: #6844E2;
  color: white !important;
}

/* Style the tab content */
.tab-content {
  display: none;
  padding: 6px 12px;
  /* border: 1px solid #ccc; */
  border-top: none;
}

.content{
    padding:10px;
   
}
.top_bar{
    display: flex;
   flex-wrap:wrap;
 
 
}
.client-card {
        width: 70px;
        height: auto;
        margin: 10px;
        text-align: center;
        font-size: 20px;
        border-radius: 14px;
        padding: 5px;
}

.client-card p {
    font-size: 15px;
}

.client-card i {
    font-size: 15px;
}
.client-sleep{
    background: linear-gradient(216.13deg, #7D5DE6 9.2%, #633FDD 91.57%);
    border: 1px solid #7D5DE6;
    border-radius: 10px;
    margin: 10px 0 0 0;
    width: 97px;
    height: 114px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 15px;
}
.client-sleep p{
    margin-bottom: 0;
    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
    font-size: 19px;
    line-height: 120%;
    /* or 23px */

    text-align: center;

    color: #FFFFFF;
}
/* sleep */
.week-container{
    margin: 3%;
}
.week-container p{
    font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 25px;
line-height: 30px;
/* identical to box height */
color: #000000;
}
.flex-box {
    display: flex;
    gap: 25px;
    flex-wrap: wrap;
    padding: 5px 30px;
}
.sleep-holder-box {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 311px;
    height: 67px;
    padding: 20px;
    background: linear-gradient(180deg, rgba(235, 203, 196, 0.14) 0%, rgba(104, 68, 226, 0.2) 100%, rgba(227, 137, 160, 0.2) 100%);
    border-radius: 10px;
}
.sleep-holder-box p{
    margin-bottom: 0;
}
.left,
.right{
    display: flex;
    gap: 20px;
    /* flex-direction: row; */
    /* flex-direction: column; */
}
.left span{
    font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 17px;
/* identical to box height */


color: #000;

}
.right p{
    font-size: 20px;
    line-height: 42px;
}
</style>
<body>
<?php include 'navbar.php' ?>
    <div class="content">
        <!-- tab_links -->
        
        <div class="row">
            <div class="col-sm-10">
                <div class="heading">
                    <p>Past Activities</p>
                </div>
                <div class="tab">
                    <button class="tablinks graph_button_left " onclick="openCity(event, 'London')">Custom Dates</button>
                    <button class="tablinks" onclick="openCity(event, 'Year')">Year</button>
                    <button class="tablinks" onclick="openCity(event, 'Month')">Month </button>
                    <button id="temp" class="tablinks graph_button_side" class="tab_button_side" onclick="openCity(event, 'Week')">Week</button>
                </div>
            </div>
            <div class="col-sm-2">
                    <!-- metric_button -->
                <div class="client-card client-sleep " style="color:#7D5DE6; border: 1px solid #7D5DE6;">
                    <img src="images/sleep_card_icon.svg" alt="sleep icon">
                    <p>Sleep</p>
                </div>
            </div>
        </div>
            
            
    
        <!-- past_activities -->
        <div class="graph">

         <!-- Tab content -->
                                <div id="London" id="defaultOpen" class="tab-content">
                                
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
                                <canvas id="myChartwater"></canvas>
                                </div>

                                <div id="Year" class="tab-content">
                                    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
                                    <canvas id="myChartYearly"></canvas>
                                </div>

                                <div id="Month" class="tab-content">
                                    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
                                    <canvas id="myChartMonthly"></canvas>
                                </div>
                                
                                <div id="Week" class="tab-content">
                                    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
                                    <div class="row">
                                        <div class="col">
                                        <?php for ($i=0; $i < 5; $i++) { ?>
                                            <div class="week-container">
                                                <?php if ($i == 0) { ?>
                    
                                                    <p class="date">19 Jun 2021</p>
                                                <?php }else if($i==1){ ?>
                                                    <p class="date">18 Jun 2021</p>
                                                <?php }else if ($i==2){?>
                                                    <p class="date">17 Jun 2021</p>
                                                <?php }else if ($i==3){?>
                                                    <p class="date">16 Jun 2021</p>
                                                <?php }else{?>
                                                    <p class="date">15 Jun 2021</p>
                                                <?php } ?>
                                                <div class="flex-box">
                                                <?php for ($j=0; $j < 3; $j++) { ?>
                                                    <div class="sleep-holder-box">
                                                        <?php if($j==0){ ?>
                                                        <div class="left">
                                                            <img src="images/sleep_moon_icon.svg" alt="">
                                                            <div class="sleep-info">
                                                                <p>Light Sleep</p>
                                                                <span>11.10 a.m.</span>
                                                            </div>
                                                        </div>
                                                        <div class="right">
                                                            <img src="images/sleep_moon_colored.svg" alt="">
                                                            <p class="sleep-hours">7h 30m</p>
                                                        </div>
                                                        <?php }else if($j==1){ ?>
                                                            <div class="left">
                                                                <img src="images/sleep_moon_icon.svg" alt="">
                                                                <div class="sleep-info">
                                                                    <p>Deep Sleep</p>
                                                                    <span>11.10 a.m.</span>
                                                                </div>
                                                            </div>
                                                            <div class="right">
                                                                <img src="images/sleep_moon_colored.svg" alt="">
                                                                <p class="sleep-hours">2h 2m</p>
                                                        </div>
                                                        <?php }else{ ?>
                                                            <div class="left">
                                                                <img src="images/sleep_moon_icon.svg" alt="">
                                                                <div class="sleep-info">
                                                                    <p>Awake</p>
                                                                    <span>6.55 p.m.</span>
                                                                </div>
                                                            </div>
                                                            <div class="right">
                                                                <img src="images/sleep_moon_colored.svg" alt="">
                                                                <p class="sleep-hours">15m</p>
                                                            </div>
                                                        <?php } ?>    
                                                    </div>
                                                <?php } ?> <!-- end of for loop -->
                                                </div>
                                            </div>
                                        <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                       <script>
                                            function openCity(evt, cityName) {
                                                /* Declare all variables */
                                                var i, tabcontent, tablinks;
                    
                                                /* // Get all elements with class="tab-content" and hide them */
                                                tabcontent = document.getElementsByClassName("tab-content");
                                                for (i = 0; i < tabcontent.length; i++) {
                                                    tabcontent[i].style.display = "none";
                                                }
                    
                                                /* // Get all elements with class="tablinks" and remove the class "active" */
                                                tablinks = document.getElementsByClassName("tablinks");
                                                for (i = 0; i < tablinks.length; i++) {
                                                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                                                }
                    
                                                /* // Show the current tab, and add an "active" class to the button that opened the tab */
                                                document.getElementById(cityName).style.display = "block";
                                                evt.currentTarget.className += " active";
                                            }
                    
                                            /* // Get the element with id="defaultOpen" and click on it */
                                            document.getElementById("defaultOpen").click();
                                            // document.getElementById("temp").click();
                                       </script> 
            </div>
        </div>
</body>
</html>
