import {
    Animal,
    Cat
} from "./animal.js";

// ANIMAL
// let cat = new Animal('cat', 4);
// cat.legs = 1;
// cat.makeNoise('Meow');

// console.log(cat.legs);
// console.log(cat.metaData);

// console.log(Animal.return10());

// CAT
let cat = new Cat('cat', 4);
cat.makeNoise();
console.log(cat.metaData);