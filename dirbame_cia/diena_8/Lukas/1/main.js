let array = [];

for(var i = 0; i < 50; i++) {
    array[i] = 1;
}

console.log(array);

let array1 = [];

for(var i = 1; i < 51; i++) {
    array1[i] = i;
    if(array1[i] % 2 == true) {
        console.log(i, "nelyginis");
    } else {
        console.log(i, "lyginis");
    }
}
