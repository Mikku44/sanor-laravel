async function addFooter() {
  const resp = await fetch("nav.html");
  const html = await resp.text();
  document.body.insertAdjacentHTML("beforebegin", html);
}