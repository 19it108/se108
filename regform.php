<!DOCTYPE html>
<html>

<head>
    <title>REGISTRATION FORM</title>

    <script>
        function reg()
        {
            var name=document.getElementById("t1").value;
            var email=document.getElementById("t2").value;
            var user=document.getElementById("t3").value;
            var pass=document.getElementById("t4").value;

            var pass_exp=/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^*-])/;
            var letters=/^[A-Za-z]+$/;
            var filter=/^(a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

            if(name=='')
            {
                alert("Please enter your name");
            }
            else if(!letters.test(name))
            {
                alert("Name field requires only alphabets");
            }
            if(email=='')
            {
                alert("Please enter your email address");
            }
            else if(!filter.test(email))
            {
                alert("Invalid email");
            }
            if(user=='')
            {
                alert("Please enter your user name");
            }
            else if(!letters.test(user))
            {
                alert("User field requires only alphabets");
            }
            if(pass=='')
            {
                alert("Please enter password");
            }
            else if(document.getElementById("t5").value.length<6)
            {
                alert("Password's minimum length is 6");
            }
            else if(document.getElementById("t5").value.length>12)
            {
                alert("Password's maximum length is 12");
            }
            else if(gender1.checked==false && gender2==false)
            {
                alert("Please select gender");
            }
            else
            {
                alert("Thank you for Login");
            }
        }

        function clear()
        {
            document.getElementById("t1").value="";
            document.getElementById("t2").value="";
            document.getElementById("t3").value="";
            document.getElementById("t4").value="";
            document.getElementById("t5").value="";
        }
    </script>
</head>

<body>
    <div id="main">
        <h2>Registration Form</h2>
        <table cellspacing="2" cellpadding="8" border="0">
            <form method="POST" onsubmit="return reg()">
            <tr>
                <td align="right">Enter Name:</td>
                <td><input type="text" placeholder="Enter user here" id="t1" class="tb" name="name"></td>
            </tr>
            <tr>
                <td align="right">Enter Email:</td>
                <td><input type="text" placeholder="Enter email here" id="t2" class="tb" name="email"></td>
            </tr>
            <tr>
                <td align="right">Enter Username:</td>
                <td><input type="text" placeholder="Enter user name here" id="t3" class="tb" name="user"></td>
            </tr>
            <tr>
                <td align="right">Enter Password:</td>
                <td><input type="text" placeholder="Enter password here" id="t4" class="tb" name="pass"></td>
            </tr>
            <tr>
                <td align="right">
                    <label for="Radio">Gender</label>
                </td>
                <td>
                    <input type="radio" value="Male" name="gender" id="gender1">Male
                    <input type="radio" value="Female" name="gender" id="gender2">Female
                </td>
            </tr>
            <tr>
                <td align="right"></td>
                <td>
                <input type="submit" value="send" name="Submit"/>
                <input type="reset" value="Reset" name="Reset"/>
                </td>
            </tr>
        </table>
    </div>

    <div>
        <?php
            if(isset($_POST["Submit"])!=null)
            {
                echo "<tr>";
                    echo "<td>My Name:   </td><td>",$_POST["name"],"</td>";
                echo "</tr>";
                echo "<br/>";
                echo "<tr>";
                    echo "<td>My Email-ID:   </td><td>",$_POST["email"],"</td>";
                echo "</tr>";
                echo "<br/>";
                echo "<tr>";
                    echo "<td>My UserName:   </td><td>",$_POST["user"],"</td>";
                echo "</tr>";
                echo "<br/>";
                echo "<tr>";
                    echo "<td>My Password:   </td><td>",$_POST["pass"],"</td>";
                echo "</tr>";
                echo "<br/>";
                echo "<tr>";
                    echo "<td>My Gender:    </td><td>",$_POST["gender"],"</td>";
                echo "</tr>";
                echo "<br/>";
                echo "</table>";
            }
        ?>
    </div>
</body>

</html>