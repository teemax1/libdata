// var currentDate= new Date(new Date().getTime() + 1 * 60 * 60 * 500);
// var day = currentDate.getDate();
// var month =currentDate.getMonth();
// var year = currentDate.getFullYear();
// var montharray= new Array();
// montharray[0]= 'January';
// montharray[1]= 'February';
// montharray[2]= 'March';
// montharray[3]= 'April';
// montharray[4]= 'May';
// montharray[5]= 'June';
// montharray[6]= 'July';
// montharray[7]= 'August';
// montharray[8]= 'September';
// montharray[9]= 'October';
// montharray[10]= 'November';
// montharray[11]= 'December';

// document.write(montharray[month]+ " " + day + ", " + year +" ,"+ currentDate);

// const val= new Date();
// document.getElementById('t').innerHTML=val;



function fn1(){
    let text = document.getElementById("fname").value;
let regy = /^[a-z]$/;
// let regy = /^[7-9]\d{9}$/;
if(regy.test(text)){
    // document.getElementById('art').style.color="green";
    // document.getElementById('art').style.fontSize="2%";
    // document.getElementById('art').style.visibility="visible";
    return false;

    
}else{
    document.getElementById('art').style.color="red";
    document.getElementById('art').style.fontSize="2%";
    document.getElementById('art').style.visibility="visible";
    document.getElementById('art').style.borderBottom="2px solid red";
true;
}
};