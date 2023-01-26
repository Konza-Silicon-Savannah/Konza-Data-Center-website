
 const navs= document.querySelector('.navbar');
 window.addEventListener('scroll',()=>{
    if(window.scrollY>=50)
    {
        navs.classList.add('scrollednavbar');
    }else if(window.scrollY<50 )
    {
        navs.classList.remove('scrollednavbar');
    }

 });
