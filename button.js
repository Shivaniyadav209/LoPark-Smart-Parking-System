const readmorebtn=document.querySelector('.read-more-btn');
const textsmall=document.querySelector('.textsmall');

readmorebtn.addEventListener('click',(e)=>{
    textsmall.classList.toggle('show-more');
    if(readmorebtn.innerText === 'Read More'){
        readmorebtn.innerText = 'Read Less';
    }
    else{
        readmorebtn.innerText = 'Read More';
    }
})