const btnNewFolder = document.querySelector("#btn-new-folder");
const btnCloseFolderModal = document.querySelector("#close-folder-modal");
const btnCloseLinkModal = document.querySelector("#close-link-modal");
const folderFormModal = document.querySelector("#folder-form-modal");
const btnNewLink = document.querySelector("#btn-new-link");
const linkFormModal = document.querySelector("#link-form-modal");

btnNewFolder.addEventListener("click", (e) => {
  folderFormModal.style.display = "block";
  document.querySelector(".form-control").focus();
});
btnNewLink.addEventListener("click", (e) => {
  linkFormModal.style.display = "block";
  document.querySelector(".form-control").focus();
});
btnCloseFolderModal.addEventListener("click", (e) => {
  folderFormModal.style.display = "none";
});
btnCloseLinkModal.addEventListener("click", (e) => {
  linkFormModal.style.display = "none";
});
window.addEventListener("click", (e) => {
  if (e.target == linkFormModal) {
    linkFormModal.style.display = "none";
  }
});

window.addEventListener("click", (e) => {
  if (e.target == folderFormModal) {
    folderFormModal.style.display = "none";
  }
});
