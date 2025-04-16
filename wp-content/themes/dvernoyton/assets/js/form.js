const form = document.querySelector(".callback-form__form");

form?.addEventListener("submit", async function(e) {
  e.preventDefault();

  const formButton = form.querySelector(".callback-form__button");

  formButton.textContent = "Отправка...";
  formButton.setAttribute("disabled", true);
  const formData = new FormData(this);
  try {
    const response = await fetch("/wp-content/themes/dvernoyton/send.php", {
      method: "POST",
      body: formData,
    });
    if (response.ok) {
      console.log(response.json());
      formButton.textContent = 'Успешно отправлено!'
    }
  }
  catch (err) {
    console.error(err);
    formButton.textContent = 'Ошибка отправки'
  }
});
