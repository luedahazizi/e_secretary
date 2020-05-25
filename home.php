<!DOCTYPE html>
<html>

<head>
    <title>homepage</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        font-family: Century;
    }
    header {
        background-image: url("https://images.unsplash.com/photo-1519682337058-a94d519337bc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60");
        height: 100vh;
        background-size: cover;
        background-position: center;
    }
    ul {
        float: left;
        list-style-type: none;
        margin-top: 25px;
    }
    ul li {
        display: inline-block;
    }
    ul li .btn {
        text-decoration: none;
        color: blueviolet;
        padding: 5px;
        border: 1px solid white;
        transition: 1s ease;
    }
    ul li .btn:hover {
        background-color: blueviolet;
        color: white;
    }
    .button {
        max-width: 1300px;
        margin: auto;
    }
    .title {
        position: absolute;
        top: 20%;
        left: 55%;
        transform: translate(-50%, -50%)
    }
    .title h1 {
        color: coral;
        font-size: 40px;
    }
    .button1 {
        position: absolute;
        top: 25px;
        right: 6%;
    }
    .btn1 {
        border: 1px solid white;
        padding: 5px 25px;
        color: blueviolet;
        text-decoration: none;
    }
    .btn1:hover {
        background-color: blueviolet;
        color: white;
    }
</style>

<body>

<header>
    <div class="button">
        <ul>
            <li class="active"><a href="#home" class="btn">HOME</a></li>
            <li><a href="#about" class="btn" onclick=" window.open('about.php')">ABOUT US</a></li>
            <li><a href="#courses" class="btn" onclick="window.open('courses.php')">COURSES</a></li>
            <li><a href=" #staff" class="btn" onclick="window.open('staff.php')">STAFF</a></li>
            <li><a href=" #contact" class="btn" onclick="window.open('contact.php')">CONTACT US</a></li>
        </ul>
    </div>
    <div class="title">
        <h1>Universal,
            College,
            School Education</h1>
    </div>
    <div class="button1"><a href="#" class="btn1" onclick="window.open('form.html')">LOG IN</a></div>
</header>
</body>

</html>