const paginas = ["Home","Voorstellingen","Onze vrienden","Informatie","Contact","nieuwe pagina!"];
const contentmargin = 20;
let last_page = "";

function setIframeHeight(iframe,container) {
    if (iframe) {
        var iframeWin = iframe.contentWindow || iframe.contentDocument.parentWindow;
        if (iframeWin.document.body) {
            height = iframeWin.document.documentElement.scrollHeight || iframeWin.document.body.scrollHeight;
            iframe.style.height = height;
            container.style.height = height;
            console.log(height);
        }
    }
};

function load_page(page) {
    if (last_page != page) {
        last_page = page;
        if(page.charAt(0)=="#") {
            page = page.substr(1);
        }
        console.log("page",page);
        const content = document.getElementById("content");
        const content_container = document.getElementById("content_container");
        page = page.toLowerCase();
        parent = content.parentNode;
        content.parentNode.removeChild(content);
        content.src = "pages/" + page.replace(" ","_") + ".php";
        content.style.height = 0;
        content.onload = function () {
            setIframeHeight(content,content_container);
        };
        parent.appendChild(content);
    }
}
function set_button(newpage){
    const nav = document.getElementById("nav").getElementsByTagName("tr")[0];
    const active = nav.getElementsByClassName("active")[0];
    active.classList.remove("active");
    const target_button = "nav-"+newpage.replace(" ","_").replace("#","");
    const button = document.getElementById(target_button);
    button.classList.add("active");
}
document.addEventListener("DOMContentLoaded", function () {
    /****Generate Nav****/
    const nav = document.getElementById("nav").getElementsByTagName("tr")[0];
    for (let p of paginas) {
        const td = document.createElement("td");
        const a = document.createElement("a");
        const name = p;
        const el = a;
        el.id = "nav-"+name.replace(" ","_");
        if (!nav.getElementsByClassName("active")[0]) {
            el.classList.add("active");
            load_page(name, false);
        }
        td.addEventListener("click", function () {
            const active = nav.getElementsByClassName("active")[0];
            if (active) {
                active.classList.remove("active");
            }
            el.classList.add("active");
            a.href = "#"+name.replace(" ","_");
        });
        a.innerHTML = name;
        td.appendChild(a);
        nav.appendChild(td);
    }
    load_page(location.hash);
    set_button(location.hash);
    window.addEventListener("hashchange", function(){
        console.log("hash change!");
        load_page(location.hash);
        set_button(location.hash);
    });
    /****Generate Nav****/
});