<?php 
header('Content-type: text/css; charset=UTP-8');

?>
*{
    margin : 0;
    padding : 0;
    border-box :box-sizing;
}
body {
    background-color: #f4f4f4;
    font-family: 'Roboto Condensed', sans-serif;
  overflow-x: hidden;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

.container {
    background-color: #fff;
    width: 60%;
    height: 450px;
    padding: 20px;
    margin-top: 50px;
    border-radius: 5px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    margin-left: 20%;
}
.containerL{
    width: 50%;
}
.containerL img{
    width: 400px;
    height: 450px;

}
.containerR{
    width: 50%;
    display: flex;
    float: right;

}
form{
    position: absolute;
    top: 250px;
    left: 750px;
}
.containerR h2 {
    text-align: center;
    position: absolute;
    top: 170px;
    left: 800px;
    
}
.containerR label {
    display: block;
    margin-bottom: 8px;
}

.containerR input[type="text"],
.containerR input[type="password"] {
    width: 90%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.forgotpass{
    width: 200px;
    position: absolute;
    top: 205px;
    left: 70px;
    color: blue;
    font-size: 15px;
    text-transform: capitalize;
}
.createstdacct{
    margin-top: 40px;
    margin-left: 10px;
}

.containerR button {
    background-color: #4F709C;
    color: #fff;
    width: 80%;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-top: 10px;
    margin-left: 10%;
    border-color: black;
}
.container .containerR form button a{
    text-decoration: none;
    color: white;
    font-size: 15px;
}
.containerR button:hover {
    background-color: #213555;
}

.nav{
    background-color: #F5EFE7;
    overflow: hidden;
    position: relative;
    width: 100%;
    top: 0;
    left: 0;
    border-bottom: 2px solid #d4af94;
}
.nav .logo {
    float: left;
width: 100px;
}
.nav .logon{
    float: left;
}
.nav a{
    display: block;
    float: left;
    
    text-align: center;
    text-decoration: none;
    padding: 20px;
    color: black;
    font-size: 20px;
    margin-top: 20px;
}
.nav a:hover{
    background-color: #D8C4B6;
}
.nav a:nth-child(3){
    margin-left: 100px;
}
.nav a:nth-child(4),.nav a:nth-child(5) {
    margin-left: 50px;
}
.nav a:nth-child(6){
    margin-left: 50px;
}
.nav a:nth-child(7){
    float: right;
    margin-right: 50px;
}


/* Clear floats after the links and button */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
} 
.nextp{
    
    width: 20px;
    height: 20px;
    position: absolute;
    top: 150px;
    left: 300px;
}
.createstdacct{
    text-decoration: none;
    color: black;
    width: 200px;
    position: absolute;
    left: 60px;
    top:200px;
    
}
.createstdacct{
    text-decoration: none;
    color: black;
}
footer{
    text-align: center;
    height: 100px;
    background-color:#213555;
    color: wheat;
    padding-top: 0px;
}
footer .label1{
    padding-top: 50px;
    text-decoration: none;
    color: white;
    margin-top: 50px; 

}
