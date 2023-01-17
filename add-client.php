<?php include 'navbar.php'; 
$conn = new mysqli("localhost", "root", "", "infits");

if($conn->connect_error){
    die("Connection failed :" . $conn->connect_error);
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Infits - Add Client</title>
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
<style>
    
    .heading p {
        font-family: 'NATS';
        font-style: normal;
        font-weight: 400;
        padding-left: 100px;
        padding-top: 12px;
        font-size: 44px;
        line-height: 70px;
        color: #000000;
    }
    
    p { 
        margin-top: 0px;
        margin-bottom: 1rem;
    }

    .box {
        display: flex;
        top: 0px;
        padding: 5px 30px;
        margin-top: 0px;
        align-items:center;
        justify-content: center;
    }
    .box p{
        /* position: relative; */
        font-family: 'NATS';
        font-style: normal;
        font-weight: 400;
        font-size: 30px;
        line-height: 63px;
    }
    .box a{
        text-decoration: none;
        color: #000000;
    }
    
    .forms{
        margin-top:150px;
        margin-left:330px;
    }
    .forms .input-box{
        height: 70px; 
        width: 606px;   
        background: #FFFFFF;
        box-shadow: 0px 5px 5px #FFFFFF ;  /*0px 4px 4px rgba(0, 0, 0, 0.25);*/
        border-radius: 15px;
        font-family: 'NATS';
        font-style: normal;
        padding-left:40px;
        font-weight: 400;
        font-size: 27px;
        line-height: 57px;
        color: #D7D7D7;
    }
    .forms .buttons{
        margin-top: 30px;
        width: 606px;
        height: 50px;
        background: #9E5EF4;
        color:#FFFFFF;
        font-family: 'NATS';
        font-size: 27px;
        font-style: normal;
        border-radius: 9.5px;
    }
    .forms .ref-code{
        box-sizing: border-box;
        margin-top: 25px;
        width: 606px;   
        height: 50px;
        font-family: 'NATS';
        font-style: normal;
        font-size: 27px;
        background: #FFFFFF;
        border: 1px solid #9E5EF4;
        border-radius: 9.1346px;
    }
    .box .send{
        color : #000000;
        margin-right: 450px;
    }

</style>
<body>
    <div class = "container-sm">
        <div class = "heading">
            <p> Add a Client </p>
        </div>
        <div class = "box">
            <a href ="#" class = "send"><p> Send Requests </p></a>
            <a href ="#" class = "pending"><p> Pending Requests </p></a>
        </div>
        <div class = "forms">
            <input class ="input-box" type="text" placeholder = "Enter client code here"></input>
            <button class ="buttons" type="submit" href ="#"> Send Request </button>
            <button class ="ref-code" type="submit" href ="#"> Share Referral Code </button>
        </div>
    </div>
</body>
</html>

<?php 
