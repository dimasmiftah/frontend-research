// const apiUrl = 'https://fcctop100.herokuapp.com/api/fccusers/top/alltime';

// PROMISE
// function getTop100Campers() {
//     fetch(apiUrl)
//         .then((r) => r.json())
//         .then((json) => {
//             console.log(json[0]);
//         }).catch((error) => {
//             console.log('failed');
//         });
// }
// getTop100Campers();


// ASYNC AND AWAIT
// async function getTop100Campers() {
//     const response = await fetch(apiUrl);
//     const json = await response.json();

//     console.log(json[0]);
// }
// getTop100Campers();

// CHALLENGE
function resolveAfter3Seconds() {
    return new Promise(resolve => {
        setTimeout(() => {
            resolve('resolved');
        }, 3000);
    });
}
// resolveAfter3Seconds().then((data) => {
//     console.log(data);
// });

async function getDataAsync() {
    const result = await resolveAfter3Seconds();
    console.log(result);

}
getDataAsync();