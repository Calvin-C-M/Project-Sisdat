const tableData = document.getElementsByClassName('table-data');
const menuButton = document.getElementsByClassName('menu-button');

const dataPimpinanDepartemen = document.getElementsByClassName('departement-buat-pimpinan');
const showPimpinanDepartemenButton = document.getElementsByClassName('show-departemen-pimpinan');

const dataStaffDepartemen = document.getElementsByClassName('departement-buat-staff');
const showStaffDepartemenButton = document.getElementsByClassName('show-departemen-staff');

const dataProkerDepartemen = document.getElementsByClassName('departement-buat-proker');
const showProkerDepartemenButton = document.getElementsByClassName('show-departemen-proker');

function anyDataOpen(index, dataArray, buttonArray){
    for(let i = 0; i < buttonArray.length; i++){
        if(i === index){ continue; }
        if(dataArray[i].style.display === 'block'){ return true; }
    }
    return false;
}

function closeAll(dataArray){
    for(let i = 0; i < dataArray.length; i++){ 
        dataArray[i].style.display = 'none'; 
    }
}

function click_on_setting_buttons(dataArray, buttonArray){
    for(let i = 0; i < buttonArray.length; i++){
        buttonArray[i].addEventListener('click', function(){
            if(dataArray[i].style.display === 'none'){
                if(anyDataOpen(i, dataArray, buttonArray)){ closeAll(dataArray); }
                dataArray[i].style.display = 'block';
            }
            else{
                dataArray[i].style.display = 'none';
            }
        });
    }
}

click_on_setting_buttons(tableData, menuButton);
click_on_setting_buttons(dataPimpinanDepartemen, showPimpinanDepartemenButton);
click_on_setting_buttons(dataStaffDepartemen, showStaffDepartemenButton);
click_on_setting_buttons(dataProkerDepartemen, showProkerDepartemenButton);