function keisti() {
    let x = document.querySelector("input").value;
    let ats = Math.PI * (x * x);
    document.querySelector("h2").innerHTML = Math.round(ats);
}
