<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div>
            <a><h2>ATVTRAKING</h2></a> 
            <br>
            <a><h3>Employees</h3></a>
            <div>
                <table>
                    <thead>
                        <input type="submit" value="General"  name="btnGeneral">
                    </thead>
                    <thead>
                        <input type="submit" value="Other"  name="btnOther">
                    </thead>
                </table>
            </div>
        </div>
        <div>
            <form action="Employees.php" method="POST">
                <ul>
                    <li><input type="submit" value="Employees" name="btnEmployees"></li>
                    <li><input type="submit" value="Materials" name="btnMaterials"></li>
                    <li><input type="submit" value="Customers" name="btnCustomers"></li>
                    <li><input type="submit" value="Proyects" name="btnProjects"></li>
                    <li><input type="submit" value="Users" name="btnUsers"></li>
                </ul>
            </form>
            <?php
//                if (isset($_POST["btnEmployees"])){
//                    header ("Location: ./Employees.php");
//                }
                if (isset($_POST["btnMaterials"])) {
                    header ("Location: ./Materials.php");
                }
                elseif (isset($_POST["btnCustomers"])) {
                    header ("Location: ./Customers.php");
                }
                elseif (isset($_POST["btnProjecs"])) {
                    header ("Location: ./Projectts.php");
                }
                elseif (isset($_POST["btnUsers"])) {
                    header ("Location: ./Users.php");
                }
            ?>
        </div>
    </body>
</html>
