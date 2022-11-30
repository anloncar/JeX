


window.tocni = 0;
window.netocni = 0;

function slucaj(dokle) {
    var slucajni = Math.random()
    slucajni = slucajni * dokle;
    slucajni = Math.round(slucajni)
    if (slucajni == 0) slucajni = 1
    return slucajni
}

function napravi_zadatak() {
    for (var i = 1; i <= 4; i++) {
        var slucajni = slucaj($("#tezina").val());
        if (slucajni == 4) {
            $("#box" + i).text(slucaj(9) + " - " + slucaj(9));
        } else if (slucajni == 3) {
            $("#box" + i).text(slucaj(9) + " + " + slucaj(9));
        } else if (slucajni == 2) {
            $("#box" + i).text(slucaj(9) + " * " + slucaj(9));
        } else {
            $("#box" + i).text(slucaj(9))
        }
    }
    $(".x").removeClass("x")
    $("#box" + slucaj(4)).text("X").addClass("x")
    $("#skor").text("Točnih " + window.tocni + ", Netočni:" + window.netocni)
}

function provjeri() {
    var uneseno = $("#uneseno").val();
    if (!uneseno) uneseno = 0;
    uneseno = eval(uneseno)
    $(".x").text(uneseno)
    var lvrijednost = eval($("#box1").text()) / eval($("#box3").text())
    var dvrijednost = eval($("#box2").text()) / eval($("#box4").text())
    if (lvrijednost == dvrijednost) {
        window.tocni++
        $("#provjeri").css("background-color", "#398000")
        //alert("Vidi streber a, kao da mu Stanko predaje")
    } else {
        window.netocni++
        $("#provjeri").css("background-color", "#ac0000")
        //alert("Nisi valjda  glup ko Vito, uzimaj tu knjigu u ruke!!!!")
    }
    napravi_zadatak()
}





// $("#x").on("click", async function () {
//     $("#x").css("color", "red")
//     var { data, error } = await supabase
//         .from('users')
//         .update({ fullname: Math.random() })
//         .eq('id', 1)
//         .select()

//     $("#x").text(data[0].fullname)
// })

//https://jsfiddle.net/f0jb6thm/1/


// import { createClient } from 'https://esm.sh/@supabase/supabase-js@2'
// const supabaseUrl = 'https://jyqrhsuzaxmlzpnxqsoe.supabase.co'
// const supabaseKey = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6Imp5cXJoc3V6YXhtbHpwbnhxc29lIiwicm9sZSI6ImFub24iLCJpYXQiOjE2Njk3NzAzOTEsImV4cCI6MTk4NTM0NjM5MX0.2QxcykedbdswHPPN14eYye1_T6p_rhvvFQ_-9kUgwx4'
// const supabase = createClient(supabaseUrl, supabaseKey)

// async function db() {
//     debugger
//     var { data, error } = await supabase
//         .from('users')
//         .select()
//     for (var key in data) {
//         var row = data[key];
//         $('<div>' + row.fullname + ', točni: ' + row.tocni + ', netocni:' + row.netocni + '</div>').appendTo("#baza")
//     }
// }

// db();