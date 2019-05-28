// let mahasiswa = {
//   nama : "budi",
//   nrp : "11210012",
//   email : "budi@gmail.com"
// }
//
// console.log(mahasiswa);
// console.log(JSON.stringify(mahasiswa));


//vanila javascript
// let xhr = new XMLHttpRequest();
// xhr.onreadystatechange = function(){
//   if(xhr.readyState == 4 && xhr.status == 200){
//     let mahasiswa = JSON.parse(this.responseText);
//     console.log(mahasiswa);
//
//   }
// }
//
// xhr.open("GET", 'coba.json', true);
// xhr.send();


//jquery
$.getJSON('coba.json', function(data){
  console.log(data);
});
