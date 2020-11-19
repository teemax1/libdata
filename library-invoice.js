// function fn() {
//     let select=document.querySelectorAll("select").value;
//     let input=document.querySelectorAll("input").value;
//     if (select=="" && input=="") {
//         document.querySelectorAll("select").style.border="2px solid red";
//         document.querySelectorAll("input").style.border="2px solid red";
//         return true
        
//     } else {
//         false
//     }
    
// };



p= 50000;
function fn() {
    let paid = document.getElementById('paid').value;
let left=document.getElementById('left').value;
paid1 = paid<=p;
let left1 = p-paid;    
if (paid1&& left1 =="") {
    alert('fill in the amount');
    return true;
} else {
   false; 
}

}



