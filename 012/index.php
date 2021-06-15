<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>Home | The Village of Coal Valley Illinois</title>
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" type="text/css" href="ResponsiveTopNav.css" />
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,400italic' rel='stylesheet' type='text/css'>
</head>

<style>
    @charset "utf-8";
    /* CSS Document */

    /*
	The following section of the file lays out the CSS for a basic site. It assumes a top navigation - see the other file for a left-hand navigation - and 1100px wide site as the baseline.
*/

    body {
        background-color: #79a3d8;
        font-family: Verdana, Geneva, sans-serif;
        font-size: 14px;
    }

    img {
        max-width: 100%;
    }

    .container {
        width: 1100px;
        margin: 0 auto 0 auto;
    }

    .header {
        background-image: url(https://coalvalleyil.org/images/blank-header.jpg);
        width: 100%;
        height: 243px;
        border-top-left-radius: 12px;
        border-top-right-radius: 12px;
       
    }

    #logo {
        height: 150px;
        margin: 40px;
    }

    #toggleNav {
        display: none;
        width: 100%;
        height: 20px;
        background-color: #000000;
    }

    #toggleNav a {
        color: #ffffff;
    }

    /*Use this for simple top nav*/

    #nav {
        width: 100%;
        background-color: #001b7e;
        height: 40px;
        display: flex;
        justify-content: space-evenly;
        color: white;
        align-items: center;
    }

    #nav a {
        position: relative;
        float: left;
        font-size: 16px;
        text-decoration: none;
        margin: 0px 8px 0px 8px;
        padding: 0px 5px;
        color: #fff;
    }

    .blue {
        color: #001b7e;
    }

    .content {
        display: inline-block;
        width: 100%;
        background-color: #cdcdcd;
        overflow: hidden;
    }

    .contentleft {
        position: relative;
        float: left;
        width: 26%;
        margin: 15px 0px 15px 10px;
        padding: 5px;
    }

    .contentleft nav {
        width: 92%;
        margin: 0% 2%;
        padding: 1% 2%;
        border-radius: 12px;
        background-color: #354c9f;
        color: white;
    }

    .contentleft nav a {
        display: block;
        color: #fff;
        text-decoration: none;
        padding: 3px;
        margin: 5px 0px;
    }

    .contentright {
        position: relative;
        float: right;
        margin: 10px 10px 15px 0px;
        width: 69%;
        padding: 5px;
    }

    .maincontent {
        width: 695px;
        margin-left: 245px;
        min-height: 500px;
    }

    .footer {
        width: 100%;
        background-color: #001b7e;
        color: #ffffff;
        min-height: 90px;
        position: relative;
        float: left;
        border-top-left-radius: 12px;
        border-top-right-radius: 12px;
    }

    .footleft {
        float: left;
        padding: 18px 0px 0px 35px;
    }

    .footright {
        float: right;
        padding: 18px 35px 0px 0px;
    }

    .footright a {
        color: #ffffff;
    }

    .float {
        float: right;
        border-radius: 10px;
    }

    /* ------------ 960 pixel wide version of the site ------------ */

    @media only screen and (min-width:966px) and (max-width:1105px) {
        .container {
            width: 960px;
        }

        #logo {
            height: 150px;
            margin: 42px 0 42px 30px;
        }

        #nav a {
            font-size: 14px;
        }
    }

    /* ------------ 800 pixel wide version of the site ------------ */

    @media only screen and (min-width:806px) and (max-width:965px) {
        .container {
            width: 800px;
        }

        .header {
            height: 224px;
        }

        #nav a {
            font-size: 12px;
            margin: 0px 4px;
        }

        .contentleft {
            margin: 12px 0 12px 2px;
            padding: 5px;
        }
    }

    /* ------------ 600 pixel wide version of the site ------------ */

    @media only screen and (max-width:805px) {
        .container {
            width: 600px;
        }

        .header {
            display: block;
            height: 170px;
            text-align: center;
        }
        #logo {
            margin: 20px;
            height: 140px
        }
        #toggleNav {
            display: block;
        }

        #nav {
            text-align: center;
            height: 100%;
            padding: 5px 0;
            margin: 0;
            display: none;
        }

        #nav a {
            float: none;
            display: block;
            margin-top: 0;
        }

        .three-box-row {
            width: 76%;
            margin: 2% 10%;
        }

        .footer {
            height: 65px;
            text-align: center;
        }

        .footleft {
            float: none;
            padding-top: 10px;
            display: block;
        }

        .footright {
            float: none;
            padding: 0;
            display: block;
        }
    }

    /* ------------ 400 pixel wide version of the site ------------ */

    @media only screen and (max-width:604px) {
        .container {
            width: 400px;
        }

        .header {
            display: block;
            height: 183px;
        }
        #logo {
            margin: 20px;
            margin-top: 40px;
            height: 100px;
        }
        #toggleNav {
            display: block;
        }

        #nav {
            text-align: center;
            height: 100%;
            padding: 5px 0;
            margin: 0;
            display: none;
        }

        #nav a {
            float: none;
            display: block;
            margin-top: 0;
        }

        .contentleft {
            width: 96%;
            margin: 0;
            padding: 8px;
        }

        .footer {
            height: 65px;
            text-align: center;
        }

        .footleft {
            padding-top: 10px;
            display: block;
            float: none;
        }

        .footright {
            padding: 0;
            display: block;
            float: none;
        }
    }

    /* ------------ 300 pixel wide version of the site ------------ */

    @media only screen and (max-width:404px) {
        .container {
            width: 300px;
        }

        .header {
            display: block;
            height: 181px;
        }

        #toggleNav {
            display: block;
        }

        #nav {
            text-align: center;
            height: 100%;
            padding: 5px 0;
            margin: 0;
            display: none;
        }

        #nav a {
            float: none;
            display: block;
            margin-top: 0;
        }

        .contentleft {
            width: 96%;
            margin: 0;
            padding: 6px;
        }

        .footer {
            height: 65px;
            text-align: center;
        }

        .footleft {
            padding-top: 10px;
            display: block;
            float: none;
        }

        .footright {
            padding: 0;
            display: block;
            float: none;
        }
    }
</style>

<body>
    <div class="container">

        <header class="header">
            <img id="logo" src="logo.jpg" alt="City of Coal Valley logo">
        </header>
        <div id="toggleNav" align="center"><a href="#" onclick="toggleNav()">Show / Hide Navigation</a></div>
        <nav id="nav">
            <p>Home</p>
            <p>Information/Services</p>
            <p>Village Board</p>
            <p>Planning/Zoning</p>
            <p>Departments</p>
            <p>Utilities</p>
            <p>Business</p>
            <p>Contact</p>
        </nav>

        <div class="content">
            <section class="contentleft">
                <nav>
                    <p>Pay Water Bill</p>
                    <p>Pay for Ordinance Citations / Building Permits</p>
                    <p>Code of Ordinances</p>
                    <p>Sign up for email notifications</p>
                    <p>Like us on Facebook</p>
                    <p>Follow us on Twitter</p>
                    <p>Employee Email</p>
                    <p>Newsletter</p>
                </nav>
                <br />
                <div>
                    <p>Village of Coal Valley<br />
                        900 1st Street<br />
                        P.O. Box 105<br />
                        Coal Valley, IL 61240<br />
                        309-799-3604</p>
                </div>
            </section>
            <!--end contentleft-->
            <section class="contentright">
                <h1 class="blue">Welcome to Coal Valley!</h1>

                <p><img src="https://coalvalleyil.org/images/CVsign.jpg" width="250" height="188" class="float"
                        hspace="15" vspace="15" alt="Sign for Coal Valley Municipal Center" />The Village of Coal Valley
                    is located in Henry and Rock Island Counties, Illinois. The Village is a residential community and
                    is a suburb of the greater Quad Cities area. Find out the history of the village.</p>

                <h2 class="blue">What's New</h2>
                <p><strong>01/13/2021</strong> - REMINDER<br />
                    TITLE IX STREETS, PUBLIC WAYS AND PUBLIC PROPERTY, DIVISION 1 STREETS, CHAPTER 1 STREETS</p>
                <p>Section 28. SNOW REMOVAL<br />
                    All abutting property owners shall be responsible a. To remove within a reasonable time from the
                    portion of any public sidewalk abutting said property all snow and ice.<br />
                    b. To refrain from putting, pushing, blowing of otherwise depositing any snow removed from a public
                    sidewalk of private property upon any improved public roadway.<br />
                    For purposes of this Section, &quot;reasonable time&quot; shall mean that snow removal shall be
                    within twenty-four (24) hours after cessation of a snowfall, or, if a snowfall ceases in the
                    nighttime hours, within twenty-four (24) hours after sunrise.</p>
            </section>
            <!--end contentright-->
            <footer class="footer">
                <span class="footleft">Website Copyright Village of Coal Valley, Illinois</span>
                <span class="footright">Site by <a href="http://www.augustana.edu/webguild/" target="_blank">Augustana
                        Web Guild</a></span>
            </footer>
        </div>
        <!--end content-->

    </div>
    <!--end container-->
</body>

</html>