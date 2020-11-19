const lorem ='This is an admin hub for the organisation to monitor its progress on a timely basis. Make sure that all data are inputed correctly.Thanks';

function fn1() {
    let head = document.getElementById('h').innerHTML=lorem;
    
};
function fn2() {
    let head1 = document.getElementById('h').innerHTML=`Welcome to LibAcc`;
    
};

// function fn3(){
//     let ad= document.querySelector('div').innerHTML=lorem;
    
// }


// function fn4(){
//     let ad1= document.getElementById('div').src='img/original.jpg';
    
// }
const val= new Date();
document.getElementById('time').innerHTML=`Welcome to LibAcc, You can do amazing things here.....Time:${val.toString()}`;

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

// document.write(montharray[month]+ " " + day + ", " + year)

function fn7(){
    alert('Do you want to logout of LibAcc?');
}



