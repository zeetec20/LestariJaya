
function defaultPage(){
    document.getElementById("contentHome").style.zIndex = '4';
    document.getElementById("contentFertilizer").style.zIndex = '3';
    document.getElementById("contentNote").style.zIndex = '2';
    document.getElementById("contentSetting").style.zIndex = '1';
}

function showPage1(){
    defaultPage();
    document.getElementById("contentHome").style.zIndex = '5';
}

function showPage2(){
    defaultPage();
    document.getElementById("contentFertilizer").style.zIndex = '5';
}

function showPage3(){
    defaultPage();
    document.getElementById("contentNote").style.zIndex = '5';
}

function showPage4(){
    defaultPage();
    document.getElementById("contentSetting").style.zIndex = '5';
}

function showLoginPage(params) {
    document.getElementById("disableDesktop").style.display = "block";
    document.getElementById("loginPage").style.display = "block";
}

function closeLoginPage(params) {
    document.getElementById("disableDesktop").style.display = "none";
    document.getElementById("loginPage").style.display = "none";
}

function showResult(params) {
    var valueShortBy = document.getElementById("shortBy").value;
    if (valueShortBy == 1) {
        document.getElementById("table1").style.zIndex = "4";
    document.getElementById("table2").style.zIndex = "3";
    document.getElementById("table3").style.zIndex = "2";
    document.getElementById("table4").style.zIndex = "1";
    }
    if (valueShortBy == 2) {
        document.getElementById("table1").style.zIndex = "4";
    document.getElementById("table2").style.zIndex = "3";
    document.getElementById("table3").style.zIndex = "2";
    document.getElementById("table4").style.zIndex = "1";
        document.getElementById("table2").style.zIndex = "5";
    }
    if (valueShortBy == 3) {
        document.getElementById("table1").style.zIndex = "4";
    document.getElementById("table2").style.zIndex = "3";
    document.getElementById("table3").style.zIndex = "2";
    document.getElementById("table4").style.zIndex = "1";
        document.getElementById("table3").style.zIndex = "5";
    }
    if (valueShortBy == 4) {
        document.getElementById("table1").style.zIndex = "4";
    document.getElementById("table2").style.zIndex = "3";
    document.getElementById("table3").style.zIndex = "2";
    document.getElementById("table4").style.zIndex = "1";
        document.getElementById("table4").style.zIndex = "5";
    }
}

function imgUserClick(params) {
    var topPageIconUser = document.getElementById("pageIconUser");

    if (topPageIconUser.style.top === "7.9%") {
        topPageIconUser.style.top = "-100%";
    }
    else {
        topPageIconUser.style.top = "7.9%";
    }
}

function imgUserOut(params) {
    
}