function formValidation() {
    var cardholder_name = document.getElementById('cardname').value;
    var card_num = document.getElementById('cardnumber').value;
    var expiry_date = document.getElementById('carddate').value;
    var card_cvc = document.getElementById('cardCVC').value;
    var email = document.getElementById('email').value;

    var cardnum_regex = /^[0-9]{16}$/;
    var expirydate_regex = /^(0[1-9]|1[0-2])\/?([0-9]{4}|[0-9]{2})$/;
    var cardcvc_regex = /^[0-9]{3,4}$/;
    var email_regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;


if (!email.match(email_regex)) {
    alert('Invalid email address.');
    return false;
  }

if (cardholder_name === '') {
    alert('Invalid cardholder name.');
    return false;
  }

  if (!card_num.match(cardnum_regex)) {
    alert('Invalid card number.');
    return false;
  }

  if (!expiry_date.match(expirydate_regex)) {
    alert('Invalid expiry date.');
    return false;
  }

  if (!card_cvc.match(cardcvc_regex)) {
    alert('Invalid CVC number.');
    return false;
  }

  else {
  return true;
}
}



