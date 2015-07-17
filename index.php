<?php
 
if(isset($_POST['formSubmit'])) 
{
  $varCountry = $_POST['formCountry'];
  $errorMessage = "";
   
  if(empty($varCountry)) 
  {
    $errorMessage = "<li>You forgot to select a country!</li>";
  }
   
  if($errorMessage != "") 
  {
    echo("<p>There was an error with your form:</p>\n");
    echo("<ul>" . $errorMessage . "</ul>\n");
  } 
  else
  {
    // note that both methods can't be demonstrated at the same time
    // comment out the method you don't want to demonstrate
 
    // method 1: switch
    $redir = "US.html";
    switch($varCountry)
    {
      case "UG": $redir = "UG.html"; break;
      case "TZ": $redir = "TZ.html"; break;
      case "K": $redir = "K.html";break;
      case "Uganda": $redir = "Uganda.html"; break;
      case "Tanzania": $redir = "Tanzania.html"; break;
      case "Burundi": $redir = "Burundi.html"; break;
      case "Kenya": $redir = "Kenya.html"; break;
      default: echo("Error!"); exit(); break;
    }
    echo " redirecting to: $redir ";
     
    // header("Location: $redir");
    // end method 1
     
    // method 2: dynamic redirect
    //header("Location: " . $varCountry . ".html");
    // end method 2
 
    exit();
  }
}
?>
