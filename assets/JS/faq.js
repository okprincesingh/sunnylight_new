/// <--======= FQA script =========-->
 
 
   document.addEventListener('DOMContentLoaded', function () {
  const faqs = document.querySelectorAll(".faq-item");

  faqs.forEach(item => {
    const question = item.querySelector(".faq-question");
    if (question) {
      question.addEventListener("click", () => {
        item.classList.toggle("active");
      });
    }
  });
});