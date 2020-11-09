// Fetch exchange rate data from api
$.getJSON("https://api.fixer.io/latest?base=ZAR", function(data) {
  var currencies = [];
  $.each(data.rates, function(currency, rate) {
    // Currency options dropdown menu
    currencies.push("<option id='" + currency.toLowerCase() + "' value='" + rate + "' >" + currency + "</option>");
  });
  $(".currency-list").append(currencies);
})

//Calculate and output the new amount
function exchangeCurrency() {
  var amount = $(".amount").val();
  var rateFrom = $(".currency-list")[0].value;
  var rateTo = $(".currency-list")[1].value;
  if ((amount - 0) != amount || (''+amount).trim().length == 0) {
    $(".results").html("0");
    $(".error").show()
  } else {
    $(".error").hide()
    if (amount == undefined || rateFrom == "--Select--" || rateTo == "--Select--") {
      $(".results").html("0");

    } else {
      $(".results").html((amount * (rateTo * (1 / rateFrom))).toFixed(2));
    }
  }
}