<?php
session_start(); // this MUST be called prior to any output including whitespaces and line breaks!

$GLOBALS['DEBUG_MODE'] = 0;
// CHANGE TO 0 TO TURN OFF DEBUG MODE
// IN DEBUG MODE, ONLY THE CAPTCHA CODE IS VALIDATED, AND NO EMAIL IS SENT

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>maurizio cavagna</title>
<link rel="shortcut icon" href="../favicon.ico" />
<meta name="keywords" content="maurizio, cavagna" />
<meta name="description" content="Maurizio Cavagna: il sito ufficiale" />
<link href="../css/main.css" rel="stylesheet" type="text/css" />
<link href="../css/menuBar.css" rel="stylesheet" type="text/css" />
<link type='text/css' href='../Spry-UI-1.7/css/Menu/basic/SpryMenuBasic.css' rel='stylesheet'/>
<script type='text/javascript' src='../Spry-UI-1.7/includes/SpryDOMUtils.js'></script>
<script type='text/javascript' src='../Spry-UI-1.7/includes/SpryDOMEffects.js'></script>
<script type='text/javascript' src='../Spry-UI-1.7/includes/SpryWidget.js'></script>
<script type='text/javascript' src='../Spry-UI-1.7/includes/SpryMenu.js'></script>
<script type='text/javascript' src='../Spry-UI-1.7/includes/plugins/MenuBar2/SpryMenuBarKeyNavigationPlugin.js'></script>
<script type='text/javascript' src='../Spry-UI-1.7/includes/plugins/MenuBar2/SpryMenuBarIEWorkaroundsPlugin.js'></script>
<script type="text/xml">
<!--
<oa:widgets>
  <oa:widget wid="2141544" binding="#MenuBar" />
</oa:widgets>
-->
</script>
<script src="../Scripts/googlefont_ubuntu.js" type="text/javascript"></script>
<style type="text/css">
  <!--
  .error { color: #f00; font-weight: bold; font-size: 1.2em; }
  .success {
	color: #FFF;
font-weight; bold; 	font-size: 1.2em;
}
  fieldset { width: 90%; }
  legend { font-size: 18px; color:#FFF }
  .note { font-size: 18px; }
  -->
  </style>
</head>

<body>
<div id="wrapper">
  <div id="topSpacer">&nbsp;</div>
  <div id="header">&nbsp;</div>
  <div id="mainLinks">
    <ul id="MenuBar">
      <li><a href="../index.html">home</a></li><!--indice-->
      <li><a href="../maurizio/biografia.html">chi sono</a></li><!--biografia-->
      <li> <a href="#">progetti</a><!--inizio progetti-->
      	<ul>
          <li><a href="../progetti/corsa.html">a piedi nudi nella neve</a>
            <ul>
               <li><a href="../progetti/corsa_4.html">Aprica (SO) - 3 Marzo 2013</a></li>
               <li><a href="../progetti/corsa_3.html">S. Stefano D'Aveto (GE) - 6 Gennaio 2012</a></li>
               <li><a href="../progetti/corsa_2.html">Oltre Il Colle (BG) - 30 Dicembre 2010</a></li>
               <li><a href="../progetti/corsa_1.html">Roncobello (BG) - 2 Gennaio 2010</a></li>
            </ul>
          </li>
          <li><a href="../progetti/semina.html">L'Umana patata</a>
            <ul>
               <li><a href="../progetti/semina_4_premessa.html">Montevecchia (LC) - 26 Febbraio 2012</a></li>
               <li><a href="../progetti/semina_3.html">Cernusco sul Naviglio (MI) - 14 Maggio 2011</a></li>
               <li><a href="../progetti/semina_2.html">Oltre Il Colle (BG) - 15 Maggio 2010</a></li>
               <li><a href="../progetti/semina_1.html">Roncobello (BG) - 2 Maggio 2009</a></li>
            </ul>
          </li>
          <li><a href="../progetti/consulenze.html">consulenze</a></li>
          <li><a href="../progetti/laboratori.html">laboratori / proposte per la scuola</a></li>
          <li><a href="../progetti/conferenze.html">conferenze</a></li>
          <li><a href="../progetti/corsi.html">corsi</a></li>
        </ul>
      </li><!--fine progetti-->
      <li> <a href="../riflessioni/riflessioni.html">riflessioni</a></li><!--riflessioni-->
      <li><a href="../prossimi_eventi.html">prossimi eventi</a></li><!--prox eventi-->
      <li> <a href="../newsletter.html">newsletter</a></li><!--newsletter-->
      <li> <a href="index.php">contatti</a></li><!--contatti-->
    </ul>
    <script type="text/javascript">
// BeginOAWidget_Instance_2141544: #MenuBar
var MenuBar = new Spry.Widget.MenuBar2("#MenuBar", {
      widgetID: "MenuBar",
	  widgetClass: "MenuBar  MenuBarLeftShrink",
	  insertMenuBarBreak: true,
      mainMenuShowDelay: 100,
      mainMenuHideDelay: 200,
      subMenuShowDelay: 200,
      subMenuHideDelay: 200
      });
// EndOAWidget_Instance_2141544
    </script>
  </div>
  <div id="mainContainer"><!--inizio contenitore contenuti-->
  <h1>contatti</h1><!--titolo pagina-->
  <div id="main_content_left"><img src="../immagini/bio/maurizio.jpg" width="198" height="455" alt="maurizio cavagna" /></div><!--contenitore sinistro-->
  <div id="main_content_right">
    <div class="insideMC_R_left">
<fieldset>
<legend>Modulo Contatti</legend>

<?php

$GLOBALS['ct_recipient']   = 'maurizio@mauriziocavagna.it'; // Change to your email address!
$GLOBALS['ct_msg_subject'] = 'Modulo contatti da www.mauriziocavagna.it';

process_si_contact_form(); // Process the form, if it was submitted

if (isset($_SESSION['ctform']['error']) &&  $_SESSION['ctform']['error'] == true): /* The last form submission had 1 or more errors */ ?>
<span class="error">Si è verificato un errore.  Gli errori sono visualizzati in rosso.</span><br /><br />
<?php elseif (isset($_SESSION['ctform']['success']) && $_SESSION['ctform']['success'] == true): /* form was processed successfully */ ?>
<span class="success">Il codice di sicurezza è stato inserito correttamente ed il messaggio è stato inviato!</span><br /><br />
<?php endif; ?>

<form method="post" action="<?php echo $_SERVER['REQUEST_URI'] . $_SERVER['QUERY_STRING'] ?>" id="contact_form">
  <input type="hidden" name="do" value="contact" />

  <p>
    <strong>Nome*:</strong>&nbsp; &nbsp;<?php echo @$_SESSION['ctform']['name_error'] ?><br />
    <input type="text" name="ct_name" size="35" value="<?php echo htmlspecialchars(@$_SESSION['ctform']['ct_name']) ?>" />
  </p>

  <p>
    <strong>Email*:</strong>&nbsp; &nbsp;<?php echo @$_SESSION['ctform']['email_error'] ?><br />
    <input type="text" name="ct_email" size="35" value="<?php echo htmlspecialchars(@$_SESSION['ctform']['ct_email']) ?>" />
  </p>

  <p>
    <strong>Messaggio*:</strong>&nbsp; &nbsp;<?php echo @$_SESSION['ctform']['message_error'] ?><br />
    <textarea name="ct_message" style="width: 300px; height: 200px"><?php echo htmlspecialchars(@$_SESSION['ctform']['ct_message']) ?></textarea>
  </p>

  <p>
    <img id="siimage" style="border: 1px solid #000; margin-right: 15px" src="./securimage_show.php?sid=<?php echo md5(uniqid()) ?>" alt="CAPTCHA Image" align="left">
    <object type="application/x-shockwave-flash" data="./securimage_play.swf?audio_file=./securimage_play.php&amp;bgColor1=#fff&amp;bgColor2=#fff&amp;iconColor=#777&amp;borderWidth=1&amp;borderColor=#000" height="32" width="32">
    <param name="movie" value="./securimage_play.swf?audio_file=./securimage_play.php&amp;bgColor1=#fff&amp;bgColor2=#fff&amp;iconColor=#777&amp;borderWidth=1&amp;borderColor=#000">
    </object>
    &nbsp;
    <a tabindex="-1" style="border-style: none;" href="#" title="Refresh Image" onclick="document.getElementById('siimage').src = './securimage_show.php?sid=' + Math.random(); this.blur(); return false"><img src="./images/refresh.png" alt="Reload Image" onclick="this.blur()" align="bottom" border="0"></a><br />
    <br />
     <strong>Codice*:</strong><?php echo @$_SESSION['ctform']['captcha_error'] ?>
    <input type="text" name="ct_captcha" size="12" maxlength="8" />
  </p>

  <p>
    <br />
    <input type="submit" value="Invia Messaggio">
  </p>

</form>
</fieldset>
    </div>
    <div class="insideMC_R_right"><strong><em>Maurizio Cavagna</em></strong><br />
    e-mail: <a href="mailto:maurizio@mauriziocavagna.it">maurizio@mauriziocavagna.it</a><br />
    cell: +39 338 2965977</div>
    <div class="clear-both">&nbsp;</div>
  </div><!--contenitore destro-->
  <div class="clear-both">&nbsp;</div>
  </div><!--chiusura contenitore contenuti-->
  <div id="iTunes_linkContainer">&nbsp;</div><!--spaziatore-->
  <div id="footer">
    <div id="footerContent" class="footerText">&copy; 2012 Maurizio Cavagna. <a href="http://www.alfadesignstudio.it" target="_blank">Credits</a></div>
  </div>
</div>
</body>
</html>

<?php

// The form processor PHP code
function process_si_contact_form()
{
  $_SESSION['ctform'] = array(); // re-initialize the form session data

  if ($_SERVER['REQUEST_METHOD'] == 'POST' && @$_POST['do'] == 'contact') {
  	// if the form has been submitted
  	
    foreach($_POST as $key => $value) {
      if (!is_array($key)) {
      	// sanitize the input data
        if ($key != 'ct_message') $value = strip_tags($value);
        $_POST[$key] = htmlspecialchars(stripslashes(trim($value)));
      }
    }

    $name    = @$_POST['ct_name'];    // name from the form
    $email   = @$_POST['ct_email'];   // email from the form
    $message = @$_POST['ct_message']; // the message from the form
    $captcha = @$_POST['ct_captcha']; // the user's entry for the captcha code
    $name    = substr($name, 0, 64);  // limit name to 64 characters

    $errors = array();  // initialize empty error array

    if (isset($GLOBALS['DEBUG_MODE']) && $GLOBALS['DEBUG_MODE'] == false) {
      // only check for errors if the form is not in debug mode
      
      if (strlen($name) < 3) {
        // name too short, add error
        $errors['name_error'] = 'Your name is required';
      }

      if (strlen($email) == 0) {
        // no email address given
        $errors['email_error'] = 'Email address is required';
      } else if ( !preg_match('/^(?:[\w\d]+\.?)+@(?:(?:[\w\d]\-?)+\.)+\w{2,4}$/i', $email)) {
        // invalid email format
        $errors['email_error'] = 'Email address entered is invalid';
      }

      if (strlen($message) < 20) {
        // message length too short
        $errors['message_error'] = 'Please enter a message';
      }
    }

    // Only try to validate the captcha if the form has no errors
    // This is especially important for ajax calls
    if (sizeof($errors) == 0) {
      require_once dirname(__FILE__) . '/securimage.php';
      $securimage = new Securimage();
      
      if ($securimage->check($captcha) == false) {
        $errors['captcha_error'] = 'Incorrect security code entered<br />';
      }
    }

    if (sizeof($errors) == 0) {
      // no errors, send the form
      $time       = date('r');
      $message = "A message was submitted from the contact form.  The following information was provided.<br /><br />"
                    . "Name: $name<br />"
                    . "Email: $email<br />"
                    . "Message:<br />"
                    . "<pre>$message</pre>"
                    . "<br /><br />IP Address: {$_SERVER['REMOTE_ADDR']}<br />"
                    . "Time: $time<br />"
                    . "Browser: {$_SERVER['HTTP_USER_AGENT']}<br />";

      $message = wordwrap($message, 70);

      if (isset($GLOBALS['DEBUG_MODE']) && $GLOBALS['DEBUG_MODE'] == false) {
      	// send the message with mail()
        mail($GLOBALS['ct_recipient'], $GLOBALS['ct_msg_subject'], $message, "From: {$GLOBALS['ct_recipient']}\r\nReply-To: {$email}\r\nContent-type: text/html; charset=ISO-8859-1\r\nMIME-Version: 1.0");
      }

      $_SESSION['ctform']['error'] = false;  // no error with form
      $_SESSION['ctform']['success'] = true; // message sent
    } else {
      // save the entries, this is to re-populate the form
      $_SESSION['ctform']['ct_name'] = $name;       // save name from the form submission
      $_SESSION['ctform']['ct_email'] = $email;     // save email
      $_SESSION['ctform']['ct_message'] = $message; // save message

      foreach($errors as $key => $error) {
      	// set up error messages to display with each field
        $_SESSION['ctform'][$key] = "<span style=\"font-weight: bold; color: #f00\">$error</span>";
      }

      $_SESSION['ctform']['error'] = true; // set error floag
    }
  } // POST
}

$_SESSION['ctform']['success'] = false; // clear success value after running
