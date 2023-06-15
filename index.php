<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    if(isset($_POST['submit']))
    {

        $currencyfrom   = $_POST['currencyfrom'];
        $currencyto     = $_POST['currencyto'];
        $Amount         = $_POST['Amount'];
        $Service        = $_POST['ServiceName'];
        $EmailAddress   = $_POST['EmailAddress'];
        $FirstName      = $_POST['FirstName'];
        $LastName       = $_POST['LastName'];
        $TelePhone      = $_POST['Code'].'-'.$_POST['TeleNumber'];

        $FullName = $FirstName.$LastName;

        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);
        
        try {
            //Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.hostinger.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'info@clearemit.com';                     //SMTP username
            $mail->Password   = 'Whyisthat@2023';                       //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            //Recipients
            $mail->setFrom('info@clearemit.com', 'Clearemit');
            $mail->addAddress($EmailAddress, $FullName);     //Add a recipien
            $mail->AddCC('clearemit@gmail.com', 'Clearemit');
        
            //Content
            $mail->isHTML(true);
            $mail->Subject = 'Get a Quote';
            $mail->Body    = "
            <div style='font-family: arial; border: 1px solid #d3d3d366; border-radius: 10px;'>
                <table style='width:100%; '>
                    <tr>
                        <td>
                            <div style='border-radius: 10px 10px 0px 0px; align-item: center; background: #fcf9fe; padding: 40px 0;text-align:center;'>
                                <img src='https://clearemit.com/wp-content/uploads/2023/01/Black-logo-no-background.png' width='150px'; />
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div style='color: black; padding: 0px 15px;'>
                                <br>
                                <br>
                                    Dear $FullName,
                                <br>
                                <br>
                                    Thank you for submitting your Quotes to Clearemit. We appreciate your time and interest in our services.
                                <br>
                                <br>
                                    We have received the following information from your submission:
                                <br>
                                <br>  
                                    CurrencyFrom: $currencyfrom
                                    <br>
                                    Currency To: $currencyfrom
                                    <br>
                                    Amount: $Amount
                                    <br>
                                    Service: $Service
                                    <br>
                                    Email Address: $EmailAddress
                                    <br>
                                    First Name: $FirstName
                                    <br>
                                    Last Name: $LastName
                                    <br>
                                    TelePhone: $TelePhone
                                    <br>
                                <br>
                                    Our team will review the information you have provided, and we will get back to you as soon as possible with any further instructions or updates.
                                    <br>
                                <br>
                                    Thank you once again for choosing Clearemit. We look forward to assisting you further.
                                    <br>
                                <br>
                                    Best regards,
                                    <br>
                                    Clearemit Administration Team
                                    <br>
                                <br>
                                    Feel free to customize the email template according to your specific requirements and branding.
                                <br>
                                <br>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            ";
        
            $mail->send();
            header("Location:thankyou.php");
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi Form</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
</head>
<body>
<div class="wrapper">
    <div class="multistepform">
        <div class="container">
            <div class="formone">
                <form id="regForm" method="post">
                    <h1>Award-Winning Currency Transfers</h1>
                    <!-- One "tab" for each step in the form: -->
                    <div class="tab">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="feildmade">
                                        <select name="CurrencySell" name="currencyfrom" id="CurrencySell" class="form-select" title="Please select a currency." required="">
                                            <option value="">Currency From</option>
                                            <option value="GBP">Pound Sterling</option>
                                            <option value="EUR">Euro</option>
                                            <option value="USD">US Dollar</option>
                                            <option value="CAD">Canadian Dollar</option>
                                            <option value="AUD">Australian Dollar</option>
                                            <option value="NZD">New Zealand Dollar</option>
                                            <option value="JPY">Japanese Yen</option>
                                            <option value="ZAR">South African Rand</option>
                                            <option value="CHF">Swiss Franc</option>
                                            <option value="disabled" disabled="disabled">- - - - -</option>
                                            <option value="AED">Arab Emirate Dirham</option>
                                            <option value="BWP">Botswana Pula</option>
                                            <option value="BGN">Bulgarian Lev</option>
                                            <option value="CNY">Chinese Yuan</option>
                                            <option value="CZK">Czech Koruna</option>
                                            <option value="DKK">Danish Krone</option>
                                            <option value="HKD">Hong Kong Dollar</option>
                                            <option value="HUF">Hungarian Forint</option>
                                            <option value="ILS">Israeli Shekel</option>
                                            <option value="MUR">Mauritius Rupee</option>
                                            <option value="NOK">Norwegian Krone</option>
                                            <option value="PLN">Polish Zloty</option>
                                            <option value="RON">Romanian Leu</option>
                                            <option value="SGD">Singapore Dollar</option>
                                            <option value="SEK">Swedish Krona</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="feildmade">
                                        <select name="CurrencySell" name="currencyto" id="CurrencySell" class="form-select" title="Please select a currency." required="">
                                            <option value="">Currency From</option>
                                            <option value="GBP">Pound Sterling</option>
                                            <option value="EUR">Euro</option>
                                            <option value="USD">US Dollar</option>
                                            <option value="CAD">Canadian Dollar</option>
                                            <option value="AUD">Australian Dollar</option>
                                            <option value="NZD">New Zealand Dollar</option>
                                            <option value="JPY">Japanese Yen</option>
                                            <option value="ZAR">South African Rand</option>
                                            <option value="CHF">Swiss Franc</option>
                                            <option value="disabled" disabled="disabled">- - - - -</option>
                                            <option value="AED">Arab Emirate Dirham</option>
                                            <option value="BWP">Botswana Pula</option>
                                            <option value="BGN">Bulgarian Lev</option>
                                            <option value="CNY">Chinese Yuan</option>
                                            <option value="CZK">Czech Koruna</option>
                                            <option value="DKK">Danish Krone</option>
                                            <option value="HKD">Hong Kong Dollar</option>
                                            <option value="HUF">Hungarian Forint</option>
                                            <option value="ILS">Israeli Shekel</option>
                                            <option value="MUR">Mauritius Rupee</option>
                                            <option value="NOK">Norwegian Krone</option>
                                            <option value="PLN">Polish Zloty</option>
                                            <option value="RON">Romanian Leu</option>
                                            <option value="SGD">Singapore Dollar</option>
                                            <option value="SEK">Swedish Krona</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="feildmade">
                                        <select name="Amount" id="Amount" class="form-select" title="Please select an amount." required="">
                                            <option value="" selected="selected">Amount</option>
                                            <option class="under" value="Under 2,000">Under 2,000</option>
                                            <option class="over" value="2,000 - 5,000">2,000 - 5,000</option>
                                            <option class="over" value="5,000 - 10,000">5,000 - 10,000</option>
                                            <option class="over" value="10,000 - 25,000">10,000 - 25,000</option>
                                            <option class="over" value="25,000 - 50,000">25,000 - 50,000</option>
                                            <option class="over" value="50,000 - 100,000">50,000 - 100,000</option>
                                            <option class="over" value="100,000 - 250,000">100,000 - 250,000</option>
                                            <option class="over" value="Over 250,000">Over 250,000</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="feildmade">
                                        <select name="ServiceName" id="Service" class="form-select" required="">
                                            <option value="">Choose Service</option>
                                            <option value="Transfer">Currency Transfer</option>
                                            <option value="Travel Money">Holiday Money (Cash)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="feildmade">
                                        <input type="email" class="form-control" name="EmailAddress" placeholder="Email Address">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab">Contact Info:
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="feildmade">
                                        <input type="text" class="form-control" name="FirstName" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="feildmade">
                                        <input type="text" class="form-control" name="LastName" placeholder="Surname">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="feildmade myfeild">
                                        <input type="text" value="(UK) +44" class="smallwidth" disabled>
                                        <input type="hidden" value="(UK) +44" name="Code" class="smallwidth">
                                        <input type="tel" name="TeleNumber" pattern="^[^0-9]*([0-9][^0-9]*){1,15}$" id="Telephone" placeholder="Telephone" maxlength="20" class="input required form-control joint-input" title="Please enter a valid number." required="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="overflow:auto;">
                        <div style="float:right;">
                            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                            <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
    document.getElementById("nextBtn").type = "submit";
    document.getElementById("nextBtn").name = 'submit';
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>
</body>
</html>