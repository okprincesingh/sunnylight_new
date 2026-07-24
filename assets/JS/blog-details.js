document.addEventListener("DOMContentLoaded", () => {
  fetch("blog.json")
    .then(response => response.json())
    .then(data => {
      // Banner
      document.getElementById("blog-title").textContent = data.title;
      document.getElementById("blog-description").textContent = data.description;
      document.getElementById("blog-date").textContent = data.date;
      document.getElementById("blog-readtime").textContent = data.readTime;
      document.getElementById("blog-banner-img").src = data.bannerImg;

      // Blog Content
      const contentContainer = document.getElementById("blog-content");
      data.content.forEach(section => {
        const h2 = document.createElement("h2");
        h2.textContent = section.heading;

        const p = document.createElement("p");
        p.textContent = section.text;

        contentContainer.appendChild(h2);
        contentContainer.appendChild(p);
      });
    })
    .catch(error => console.error("Error loading blog data:", error));
});
