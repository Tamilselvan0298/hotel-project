<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOKING</title>
    <style>
        body{
            background-image: url(pics/bg3.jpg);
            background-position:center;
            background-size: cover;
            background-repeat: no-repeat;
            width: 100%;
            height: 100%;
            overflow-x: hidden;
            
        }
        .container{
            position: relative;
            left: 400px;
            top:0px;
            border:1px solid black;
            backdrop-filter: blur(50px) brightness(80%);
            width: 500px;
            height:620px;
            font: bold;
            line-height: 22px;
            padding-left: 10px;
            margin-top: 20px;
        }
        label{
            font-size:20px;
            font-weight: bolder;
            font-style: italic;
            color:white;
            text-transform: uppercase;
        }
        input {
            width: 300px;
            height: 20px;
            background-color: black;
            color: white;
            border-radius: 10px;
            cursor:pointer; 
            border: 1px solid white;  
        }
        
        h1{
            position: relative;
            top: 10px;
            font-size: 40px;
            font-style: italic;
            font-stretch:ultra-expanded;
            width: 200px;
            color: white;
        }
        h1:hover{
            color:chartreuse;
            transition: all 0.3s;
        }
        label:hover{
            color:chartreuse;
            transition: all 0.3s;
        }
        #date{
            width: 130px;
        }
        select{
            background-color: black;
            border-radius: 10px;
            border: 1px solid white;  
            color: white;
        }
        option{
            color: white;
        }
        #save{
            width: 100px;
        }
        #reset{
            width: 100px;
        }
        .room{
            width:350px;
            height: 520px;
            float: right;
            border:1px solid black;
            position: fixed;
            right: 30px;
            top:30px;
            backdrop-filter: blur(0.8px) brightness(50%);
        }
        .room > div{
            display: inline-block;
            width:25px;
            height:25px;
            border:1px solid black ;
            margin:2px 2px 2px;
            background-color: green;
            text-align: center;
            font-weight: bold;
            align-self: center;  }
    </style>
    <script type="text/javascript">
        function display(){
            var name=document.getElementsByName("name").value;
            var address=document.getElementsByName("address").value;
            var state=document.getElementsByName("state").value;
            var email=document.getElementsByName("email").value;
            var phoneno=document.getElementsByName("phoneno").value;
            var indate=document.getElementsByName("indate").value;
            var outdate=document.getElementsByName("outdate").value;
            var roomtype=document.getElementsByName("roomtype").value;
            var roomno=document.getElementsByName("roomno").value;
            if (name=="" && roomno=="")
            {
                alert("Enter the Name");
                return false;
            }
            else if (address=="")
            {
                alert("Enter the Address");
                return false;
            }
            else if (state=="")
            {
                alert("Enter the Address");
                return false;
            }
            else if (email=="")
            {
                alert("Enter the Address");
                return false;
            }
            else if (phoneno=="")
            {
                alert("Enter the Address");
                return false;
            }
            else if (indate=="")
            {
                alert("Enter the Address");
                return false;
            }
            else if (outdate=="")
            {
                alert("Enter the Address");
                return false;
            } else if (roomtype=="")
            {
                alert("Enter the Address");
                return false;
            }
            else if (roomno=="")
            {
                alert("Enter the Address");
                return false;
            }
            else{}
        }
    </script>
</head>
<body>
    <form method="post" action="connection.php" onsubmit="return display();" >
        <div class="container">
           <center> <h1 style="color: red;">BOOKING</h1><br/></center>
        <label>Name :  </label><input type="text" name="name" placeholder="Name"/><br/><br/>
        <label>Address :  </label><input type="text"name="address" placeholder="Address"/><br/><br/>
        <label>State :  </label><input type="text" name="state" placeholder="State"/><br/><br/>
        <label>Email :  </label><input type="email" name="email" placeholder="Email"/><br/><br/>
        <label>PhoneNo :   </label><input type="number" name="phoneno" placeholder="PhoneNo" /><br/><br/>
        <label>In-Date :   </label><input type="date"id="date" name="indate"placeholder=""/> <label>Out-Date:  </label><input type="date" name="outdate"id="date"placeholder=""/> <br/><br/>
        <label>No of Person :  </label><input type="number" min="1" max="10" name="noofperson" placeholder="no of person" /><br/><br/>
        <label>Nights :  </label><input type="number" name="nights" placeholder="Nights" /><br/><br/>
        <label>Room Type :  </label><select name="roomtype"><option >Single Bed</option><option>Double Bed</option><option>Premium Single Bed</option><option>Premium Double Bed</option><option>Luxury</option></select><br/><br/>
        <label>Room NO :  </label><input name="roomno" type="number" min="1" max="50" inputmode="numeric" placeholder="Room" /><br/><br/>
        <center><input type="submit" value="Save" id="save">  <input type="reset" value="Reset" id="reset"></center>
    </div></form>
    <form action="available.php"method="post">
    <div class="room">
        <center><h3 style="color:white;">ROOM AVAILABLE</h3></center>
        <center><h3 style="color:white;">-----Single Bed-----</h3></center>
        <div id="r1">1</div>
        <div id="r2">2</div>
        <div id="r3">3</div>
        <div id="r4">4</div>
        <div id="r5">5</div>
        <div id="r6">6</div>
        <div id="r7">7</div>
        <div id="r8">8</div>
        <div id="r9">9</div>
        <div id="r10">10</div>
        <center><h3 style="color:white;">-----Double Bed-----</h3></center>
        <div id="r11">11</div>
        <div id="r12">12</div>
        <div id="r13">13</div>
        <div id="r14">14</div>
        <div id="r15">15</div>
        <div id="r16">16</div>
        <div id="r17">17</div>
        <div id="r18">18</div>
        <div id="r19">19</div>
        <div id="r20">20</div>
        <center><h3 style="color:white;">-----Premium Single Bed-----</h3></center>
        <div id="r21">21</div>
        <div id="r22">22</div>
        <div id="r23">23</div>
        <div id="r24">24</div>
        <div id="r25">25</div>
        <div id="r26">26</div>
        <div id="r27">27</div>
        <div id="r28">28</div>
        <div id="r29">29</div>
        <div id="r30">30</div>
        <center><h3 style="color:white;">-----Premium Double Bed-----</h3></center>
        <div id="r31">31</div>
        <div id="r32">32</div>
        <div id="r33">33</div>
        <div id="r34">34</div>
        <div id="r35">35</div>
        <div id="r36">36</div>
        <div id="r37">37</div>
        <div id="r38">38</div>
        <div id="r39">39</div>
        <div id="r40">40</div>
        <center><h3 style="color:white;">----- Luxury-----</h3></center>
        <div id="r41">41</div>
        <div id="r42">42</div>
        <div id="r43">43</div>
        <div id="r44">44</div>
        <div id="r45">45</div>
        <div id="r46">46</div>
        <div id="r47">47</div>
        <div id="r48">48</div>
        <div id="r49">49</div>
        <div id="r50">50</div><br/><br/>
    </div>
    </form>
    <?php
      $conn=mysqli_connect("localhost","root","","booking");
      if($conn===false)
      {
        die."CONNECTION FAILED".mysqli_connect_error();
      }
      $sql="SELECT roomno FROM customer ";
      $result=$conn->query($sql);
      if($result){
       while($row=$result->fetch_assoc())
     { 
    if($row['roomno']==1)
    { 
       echo '<script type="text/javascript">',
       'document.getElementById("r1").style.backgroundColor="red";',
       '</script>';
    }
    else
    {
        echo '<script type="text/javascript">',
        'document.getElementById("r1").style.backgroundColor="green";',
        '</script>';
    }
    }}
    else{
        echo "ERROR".$conn->error;
    }
$conn->close();
    ?>
</body>
</html>7