<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Almendra" rel="stylesheet">
    </head>
    
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        body{margin:0;}
        .icon-bar{
            width:100%;
            background-color:#566F5A;
            overflow:auto;
        }
        .icon-bar a {
            float:left;
            width: 20%;
            text-align:center;
            padding: 12px 0;
            transition:all 0.3s ease;
            color:white;
            font-size: 36px;

        }
        .icon-bar a:hover {
            background-color: #566F5A;
            padding:
            

        }
        .active{
            background-color: #476F5A;
            
           
        }
        .icon-bar .search-container{
            float:right;
            margin-bottom:auto ;
            margin-top:20px;
            border:10px;

            
        }
        .icon-bar .search-container[type=text]{
            padding:6px 10px;
            margin-top: 8px;
            font-size: medium;
            border:none;
            
        }
        input[type=text]{
            padding:12px 20px;
        }
        
        .icon-bar .search-container button{
            float:right;
            padding: 14px 20px;
            margin-right: 16px;
            background: #ddd;
            font-size: 13px;
            border: none;
            cursor: pointer;
        }
        .icon-bar .search-container button:hover{
            background: #ccc;
        }
        @media screen and (max-width: 1000px) {
  .icon-bar .search-container {
    float: right;
  }
  .icon-bar a, .icon-bar input[type=text], .icon-bar .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 1000%;
    margin: 0;
    padding: 14px;
  }
  .icon-bar input[type=text] {
    border: 1000px solid #ccc;  
  }

  }
        </style>
        <body>
            <div class="icon-bar">
                <a class="active" href="#"><i class="fa fa-home"></i></a>
                <a href="#"><input type="text" placeholder="Teacher's name"></a> 
                <div class="search-container">
                    <form action="/action_page.php">
                      <input type="text" placeholder="Search student" name="search">
                      <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                  </div>
               
                
            </div>
            <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
#lista a {
  position:absolute;
  left: -60px;
  transition: 0.5s;
  padding: 18px;
  width: 100px;
  text-decoration: none;
  font-size: 20px;
  color: white;
  border-radius: 0 10px 10px 0;
}

#lista a:hover {
  left: 0;
}

#dashboard {
  top: 80px;
  background-color: #4CAF50;
}

#attendance {
  top: 140px;
  background-color: #2196F3;
}

#subjects {
  top: 200px;
  background-color: #f44336;
}

#Marks {
  top: 260px;
  background-color: #555;
}
#notify{
  top:320px;
  background-color:#666;
}
#events{
  top:380px;
  background-color:#777;
}
</style>
</head>
<body>

<div id="lista" class="lista">
  <a href="#" id="dashboard">Dashboard</a>
  <a href="#" id="attendance">Attendance</a>
  <a href="#" id="subjects">Subjects</a>
  <a href="#" id="Marks">Marks</a>
  <a href="#" id="notify">Notify</a>
  <a href="#" id="events">Events</a>
</div>


            
        </body>
       
        
    
</html>