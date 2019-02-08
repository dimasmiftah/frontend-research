const personalInformation = {
    firstName: 'Dimas',
    lastName: 'Miftah',
    city: 'Bandung',
    state: 'Jawa Barat',
    zipCode: 40191
};

// const {
//     firstName,
//     lastName
// } = personalInformation;
// alert(`${firstName} ${lastName}`);

const {
    firstName: fn,
    lastName: ln
} = personalInformation;
alert(`${fn} ${ln}`);