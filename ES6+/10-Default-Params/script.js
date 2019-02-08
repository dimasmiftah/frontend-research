function add(numArray = []) { //adding =[] so the code is doesn't error
    let total = 0;
    numArray.forEach(element => {
        total += element;
    });
    console.log(total);
}
add();