// function getData( dataId, getNextData){

//     setTimeout(() => {
// console.log("data fetched for id : ",dataId);
// if (getNextData){

// }

// getNextData();
//     },2000)
// }
// //callback hell
// getData (1,() => {
  
//     getData(2,() => {
//         getData(3,() => {
//             console.log("All data fetched");
//         })
//     })
// });

// let promise = new Promise ((resolve,reject ) =>{
//     console.log("fetching  date from database");
// resolve();
// reject();
// })


// const getPromise = () => {
//    new Promise ((resolve,reject) => {
//         consle.log ("fetching data from database");
//         resolve("reponse from database succesfully");
//     });
// };

// let Promise = getPromise();
// promise.then( (res)=> {
//     console.log("promise fullfilled",res);

// });
// promise.catch((err)=> {
//     console.log("promise rejected",err);  

// });
const getPromise = () => {
  return new Promise((resolve, reject) => {
    console.log("fetching data from database");
    resolve("response from database successfully");
  });
};

let promise = getPromise();
promise.then((res) => {
  console.log("promise fulfilled", res);
});
promise.catch((err) => {
  console.log("promise rejected", err);
});