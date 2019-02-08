// function addressmaker(address) {
//     const newAddress = {
//         city: address.city,
//         state: address.state,
//         country: 'Indonesia'
//     };
//     console.log(newAddress);

// }

function addressmaker(address) {
    const {
        city,
        state
    } = address;
    const newAddress = {
        city,
        state,
        country: 'Indonesia'
    };
    console.log(`${newAddress.city}, ${newAddress.state}, ${newAddress.country}`);

}

addressmaker({
    city: 'Bandung',
    state: 'Jawa Barat'
});