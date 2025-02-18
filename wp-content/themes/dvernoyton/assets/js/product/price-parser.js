const productCountInput = document.querySelector(".product-banner__input");
const MIN_COUNT = 1;
const MAX_COUNT = 500;
productCountInput.addEventListener("input", (e) => {
  const input = e.target;
  const value = input.value.replace(/[^\d]/g, "");

  if (value !== "") {
    let numbericValue = Number(value);
    if (numbericValue < MIN_COUNT) numbericValue = MIN_COUNT;
    if (numbericValue > MAX_COUNT) numbericValue = MAX_COUNT;
    input.value = numbericValue;
  }

  updatePrice();
});

const optionInputs = document.querySelectorAll(".product-banner__label");

const priceContainer = document.querySelector(".product-banner__number");

const standardPrice = Number(priceContainer.innerHTML.replaceAll(/\D+/g, ""));

const addPrice = new Map();

optionInputs.forEach((input) => {
  const inputName = input.getAttribute("name");

  if (!addPrice.has(inputName)) addPrice.set(inputName, 0);

  input.addEventListener("change", handleOptionChange);
});

function handleOptionChange(e) {
  const inputName = e.target.getAttribute("name");
  const inputPrice = Number(e.target.getAttribute("data-cost"));
  addPrice.set(inputName, inputPrice);
  updatePrice();
}

function updatePrice() {
  let newPrice = standardPrice;
  for (const [_, price] of addPrice) {
    newPrice += price;
  }
  const count =
    productCountInput.value !== "" && productCountInput.value !== "0"
      ? Number(productCountInput.value)
      : 1;
  priceContainer.innerHTML = formatPrice(count * newPrice);
}

function formatPrice(num) {
  return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
}
