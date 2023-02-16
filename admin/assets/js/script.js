const date = new Date();

let day = date.getDate();
let month = date.toLocaleString('default', {month: 'long'});
let year = date.getFullYear();



let currentDate = `${day} ${month} ${year}`

document.getElementById('tanggal').innerHTML = currentDate;