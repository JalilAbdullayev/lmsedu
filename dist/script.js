GetUrlQuery();
onload = function () {
    BlogDate();
};

var Tawk_API = Tawk_API || {},
    Tawk_LoadStart = new Date();
(function () {
    var s1 = document.createElement("script"),
        s0 = document.getElementsByTagName("script")[0];
    s1.async = true;
    s1.src = "https://embed.tawk.to/5e9ef67e35bcbb0c9ab342e6/default";
    s1.charset = "UTF-8";
    s1.setAttribute("crossorigin", "*");
    s0.parentNode.insertBefore(s1, s0);
})();

$(".main-carousel").flickity({
    cellAlign: "center",
    contain: true,
});

function openNav() {
    document.getElementById("sidenav").style.width = "100%";
}

function closeNav() {
    document.getElementById("sidenav").style.width = "0";
}

function GetUrlQuery() {
    let url_string = location.href;
    let url = new URL(url_string);
    let st = url.searchParams.get("status");
    if (st === "ok") {
        swal({
            title: "Əla!",
            text: "Əməliyyat uğurla icra edildi!",
            icon: "success",
            button: "Ok!",
        });
        setTimeout(Redirect, 1500);
    }
    if (st === "no") {
        swal({
            title: "Təəssüf!",
            text: "Əməliyyat icra edilmədi!",
            icon: "error",
            button: "Ok!",
        });
        setTimeout(Redirect, 1500);
    }
}

function BlogDate() {
    let date = document.getElementsByClassName("BlogDate")[0].textContent;
    let aylar = [
        "",
        "Yanvar",
        "Fevral",
        "Mart",
        "Aprel",
        "May",
        "İyun",
        "İyul",
        "Avqust",
        "Sentyabr",
        "Oktyabr",
        "Noyabr",
        "Dekabr",
    ];
    date = date.split("-");
    let il = date[0];
    let ay = Number(date[1]);
    let gun = date[2];
    document.getElementsByClassName(
        "BlogDate"
    )[0].innerHTML = `${gun} ${aylar[ay]} ${il}`;
}
