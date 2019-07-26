let auto = ["Audi", "BMW", "Citroen", "Dacia", "Honda"];

console.log(auto[2]); // Citroen

auto[5] = "Hyundai";

console.log(auto.length);

auto.push("Bentley"); // The push() method adds new items to the end of an array

auto.shift(); // Remove the first item of an array Audi in this case

auto.pop(); // The pop() method removes the last element of an array, and returns that element.

function showAutoArray() {
    for(var i = 0; i < auto.length; i++)
    document.querySelector("body").innerHTML += "<h4>" + auto[i] + "</h4>" + "<br>";
}

showAutoArray();
