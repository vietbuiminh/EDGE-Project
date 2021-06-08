<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Mardi Gras | Junior Board of Rock Island</title>
  <meta name="viewport" content="width=device-width">
</head>

<body>
  <div class="container">

    <header class="header"></header>
    <div id="toggleNav" align="center"><a href="#" onclick="toggleNav()">Show/Hide Navigation</a></div>
    <nav id="nav" style="color:white;">
      <ul>
        <li>Home</li>
        <li>Project Nest</li>
        <li>Nest Egg Scholarship</li>
        <li>Fundraising &amp; Community Projects</li>
        <li>Mardi Gras</li>
        <li>Event Calendar</a>
          <ul>
            <li>Photos</li>
          </ul>
        </li>
        <li>Contact
          <ul>
            <li>Request for Funding</li>
          </ul>
        </li>

      </ul>
    </nav>



    <div class="content">

      <section class="contentleft">
        <h1>Mardi Gras</h1>
        <p align="center"><img src="http://www.jbri.org/images/Mardi-Gras-2021.jpg" alt="Mardi Gras 2021" /></p>

        <p align="center"><img src="http://www.jbri.org/images/Mardi-Gras-Raffle-Header.jpg"
            alt="Mardi Gras Raffle Ticket Header"></p>
      </section>
      <!--end contentleft-->
      <section class="contentright">
        <h2>Buy Raffle Tickets:</h2>
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" style="text-align: center;">
          <input type="hidden" name="cmd" value="_s-xclick">
          <input type="hidden" name="hosted_button_id" value="HYV72R67STUYS">
          <table style="margin-left: auto; margin-right:auto;">
            <tr>
              <td><input type="hidden" name="on0" value="Quantity">Quantity</td>
            </tr>
            <tr>
              <td><select name="os0">
                  <option value="1 Raffle Ticket">1 Raffle Ticket $50.00 USD</option>
                  <option value="2 Raffle Tickets">2 Raffle Tickets $100.00 USD</option>
                  <option value="3 Raffle Tickets">3 Raffle Tickets $150.00 USD</option>
                  <option value="4 Raffle Tickets">4 Raffle Tickets $200.00 USD</option>
                  <option value="5 Raffle Tickets">5 Raffle Tickets $250.00 USD</option>
                  <option value="6 Raffle Tickets">6 Raffle Tickets $300.00 USD</option>
                  <option value="7 Raffle Tickets">7 Raffle Tickets $350.00 USD</option>
                  <option value="8 Raffle Tickets">8 Raffle Tickets $400.00 USD</option>
                  <option value="9 Raffle Tickets">9 Raffle Tickets $450.00 USD</option>
                  <option value="10 Raffle Tickets">10 Raffle Tickets $500.00 USD</option>
                </select> </td>
            </tr>
          </table>
          <input type="hidden" name="currency_code" value="USD">
          <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0"
            name="submit" alt="PayPal - The safer, easier way to pay online!">
          <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>
        <h2>Make a Patron Donation:</h2>
        <form action="https://www.paypal.com/donate" method="post" target="_top" style="text-align: center;">
          <input type="hidden" name="hosted_button_id" value="GQ9Z6YAWC86GJ" />
          <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit"
            title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
          <img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" />
        </form>
      </section>
      <!--end contentright-->

    <footer class="footer">
      <span class="footleft">Copyright Junior Board of Rock Island</span>
      <span class="footright">Site by <a href="http://www.augustana.edu/webguild/" target="_blank">Augustana Web
          Guild</a></span>
    </footer>

  </div>
  <!--end container-->
</body>

<style>
  @charset "utf-8";

  body {
    margin: 0px !important;
    padding: 0px !important;
    background-color: #999999;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 14px;
    background-image: url(images/body-bg.png);
    background-repeat: repeat-x;
    background-color: #c3d3df;
  }

  .indent {
    padding-left: 20px;
  }

  img {
    max-width: 100%;
  }

  .container {
    width: 1100px;
    margin: 0 auto 0 auto;
    background-color: #407998;
    overflow: hidden;
    -moz-box-shadow: 0px 5px 20px #000000;
    -webkit-box-shadow: 0px 5px 20px #000000;
    box-shadow: 0px 5px 20px #000000;
    -ms-filter: "progid:DXImageTransform.Microsoft.Shadow(Strength=10, Direction=130,Color='#000000')";
    filter: progid:DXImageTransform.Microsoft.Shadow(Strength=10, Direction=130, Color='#000000');
  }

  .header {
    width: 100%;
    height: 181px;
    background-image: url(images/header1.png);
  }

  #toggleNav {
    display: none;
    width: 100%;
    height: 20px;
    padding-top: 2px;
    background-color: #000000;
  }

  #toggleNav a {
    color: #ffffff;
  }

  .members {
    width: 99%;
    position: relative;
    float: left;
  }

  .members p {
    width: 200px;
    float: left;
  }

  #nav {
    display: block;
    float: left;
    width: 100%;
    background-color: #0d557c;
    height: 30px;
    padding: 10px 0px 0px 0px;
    font-size: 16px;
    font-weight: bold;
    text-align: center;
  }

  #nav ul {
    margin: 2px 0 0 0px;
    text-align: center;
  }

  #nav ul li {
    list-style-position: inside;
    list-style-type: none;
    height: 20px;
    min-width: 40px;
    margin-right: 15px;
    margin-left: 15px;
    float: left;
  }

  #nav a,
  #nav a:visited {
    display: block;
    padding-bottom: 10px;
    text-decoration: none;
    color: #ffffff;
  }

  #nav ul li ul {
    margin-left: -999em;
    background-color: #0d557c;
    position: absolute;
    color: #ffffff;
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
    font-size: 14px;
    text-align: left;
    padding-bottom: 0;
  }

  html>body #nav ul li:hover ul {
    display: block;
    margin: -5px 0 2px 0;
    padding: .25em 0 .75em .25em;
  }

  #nav ul li ul {
    margin-top: 5em;
    z-index: 5;
  }

  html>body #nav ul li ul {
    margin-top: -3em;
  }

  #nav ul li ul li {
    float: none;
    border: 0;
    padding-top: 10px;
  }

  #subnav {
    width: 100%;
    height: 100%;
    padding: 185px 0% 10px 0%;
    display: none;
    text-align: center;
    background-color: #F00;
  }

  #subnav a {
    color: #ffffff;
    padding: 6px 10px;
    font-size: 16px;
    margin: 2px 15px 0px 15px;
    display: block;
  }

  .content {
    display: inline-block;
    width: 100%;
  }

  .contentleft {
    position: relative;
    float: left;
    width: 57%;
    margin: 15px 0px 15px 20px;
    padding: 15px 22px;
    background-color: #c3d3df;
  }

  .contentwide {
    position: relative;
    float: left;
    width: 90%;
    margin: 15px 3%;
    padding: 15px 2%;
    background-color: #c3d3df;
  }

  .contentright {
    position: relative;
    float: right;
    margin: 15px 20px 15px 0px;
    width: 28%;
    padding: 15px;
    background-color: #c3d3df;
    border-radius: 12px;
  }

  .donate {
    margin-left: auto;
    margin-right: auto;
  }

  .footer {
    width: 100%;
    background-color: #0d557c;
    color: #ffffff;
    height: 40px;
  }

  .footleft {
    float: left;
    padding: 10px 0px 0px 25px;
  }

  .footright {
    float: right;
    padding: 10px 25px 0px 0px;
  }

  .footright a {
    color: #ffffff;
  }

  .header {
    background-image: url('http://www.jbri.org/images/header1.png');
  }
  }
</style>

</html>