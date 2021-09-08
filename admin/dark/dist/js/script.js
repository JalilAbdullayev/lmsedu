GetUrlQuery();
KursSira();

function GetUrlQuery() {
    let url_string = location.href;
    let url = new URL(url_string);
    let st = url.searchParams.get("status");
    if (st == "ok") {
        swal({
            title: "Əla!",
            text: "Əməliyyat uğurla icra edildi!",
            icon: "success",
            button: "Ok!",
        });
        setTimeout(Redirect, 1500);
    }
    if (st == "no") {
        swal({
            title: "Təəssüf!",
            text: "Əməliyyat icra edilmədi!",
            icon: "error",
            button: "Ok!",
        });
        setTimeout(Redirect, 1500);
    }
}

function Del(id) {
    swal({
        title: "Əminsinizmi?",
        text: "Silinən məlumatlar geri qaytarılmır!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        buttons: ["Xeyr!", "Bəli!"],
    }).then((willDelete) => {
        if (willDelete) {
            location.href = `${RedirectURL()}?del=ok&id=${id}`;
        } else {
            swal("İmtina edildi!");
        }
    });
}

function DelKurs(id, sekil) {
    swal({
        title: "Əminsinizmi?",
        text: "Silinən məlumatlar geri qaytarılmır!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        buttons: ["Xeyr!", "Bəli!"],
    }).then((willDelete) => {
        if (willDelete) {
            location.href = `${RedirectURL()}?delkurs=ok&id=${id}&sekil=${sekil}`;
        } else {
            swal("İmtina edildi!");
        }
    });
}

function DelKursKat(id, sekil) {
    swal({
        title: "Əminsinizmi?",
        text: "Silinən məlumatlar geri qaytarılmır!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        buttons: ["Xeyr!", "Bəli!"],
    }).then((willDelete) => {
        if (willDelete) {
            location.href = `${RedirectURL()}?delkurskat=ok&id=${id}&sekil=${sekil}`;
        } else {
            swal("İmtina edildi!");
        }
    });
}

function Redirect() {
    location.href = location.protocol + "//" + location.host + location.pathname;
}

function RedirectURL() {
    return location.protocol + "//" + location.host + location.pathname;
}

GetUrlQuery();

function KursKatStatus(id) {
    $.ajax({
        url: "../settings/code/kurslar.php",
        data: {kkstatus: true, id: id},
        method: "POST",
        success: function (data) {
            console.log(data);
        },
        error: function (xhr, status) {
            alert("Sorry, there was a problem!");
        },
        complete: function (xhr, status) {
            //$('#showresults').slideDown('slow')
        },
    });
}

function KursStatus(id) {
    $.ajax({
        url: "../settings/code/kurslar.php",
        data: {kstatus: true, id: id},
        method: "POST",
        success: function (data) {
            console.log(data);
        },
        error: function (xhr, status) {
            alert("Sorry, there was a problem!");
        },
        complete: function (xhr, status) {
            //$('#showresults').slideDown('slow')
        },
    });
}

function UstunluklerStatus(id) {
    $.ajax({
        url: "../settings/code/ustunlukler.php",
        data: {ustatus: true, id: id},
        method: "POST",
        success: function (data) {
            console.log(data);
        },
        error: function (xhr, status) {
            alert("Sorry, there was a problem!");
        },
        complete: function (xhr, status) {
            //$('#showresults').slideDown('slow')
        },
    });
}

function KursCategoryEdit(id, i) {
    let clc = document.getElementsByClassName("kurscategoryedit")[i];
    let ad = clc.getElementsByTagName("td")[1].textContent;
    let slug = clc.getElementsByTagName("td")[2].textContent;
    let sira = clc.getElementsByTagName("td")[3].textContent;
    document.getElementById("kurskatad").value = ad;
    document.getElementById("kurskatslug").value = slug;
    document.getElementById("kurskatid").value = id;

    var psira = [];
    var n = 15;
    var opt = ``;
    $.ajax({
        url: "../settings/code/kurslar.php",
        data: {psira: true},
        method: "POST",
        success: function (data) {
            console.log(data);
            psira = JSON.parse(data);
            for (let i = 1; i <= n; i++) {
                if (psira.indexOf(i) == -1) opt += `<option value="${i}">${i}</option>`;
                else
                    opt += `<option value="${i}" disabled="disabled"  ${
                        i == sira ? 'selected="selected"' : ""
                    }>${i}</option>`;
            }
            document.getElementById("kurskatKursSira").innerHTML = opt;
        },
        error: function (xhr, status) {
            alert("Sorry, there was a problem!");
        },
        complete: function (xhr, status) {
            //$('#showresults').slideDown('slow')
        },
    });
}

function KursRedakte(id, i) {
    let clc = document.getElementsByClassName("kursedit")[i];
    let sekil = clc.getElementsByTagName("td")[0].getElementsByTagName("img")[0]
        .title;
    console.log(sekil);
    let kat_id = clc.getElementsByTagName("td")[1].textContent.match(/\d/g);
    let Basliq = clc.getElementsByTagName("td")[2].textContent;
    let Aciqlama = clc.getElementsByTagName("td")[3].textContent;

    document.getElementById("sekil").src = "../../" + sekil;
    document.getElementById("id").value = id;
    document.getElementById("k_sekil").value = "../../" + sekil;
    document.getElementById("Basliq").value = Basliq;
    document.getElementById("desc").value = Aciqlama;
    document.getElementById("kateqoriya").selectedIndex = kat_id - 1; /** Səhv */
}

function BlogKatRedakte(id, i) {
    let clc = document.getElementsByClassName("blogcategoryedit")[i];
    let Ad = clc.getElementsByTagName("td")[1].textContent;
    let Slug = clc.getElementsByTagName("td")[2].textContent;
    document.getElementById("ad").value = Ad;
    document.getElementById("slug").value = Slug;
    document.getElementById("id").value = id;
}

function DelBlogKat(id) {
    swal({
        title: "Əminsinizmi?",
        text: "Silinən məlumatlar geri qaytarılmır!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        buttons: ["Xeyr!", "Bəli!"],
    }).then((willDelete) => {
        if (willDelete) {
            location.href = `${RedirectURL()}?delblogkat=ok&id=${id}`;
        } else {
            swal("İmtina edildi!");
        }
    });
}

function BlogKatStatus(id) {
    $.ajax({
        url: "../settings/code/blog.php",
        data: {bkstatus: true, id: id},
        method: "POST",
        success: function (data) {
            console.log(data);
        },
        error: function (xhr, status) {
            alert("Sorry, there was a problem!");
        },
        complete: function (xhr, status) {
            //$('#showresults').slideDown('slow')
        },
    });
}

function BlogStatus(id) {
    $.ajax({
        url: "../settings/code/blog.php",
        data: {bstatus: true, id: id},
        method: "POST",
        success: function (data) {
            console.log(data);
        },
        error: function (xhr, status) {
            alert("Sorry, there was a problem!");
        },
        complete: function (xhr, status) {
            //$('#showresults').slideDown('slow')
        },
    });
}

function DelBlog(id) {
    swal({
        title: "Əminsinizmi?",
        text: "Silinən məlumatlar geri qaytarılmır!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        buttons: ["Xeyr!", "Bəli!"],
    }).then((willDelete) => {
        if (willDelete) {
            location.href = `${RedirectURL()}?delblog=ok&id=${id}`;
        } else {
            swal("İmtina edildi!");
        }
    });
}

function DelUser(id) {
    swal({
        title: "Əminsinizmi?",
        text: "Silinən məlumatlar geri qaytarılmır!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        buttons: ["Xeyr!", "Bəli!"],
    }).then((willDelete) => {
        if (willDelete) {
            location.href = `${RedirectURL()}?deluser=ok&id=${id}`;
        } else {
            swal("İmtina edildi!");
        }
    });
}

function DelMktb(id) {
    swal({
        title: "Əminsinizmi?",
        text: "Silinən məlumatlar geri qaytarılmır!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        buttons: ["Xeyr!", "Bəli!"],
    }).then((willDelete) => {
        if (willDelete) {
            location.href = `${RedirectURL()}?delmktb=ok&id=${id}`;
        } else {
            swal("İmtina edildi!");
        }
    });
}

function DelUstunlukler(id) {
    swal({
        title: "Əminsinizmi?",
        text: "Silinən məlumatlar geri qaytarılmır!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        buttons: ["Xeyr!", "Bəli!"],
    }).then((willDelete) => {
        if (willDelete) {
            location.href = `${RedirectURL()}?delustunlukler=ok&id=${id}`;
        } else {
            swal("İmtina edildi!");
        }
    });
}

function SliderStatus(id) {
    $.ajax({
        url: "../settings/code/slider.php",
        data: {slstatus: true, id: id},
        method: "POST",
        success: function (data) {
            console.log(data);
        },
        error: function (xhr, status) {
            alert("Sorry, there was a problem!");
        },
        complete: function (xhr, status) {
            //$('#showresults').slideDown('slow')
        },
    });
}

function DelSlider(id) {
    swal({
        title: "Əminsinizmi?",
        text: "Silinən məlumatlar geri qaytarılmır!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        buttons: ["Xeyr!", "Bəli!"],
    }).then((willDelete) => {
        if (willDelete) {
            location.href = `${RedirectURL()}?delslider=ok&id=${id}`;
        } else {
            swal("İmtina edildi!");
        }
    });
}

function IstStatus(id) {
    $.ajax({
        url: "../settings/code/istifadeciler.php",
        data: {iststatus: true, id: id},
        method: "POST",
        success: function (data) {
            console.log(data);
        },
        error: function (xhr, status) {
            alert("Sorry, there was a problem!");
        },
        complete: function (xhr, status) {
            //$('#showresults').slideDown('slow')
        },
    });
}

if (CurrentURLName() == "profil.php") {
    var passmsg = document.getElementsByClassName("passmessage")[0];
    var pass1 = document.getElementById("yenisifre");
    var pass2 = document.getElementById("yenisifretekrar");
    var btnpass = document.getElementsByClassName("btnpass")[0];
    var block = 1;
    var BlockOldPass = 1;
}

function CurrentURLName() {
    let path = location.pathname;
    let page = path.split("/").pop();
    return page;
}

function SifreAl() {
    document.getElementById("sifre").value = Sifre(8);
}

function Sifre(n) {
    let result = "";
    let characters =
        "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789#$)(_!@";
    let charactersLength = characters.length;
    for (let i = 0; i < n; i++) {
        result += characters.charAt(Math.floor(Math.random() * charactersLength));
    }
    return result;
}

function SifreTekrarYoxla() {
    let sfr1 = pass1.value;
    let sfr2 = pass2.value;
    BtnDisabled();
    let msg = "";
    let cls = "";
    if (sfr1 === sfr2 && block == 0 && BlockOldPass == 0) {
        passmsg.innerHTML = "";
        btnpass.disabled = false;
    } else {
        msg = "Şifrələr Uyğunlaşmır və ya şifrə güclü deyil";
        cls = "danger";
    }
    passmsg.innerHTML = `<div class="alert alert-${cls}" role="alert">
  ${msg}
</div>`;
}

function BtnDisabled() {
    if (
        pass2 != undefined ||
        pass2 != null ||
        pass1 != undefined ||
        pass1 != null
    ) {
        btnpass.disabled = true;
    }
}

function SifreGucu() {
    let sifre1 = pass1.value;
    BtnDisabled();
    if (!sifre1.match(/^(?=(?:.*[A-Z]))(?=(?:.*[a-z]))(?=(?:.*[0-9]))(?=(?:.*[@$!%*#?&]))\S{8,}$/)) {
        passmsg.innerHTML = `<div class="alert alert-warning" role="alert">Şifrə daxilində rəqəmlər,kiçik, böyük həriflər və simvollar istifadə edilməlidir (@$!%*#?&)</div>`;
    } else {
        passmsg.innerHTML = "";
        block = 0;
    }
}

function KohneSifre(email, sifre) {
    BtnDisabled();
    $.ajax({
        url: "../settings/code/istifadeciler-ajax.php",
        data: {kohnesifre: true, email: email, sifre: sifre},
        method: "POST",
        success: function (data) {
            if (data == 0) {
                passmsg.innerHTML = `<div class="alert alert-warning" role="alert">Köhnə şifrə düzgün deyil...</div>`;
            } else {
                BlockOldPass = 0;
                passmsg.innerHTML = "";
            }
        },
        error: function (xhr, status) {
            alert("Sorry, there was a problem!");
        },
        complete: function (xhr, status) {
            //$('#showresults').slideDown('slow')
        }
    });
}
