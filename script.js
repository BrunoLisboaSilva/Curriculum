var btn1 = document.querySelector('#c1')
var btn2 = document.querySelector('#c2')
var btn3 = document.querySelector('#c3')
var container = document.querySelector('.container')

btn1.addEventListener('click', function() {

    if(container.style.display === 'block'){
        container.style.display = 'none';
    } else {
        container.style.display = 'block'
    }
}
);


btn2.addEventListener('click', function() {

    if(container.style.display === 'block'){
        container.style.display = 'none';
    } else {
        container.style.display = 'block'
    }
}
);

btn3.addEventListener('click', function() {

    if(container.style.display === 'block'){
        container.style.display = 'none';
    } else {
        container.style.display = 'block'
    }
}
);

