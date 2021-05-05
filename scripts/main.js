const navigation = document.getElementById('navbar');
const main = document.getElementById('main-section');
const oriSize = main.style.marginLeft;

const openButton = document.getElementById('open-button');
openButton.addEventListener('click', function(){
    navigation.style.display = 'block';
    main.style.marginLeft = '350px';
});

const closeButton = document.getElementById('close-button');
closeButton.addEventListener('click', function(){
    navigation.style.display = 'none';
    main.style.marginLeft = oriSize;
});