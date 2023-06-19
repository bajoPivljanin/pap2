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
window.onscroll = () =>{
    let sectionforanim=document.querySelector('header');
    let sectionposition=sectionforanim.getBoundingClientRect().top;
    let screenpos=window.innerHeight;

    // console.log(`SCREEN ${screenpos}`);
    // console.log(`SECTION ${sectionposition}`);

    if(sectionposition<-600)
    {
        setInterval(()=>{
        let img1=document.querySelector('.left-art1 img');
        img1.style.opacity='1';
        img1.style.transform='translateX(0px)';
        },100);
        setInterval(()=>{
            let img2=document.querySelector('.right-art1 #upimg1');
            img2.style.opacity='1';
            img2.style.transform='translateX(0px)';
        },500);
        setInterval(() => {
            let img3=document.querySelector('.right-art1 #upimg2');
            img3.style.opacity='1';
            img3.style.transform='translateX(0px)';
        }, 500);
    }
    if(sectionposition<-111)
    {
        let nav = document.querySelector(".nav-v2")
        nav.style.position="fixed";
        nav.style.left="0";
        nav.style.right="0";
        nav.style.top="0";
    }
    else{
        let nav = document.querySelector(".nav-v2")
        nav.style.position="relative";
    }
}

document.querySelector("#menuopen").addEventListener("click",()=>{
        let nav2=document.querySelector(".nav-v2");
        let mopen=document.querySelector("#menuopen");
        let mclose=document.querySelector("#menuclose");
        if(nav2.style.display="block")
        {
            mopen.style.display="none";
            mclose.style.display="block";
        } 
});
let mclose=document.querySelector("#menuclose").addEventListener("click",()=>{
        let mclose=document.querySelector("#menuclose");
        let nav2=document.querySelector(".nav-v2");
        let mopen=document.querySelector("#menuopen");
        nav2.style.display="none";
        mclose.style.display="none";
        mopen.style.display="block";

});

