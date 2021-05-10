const tableData = document.getElementsByClassName('table-data');
const menuButton = document.getElementsByClassName('menu-button');

function isOpen(index){
    for(let i = 0; i < menuButton.length; i++){
        if(i === index){ continue; }
        if(tableData[i].style.display === 'block'){ return true; }
    }
    return false;
}

function closeAll(){
    for(let i = 0; i < tableData.length; i++){ 
        tableData[i].style.display = 'none'; 
    }
}

for(let i = 0; i < menuButton.length; i++){
    menuButton[i].addEventListener('click', function(){
        if(tableData[i].style.display === 'none'){
            if(isOpen(i)){ closeAll(); }
            tableData[i].style.display = 'block';
        }
        else{
            tableData[i].style.display = 'none';
        }
    });
}