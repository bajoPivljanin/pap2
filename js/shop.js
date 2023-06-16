window.onload = ()=>{
    setInterval(()=>{
        let tekst = document.querySelector('.nav .left-nav');
        tekst.style.opacity='1';
        tekst.style.transform='translateY(0px)';
    },300);
    setInterval(()=>{
        let tekst = document.querySelector('.nav .right-nav');
        tekst.style.opacity='1';
        tekst.style.transform='translateY(0px)';
    },300);
    setInterval(()=>{
        let tekst = document.querySelector('.nav .logo');
        tekst.style.opacity='1';
        //tekst.style.transform='translateY(0px)';
    },200);
}