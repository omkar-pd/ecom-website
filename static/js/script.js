const form = document.getElementById("form");
const applyFilter = document.querySelector(".apply-filter");
const downloadReport = document.querySelector(".download-report");
const filter = document.querySelector(".filter");
const wrapper = document.querySelector(".wrapper");
const rightMenu = document.querySelector(".right-menu");
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
