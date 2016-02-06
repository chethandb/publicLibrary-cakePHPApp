<!DOCTYPE html>
<html>
<body>
<script type="text/javascript">
        function click_me(){
            var selected;
            alert("inside java script");
            var yourSelect = document.getElementById( "select-id" );
            var sel = yourSelect.options[ yourSelect.selectedIndex ].value;
            document.getElementsByTagName('option');

            alert("inside java script");
            if(sel=="Update Stock Portfolio")
            {
                window.open("http://localhost/efs/stocks");
            }
            else if(sel=="Update non stock investments")
            {
                window.open("http://localhost/efs/investments");
            }
            else if(sel=="Select a customer and review profile")
            {
                window.open("http://localhost/efs/customers");
            }
        }
    </script>

    <center><img style="width:500px;height:350px;" src="/eagletrial/img/Bald_Eagle_Profile_Portrait_2.jpg" alt="Eagle is missing :P"></center>
    <center><h3><b><font size="10" color="red">Eagle Financial Services</font></b></h3></center>
    <center><h2><font  color="blue" face="verdana"> Your Midwest Financial Services Partner</font></h2></center>
    <center><h2><font  color="blue" face="verdana">Financial Advisor Portfolio Partner</font></h2></center>
    
</body>
<!DOCTYPE html>
<html>
<body>
<form name="login" action="C:/wamp/www/eagletrial/app/Controller/homepage.html" method="get" accept-charset="utf-8">
        <label for="usermail">Email</label>
        <input type="email" name="usermail" width="10" placeholder="yourname@email.com" required>
        <label for="password">Password</label>
        <input type="password" name="password" size="10" placeholder="enter 'eagle'" required>
        
</form>
<br>
<form name="form1" id="form_portfolio">
    <select name="Portfolio" id="select-id">
    <option value="Select a customer and review profile" name="s1" id="1">Select a customer and review profile</option>
    <option value="Update Stock Portfolio" id="2">Update Stock Portfolio</option>
    <option value="Update non stock investments" id="3">Update non stock investments</option>
    </select>
    <br><br>
    <input type="submit" onclick="click_me()">
    </form>
</body>
</html>