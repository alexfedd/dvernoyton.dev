let phoneInputFields = document.querySelectorAll("#phone");
phoneInputFields = [...phoneInputFields, document.querySelector("#phone-modal")]
phoneInputFields.forEach((phoneInputField) => {
  const phoneInput = window.intlTelInput(phoneInputField, {
    preferredCountries: ["ru", "by", "kz"],
    initialCountry: "ru",
    formatAsYouType: true,
    utilsScript:
      "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
  });

  // Инициализация IMask
  let phoneMask;

  function updateMask() {
    const countryData = phoneInput.getSelectedCountryData();
    const dialCode = countryData.dialCode;
    const maskPattern = `+${dialCode} (000) 000-00-00`;

    if (phoneMask) {
      phoneMask.updateOptions({ mask: maskPattern });
    } else {
      phoneMask = IMask(phoneInputField, { mask: maskPattern });
    }
  }

  // Обновление маски при инициализации
  updateMask();

  // Обновление маски при смене страны
  phoneInputField.addEventListener("countrychange", () => {
    updateMask();
  });
});
