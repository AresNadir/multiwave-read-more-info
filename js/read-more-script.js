const readMoreBtns = document.querySelectorAll(".hiddenMessage_readMoreBtn");

readMoreBtns.forEach((readMoreBtn) => {
  readMoreBtn.addEventListener("click", () => {
    const hiddenMessage = readMoreBtn.closest(".hiddenMessageShortcode").querySelector(".hiddenMessage_container");
    hiddenMessage.classList.toggle("hiddenMessage_show");
    readMoreBtn.style.display = "none";
  });
});