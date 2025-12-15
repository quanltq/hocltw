// script.js
function changeText() {
  // đổi nội dung tiêu đề
  document.getElementById("title").innerText = "Nội dung đã thay đổi!";

  // thêm class highlight cho đoạn văn đầu tiên
  const descriptions = document.getElementsByClassName("description");
  descriptions[0].classList.add("highlight");

  // tô vàng (highlight) cho phần tử list đầu tiên
  const firstItem = document.querySelector("#list li");
  firstItem.classList.add("highlight");
}
