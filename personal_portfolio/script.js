const nav=document.querySelector(".nav");
const navList=nav.querySelectorAll("li");
const totalNavList=navList.length;
const allsection=document.querySelectorAll(".section");
const totalSection=allsection.length;
for(let i=0;i<totalNavList;i++)
{
    
    const a=navList[i].querySelector("a");
    a.addEventListener("click",function(){
        for(let i=0;i<totalSection;i++)
        {
         allsection[i].classList.remove("back-section");
        }
        for(let j=0;j<totalNavList;j++){
            if(navList[j].querySelector("a").classList.contains("active")){
                 allsection[j].classList.add("back-section");
            }
            navList[j].querySelector("a").classList.remove("active");  
        }
         this.classList.add("active");
         showSection(this);
         //low el shasha soghyra hyrg3 el nav mkano
         if(window.innerWidth<1200)
         {
            asideSectionTogglerBtn();
         }
    })
}
function showSection(element)
{
   for(let i=0;i<totalSection;i++)
   {
    allsection[i].classList.remove("active");
   }
   const target=element.getAttribute("href").split("#")[1]
   document.querySelector("#"+target).classList.add("active");
}
function updatesection(element)
{
    for(let i=0;i<totalNavList;i++)
    {
        navList[i].querySelector("a").classList.remove("active");
        const target=element.getAttribute("href").split("#")[1];
        if(target === navList[i].querySelector("a").getAttribute("href").split("#")[1])
        {
            navList[i].querySelector("a").classList.add("active");

        }
    }
}
document.querySelector(".hire-me").addEventListener("click",function()
{
    
    showSection(this);
    updatesection(this);
})

const navTogglerBtn=document.querySelector(".nav-toggler");
const aside=document.querySelector(".aside");
navTogglerBtn.addEventListener("click",()=>{
    asideSectionTogglerBtn();
})

function asideSectionTogglerBtn(){
    aside.classList.toggle("open");
    navTogglerBtn.classList.toggle("open");
    for(let i=0;i<totalSection;i++)
    {
        allsection[i].classList.toggle("open");
    }
}
