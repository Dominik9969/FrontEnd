document.addEventListener("DOMContentLoaded", () => {
  const body = document.body;
  const toggleBtn = document.getElementById("btn-dark-mode");

  // Controlla la preferenza salvata: se "light", applica la classe light-mode
  if (localStorage.getItem("theme") === "light") {
    body.classList.add("light-mode");
    toggleBtn.classList.remove("btn-dark", "text-white");
    toggleBtn.classList.add("btn-light", "text-dark");
  }

  // Aggiunge l'evento di click per il toggle della modalità
  toggleBtn.addEventListener("click", () => {
    body.classList.toggle("light-mode");
    if (body.classList.contains("light-mode")) {
      localStorage.setItem("theme", "light");
      toggleBtn.classList.remove("btn-dark", "text-white");
      toggleBtn.classList.add("btn-light", "text-dark");
    } else {
      localStorage.removeItem("theme");
      toggleBtn.classList.remove("btn-light", "text-dark");
      toggleBtn.classList.add("btn-dark", "text-white");
    }
  });
});
