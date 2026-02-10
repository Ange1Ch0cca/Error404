const btn = document.getElementById("togglePassword");
const input = document.getElementById("password");

btn.addEventListener("click", () => {
  const show = input.type === "password";
  input.type = show ? "text" : "password";
  btn.textContent = show ? "OCULTAR" : "MOSTRAR";
});
