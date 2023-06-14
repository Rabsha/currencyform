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
                <form id="regForm" action="/action_page.php">
                    <h1>Award-Winning Currency Transfers</h1>
                    <!-- One "tab" for each step in the form: -->
                    <div class="tab">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="feildmade">
                                        <select name="CurrencySell" id="CurrencySell" class="form-select" title="Please select a currency." required="">
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
                                        <select name="CurrencySell" id="CurrencySell" class="form-select" title="Please select a currency." required="">
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
                                        <select name="Service" id="Service" class="form-select" title="Please select a service." required="">
                                            <option value="">Choose Service</option>
                                            <option value="Transfer" title="For changing a larger amount of currency and sending by international transfer. Buying a property, making an investment, bringing money home, etc." selected="">Currency Transfer</option>
                                            <option value="Travel Money" title="Foreign currency in cash delivered to your home by secure Royal Mail delivery.">Holiday Money (Cash)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="feildmade">
                                        <input type="email" class="form-control" placeholder="Email Address">
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
                                        <input type="text" class="form-control" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="feildmade">
                                        <input type="text" class="form-control" placeholder="Surname">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="feildmade">
                                        <input type="text" value="(UK) +44" disabled>
                                        <input name="Telephone" type="tel" pattern="^[^0-9]*([0-9][^0-9]*){1,15}$" id="Telephone" placeholder="Telephone" maxlength="20" class="input required form-control joint-input" title="Please enter a valid number." required="">
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