<html>
<head>
    <title>Registation form</title>
</head>

<body>
    <form action="registation_code.php" method="Post">

        <table border="1" width="40%" height="600px" align="center" bgcolor="#696969">

            <tr align="center"  bgcolor="skyblue">
                <th colspan="2">
                    <img src="./logo.png" alt="" style="width: 100px; height: 100px ; margin: 0 auto ; margin-bottom: -35px; ">
                    <font size="10"> Registation Form </font>
                </th>
            </tr>


            <tr>
                <th>
                    <font color="#00FA9A">
                        <label>First Name</label></th>
                <th><input type="text" name="first_name"  placeholder="Enter Your  Last Name"></th>
            </tr>

            <tr>
                <th>
                    <font color="#00FA9A">
                        <label>Last Name</label></th>
                <th><input type="text" name="last_name"  placeholder="Enter Your  Last Name"></th>
            </tr>

            <tr>
                <th>
                    <font color="orange"><label>Email</label></th>
                <th><input type="email" name="email" placeholder="Enter Your Email"></th>
            </tr>


            <tr>
                <th>
                    <font color="orange">
                        <label>Mobile No.</label></th>
                <th><input type="number" name="mobile_no" placeholder="Enter Your Mobile No"></th>
            </tr>


            <tr>
                <th>
                    <font color="#BA55D3">
                        <label>Address</label></th>
                <th><input type="text" name="address" placeholder="Enter Your Address"></th>
            </tr>
            <tr>
                <th>
                    <font color="#FFD700">
                        <label>Hobbies</label></th>
                <th>
                <input type="checkbox" id="music" name="hobbies[]" value="music" active="checked" >
                <label for="music" style="color: white">Chess</label>
                <input type="checkbox" id="dans" name="hobbies[]" value="dans">
                <label for="dans" style="color: white">Writting</label><br>
                <input type="checkbox" id="cricket" name="hobbies[]" value="cricket">
                <label for="cricket" style="color: white">CRICKET</label>
                <input type="checkbox" id="trawling" name="hobbies[]" value="trawling">
                <label for="trawling" style="color: white">TRAWLING</label><br>
            </tr>
            <tr>
                <th>
                    <font color="koffee">
                        <label>Gender</label></th>
                <th>
                <input type="radio" id="male" name="gender" value="male" active="checked">
                <label for="male" style="color: white">MALE</label>
                <input type="radio" id="female" name="gender" value= "female">
                <label for="female" style="color: white">FEMALE</label><br>
                
            </tr>


            <tr align="center" bgcolor="#DC143C">
                <th colspan="2" >
                    <input type="submit" name="submit" style="width: 150px ; height: 40px;  font-size: 16px;">
                </th>
            </tr>

        </table>
    </form>

</body>

</html>
