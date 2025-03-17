const catalogItemsLink = document.querySelectorAll("#form-modal");
const catalogModal = document.querySelector(".modal");
function getScrollbarWidth() {
  // Creating invisible container
  const outer = document.createElement("div");
  outer.style.visibility = "hidden";
  outer.style.overflow = "scroll"; // forcing scrollbar to appear
  outer.style.msOverflowStyle = "scrollbar"; // needed for WinJS apps
  document.body.appendChild(outer);

  // Creating inner element and placing it in the container
  const inner = document.createElement("div");
  outer.appendChild(inner);

  // Calculating difference between container's full width and the child width
  const scrollbarWidth = outer.offsetWidth - inner.offsetWidth;

  // Removing temporary elements from the DOM
  outer.parentNode?.removeChild(outer);

  return scrollbarWidth;
}
catalogItemsLink.forEach((catalogItemLink) => {
  catalogItemLink.addEventListener("click", (e) => {
    const scrollWidth = getScrollbarWidth()
    catalogModal.style.paddingRight = `${scrollWidth}px`;
    catalogModal.classList.add("modal--opened");
    document.body.style.marginRight = `${scrollWidth}px`;
  });
});

catalogModal.addEventListener("click", async (e) => {
  if (e.target === e.currentTarget || e.target.closest(".modal__close")) {
    catalogModal.classList.remove("modal--opened");
    catalogModal.style.paddingRight = "";
    document.body.style.marginRight = ``;
  }
});

const modalButton = document.querySelector("#modal-button");
const modalForm = document.querySelector(".modal__content");
modalForm.addEventListener("submit", async (e) => {
  e.preventDefault();

  const productName = document.querySelector(
    ".product-banner__title"
  ).textContent;
  const productCounter = document.querySelector(".product-banner__input").value;
  const productSize = document.querySelector(
    '.product-banner__label input[name="size"]:checked ~ .product-banner__label-text'
  )?.textContent;
  const productNal = document.querySelector(
    '.product-banner__label input[name="nal"]:checked ~ .product-banner__label-text'
  )?.textContent;
  const productSeria = document.querySelector(
    '.product-banner__label input[name="seria"]:checked ~ .product-banner__label-text'
  )?.textContent;
  const userPhone = document.querySelector("#phone-modal").value;
  const userName = document.querySelector("#name-modal").value;
  const userEmail = document.querySelector("#email-modal").value;

  const data = {
    ...(userName && { name: userName }),
    ...(userEmail && { email: userEmail }),
    ...(userPhone && { phone: userPhone }),
    ...(productName && { productName: productName }),
    ...(productCounter && { count: productCounter }),
    ...(productSize && { size: productSize }),
    ...(productNal && { nalichnik: productNal }),
    ...(productSeria && { seria: productSeria }),
  };
  const formData = new FormData();
  Object.keys(data).forEach((key) => {
    formData.append(key, data[key]);
  });
  modalButton.textContent = "Отправка...";
  modalButton.setAttribute("disabled", "true");

  try {
    const response = await fetch("/wp-content/themes/dvernoyton/send.php", {
      method: "POST",
      body: formData,
    });

    if (!response.ok) {
      throw new Error("Не предвиденная ошибка");
    }
    console.log(await response.json());
    modalButton.textContent = "Данные отправлены!";
  } catch (error) {
    console.error(error);
    modalButton.textContent = "Произошла ошибка!";
  }
});
