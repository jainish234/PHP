<?php

$conncation = mysqli_connect("localhost","root","","dashboard");

  $query = "SELECT * FROM details_my";

  $execute_query =  mysqli_query($conncation ,$query);

  $number_record = mysqli_num_rows($execute_query);
  for ($i=1;  $i <= $number_record; $i++)
  {

   $fetch_data = mysqli_fetch_row($execute_query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./style.css">
    <title>AdminSite</title>
    <style>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background:;
            margin: 0;
            padding: 0;
        }
        #header {
            background: linear-gradient(135deg ,#FF7F50, #DFFF00);
            color: #fff;
            text-align: left;
            padding: 20px;
            font-family: 'Helvetica Neue', sans-serif;
        }
        #header h1 {
            font-size: 50px;
            margin: 0;
            font-weight: bold;
        }
        #sidebar {
            background: linear-gradient(109.5deg, rgb(13, 11, 136) 9.4%, rgb(86, 255, 248) 78.4%);
            color: #000000;
            padding: 20px;
            font-family: 'Helvetica Neue', sans-serif;
        }
        #sidebar ul {
            list-style: none;
            padding: 0;
        }
        #sidebar li {
            margin-bottom: 10px;
        }
        #sidebar li a {
            color: #fff;
            text-decoration: none;
        }
        #sidebar .list-group-item {
            background: transparent;
            border: none;
            color: #fff;
        }
        #sidebar .list-group-item:hover {
            background: #212529;
        }
        #main-content {
            padding: 20px;
        }
        .section-title {
            background: -webkit-linear-gradient(#648880, #293f50);
            color: #FFFFCC;
            text-align: center;
            padding: 20px;
            font-family: 'Helvetica Neue', sans-serif;
        }
        .dashboard-item {
            border: 1px solid #ccc;
            padding: 20px;
            margin-bottom: 20px;
            background:#c7b198;
            box-shadow: 0 2px 4px #0066CC rgba(0, 0, 0, 0.1);
            font-family: 'Arial', sans-serif;
        }
        #footer {
            background: linear-gradient(109.5deg, rgb(13, 11, 136) 9.4%, rgb(86, 255, 248) 78.4%);
            color: #fff;
            text-align: center;
            padding: 20px;
            font-family: 'Helvetica Neue', sans-serif;
        }
		
		* Button 1: Ocean Blue */
.ocean-blue-button {
    background: linear-gradient(109.6deg, rgb(255, 230, 109) 11.2%, rgb(87, 232, 107) 100.2%);
    color: #fff;
}

/* Button 2: Sunset Orange */
.sunset-orange-button {
    background: linear-gradient(109.6deg, rgb(255, 230, 109) 11.2%, rgb(87, 232, 107) 100.2%);
    color: #fff;
}

/* Button 3: Spring Green */
.spring-green-button {
    background: linear-gradient(135deg, #72b01d, #97cc11);
    color: #fff;
}

/* Button 4: Royal Purple */
.royal-purple-button {
    background: linear-gradient(135deg, orange 60%, cyan);
    color: 	#990066;
}

/* Button 5: Ruby Red */
.ruby-red-button {
    background: linear-gradient(135deg, #7c53c3, #a44bc5);
    color: #fff;
}

/* Button 6: Goldenrod Yellow */
.goldenrod-yellow-button {
    background: linear-gradient(135deg, #ffbf3f, #ffb344);
    color: #fff;
}

/* Button 7: Sky Blue */
.sky-blue-button {
    background: linear-gradient(135deg, #31a7ff, #3abeff);
    color: #fff;
}

/* Common Button Styles */
.gradient-button {
    border: none;
    padding: 10px 20px;
    margin: 5px;
    border-radius: 5px;
    font-weight: bold;
    cursor: pointer;
}
    </style>
</head>

<body>

    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand"><img src="./img/logo2.jpg" alt="" class="img" width="50px;" height="50px;"> </a>
         <ul class="side-menu top">
            <li class="divider" data-text="Main">Main</li>
            <li class="active">
                <a href="#">
                    <i class='bx bxs-widget icon'></i>
                    <span class="text">Menu 1</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-widget icon'></i>
                    <span class="text">Menu 2 </span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-widget icon'></i>
                    <span class="text">Menu 3 </span>
                </a>
            </li>
            <li class="divider" data-text="My Social Profiles">My Social Profiles</li>
            <li>
                <a href="https://sites.google.com/view/jb-digitals/home">
                    <i class='fa fa-google icon'></i>
                    <span class="text">GoogleSite</span>
                </a>
            </li>
            <!--<li>
                <a href="https://www.linkedin.com/in/rahul-kanjariya-6672411ab">
                    <i class='fa fa-linkedin-square icon'></i>
                    <span class="text">Linkedin</span>
                </a>
            </li>-->
            <li>
                <a href="https://github.com/jainish234/">
                    <i class='fa fa-github-square icon'></i>
                    <span class="text">Github</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-file-text icon"></i>
                    <span class="text">Blog</span>
                </a>
            </li>
        </ul>
        
    </section>
    <!-- SIDEBAR -->

    <!-- NAVBAR -->
    <section id="content">
        <!-- NAVBAR -->
        
        <nav id="navbar" >
           <div class="navbar-item"> 
            <i class='bx bx-menu toggle-sidebar'></i>
            <form action="#">
                <div class="form-group">
                    <h1 class="title">Title</h1>
                </div>
            </form>

            <div class="profile">
                <img src="./img/profile.bmp" width="50px;" height="50px;">
            </div>
            <div class="form-group">
                    <h4 class="title">Jainish Barbhaya</h4>
                </div>
           
            </div>
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->

        <div class="container">
            <div class="dashboard-item">
                <div id="about-me" class="section-title">
                    <h2>About Me</h2>
                </div>
                <p class="about"><?php echo $fetch_data[1] ?></p>
            </div>
            <div class="dashboard-item">
                <div id="my-skillset" class="section-title">
                    <h2>My Skillset</h2>
                </div>
                <div class="btn-group">
                <button class="btn btn-4"><?php echo $fetch_data[2] ?> </button>
                </div>
                
            </div>
            <div class="dashboard-item">
                <div id="assignments" class="section-title">
                    <h2>Assignments</h2>
                </div>
                <div class="btn-group">
                    <a href="https://github.com/jainish234/PHP/tree/main/Task-1"><button class="btn btn-1">Task 1</button></a>
                    <a href="https://github.com/jainish234/PHP/tree/main/Task-2"><button class="btn btn-2">Task 2</button></a>
                    <a href="https://github.com/jainish234/PHP/tree/main/Task-3"><button class="btn btn-3">Task 3</button></a>
                    <button class="btn btn-4">Task 4</button>
                    <button class="btn btn-5">Task 5</button>
                    <button class="btn btn-6">Minor Project Module</button>
                    <button class="btn btn-7">Database  Module</button>
                </div>
            </div>
            <div class="dashboard-item">
                <div id="project-details" class="section-title">
                    <h2>My Project Details</h2>
                </div>
                <p><?php echo $fetch_data[3]?></p>
            </div>
        </div>
        </main>
        </div>
        </div>
        <div id="footer">
            <img src="./img/logo.png" alt="Footer Logo" width="100px;" height="100px;">
            <div style="margin: 5px; text-align: start;">
                <p>Developed with love by © 2023 JainishBarbhaya</p>
            </div>
        </div>

    </section>
    <!-- NAVBAR -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="script.js"></script>
</body>

</html>
<?php
break;
}
?>
 