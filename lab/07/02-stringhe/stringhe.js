function onClick(id) {
  const result = document.querySelector("div");
  let text = result.innerHTML;
  switch (id) {
    case "0":
      text = text.toUpperCase();
      break;
    case "1":
      text = text.toLowerCase();
      break;
    case "2":
      text = text.substring(5, text.length) + text.substring(0, 5);
      break;
    default:
      break;
  }
  result.innerHTML = text;
}