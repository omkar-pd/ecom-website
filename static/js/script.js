const form = document.getElementById("form");
const applyFilter = document.querySelector(".apply-filter");
const downloadReport = document.querySelector(".download-report");
const filter = document.querySelector(".filter");
const wrapper = document.querySelector(".wrapper");
const rightMenu = document.querySelector(".right-menu");
const prices = document.querySelector(".prices");
const other = document.querySelector(".other");
form.addEventListener("change", () => {
  applyFilter.disabled = false;
});
downloadReport.addEventListener("click", () => {
  window.print();
});

filter.addEventListener("click", () => {
  wrapper.classList.toggle("column-reverse");
  rightMenu.classList.toggle("show");
});
other.addEventListener("change", () => {
  if (other.checked) {
    const input = document.createElement("input");
    const input1 = document.createElement("input");
    const inputWrapper = document.createElement("div");
    input.type = "number";
    input1.type = "number";
    input.placeholder = "Min Price";
    input1.placeholder = "Max Price";
    prices.appendChild(inputWrapper);
    inputWrapper.classList.add("input-wrapper");
    inputWrapper.appendChild(input);
    inputWrapper.appendChild(input1);
    applyFilter.addEventListener("click", () => {
      let price = input.value + "-" + input1.value;
      other.value = price;
    });
  }
});
