<?php 
header('Content-type: text/css; charset=UTP-8');

?>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    
}
body{
    font-family: 'Roboto Condensed', sans-serif;
  overflow-x: hidden;
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
.newarrh2{
    text-align: center;
    margin-top: 50px;
    left: 550px;
    position: absolute;
    
}
.memberlog {
    
}
.memberlog .lockp{
    width: 50px;
    height: 50px;
}
.hi-slide{
background-color:#D8C4B6;
background-size: cover;
background-attachment: fixed;
}
.hi-slide { position: relative; width: 754px; height: 292px; margin: 115px auto 0; }
.hi-slide .hi-next,
.hi-slide .hi-prev 
          { position: absolute;
            top: 50%; 
            width: 40px;
            height: 40px; 
            margin-top: -20px;     
              border-radius: 50px; 
               
              
            line-height: 40px;
            text-align: center; 
            cursor: pointer;
            background-color: #fff; 
            color: black;               
            transition: all 0.6s;
            font-size: 20px; 
              font-weight: bold;
          }
         .hi-slide .hi-next:hover, 
          .hi-slide .hi-prev:hover 
          {
          opacity: 1; 
          background-color: #fff;  
          }
          
         .hi-slide .hi-prev { left: -60px; }
          
  .hi-slide .hi-prev::before { content: '<'; }
  .hi-slide .hi-next { right: -60px; }
  .hi-slide .hi-next::before { content: '>'; }
  
          .hi-slide > ul
                  { 
                      list-style: none; 
                      position: relative;
                      width: 754px; 
                      height: 292px; 
                      margin: 0;
                      padding: 0;
          }
          
          
      .hi-slide > ul > li {
          overflow: hidden; 
          position: absolute; 
          z-index: 0; 
          left: 377px;
          top: 146px; 
          width: 0; 
          height: 0; 
          margin: 0; 
          padding: 0;
          border: 3px solid #fff;              
          background-color: #333; 
          cursor: pointer; }
          
      .hi-slide > ul > li > img { width: 100%; height: 100%; background-position: center;}
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
