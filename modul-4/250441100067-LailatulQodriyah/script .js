// let a = 5;
// let b= 7;

// console.log ("hasil dari a + b adalah: " + (a+b));
// console.log ("hasil dari a - b adalah: " + (a-b));

// let listbuku ={
//     judul="laskar pelangi",
//     penulis: "ela imup"
// }

// console.log ("judul buku: +buku.judul");

// let listjudulbuku = [
//     "laskar pelangi",
//     "bumi",
//     "bulan"
// ]

// console.log ("judul buku kedua:" + listjudulbuku [2])

// if (a>b){
//     console.log ("hallo");
// }else if (a<b){
//     console.log("hii");
// }else{
//     console.log ("ya");
// }

// for(let i=0; i< 10; i++){
//     console.log (i);
// }

// let x = 0;

// while (x < 5) {
//     console.log ("nilai x adalah :" + x);


// }

// do { 
//     console.log ("nilai x adalah: " + x);

//     x= x +1;
// } while (x<0);

// function tambah(a,b) {
//     console.log ("hasil dari a +b adalah : "+ (a+b));
// }
// tambah (10, 25);{
//     return a+b;
// }

// console.log (tambah(10, 25));


let judulweb = document.ElementById("judul");
judulweb.textcontent ="modul 4";

let tombol1=documentElementById("tombol1");
tombol1.add.EventListener
("click", function(){
    alert("tombol sudah diklik");

});

let body=document.getElementById("body");
let warna=document.getElementById("warna");

warna.addEventListener("change", function(){
    body.style.backgroundColor= warna.value;

})