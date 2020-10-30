
const elemForm = document.querySelector('#elemForm');

async function sendData() {
  try {
    let response = await fetch('comments.php', {
      method: "POST",
      body: new FormData(elemForm),
    });
    
  } catch (err) {
    console.error(err);
  }
}

elemForm.addEventListener('submit', function validateForm(e) {
  e.preventDefault ();

  let rule = /\+7\(\d{3}\)\d{3}-\d{2}-\d{2}/;
  let form = document.forms["myForm"]["phone"].value;

  if (!form.match(rule)) {
    document.querySelector('#errMes').innerHTML = "Неверно введен номер телефона!";
    return false;
  } else {
    document.querySelector('#errMes').innerHTML = "Ok, отправляю данные";
    sendData();

    elemForm.reset();
  }
});