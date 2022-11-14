<html>

<head>
    <title>JeX aplikacija</title>
    <script src="jquery-3.6.1.min.js"></script>
    <header> Pravio Neky
</head>

<body>
    <div style="text-align:center; font-size:30px">
        JeX AI mathematics question generator
    </div>
    <div style="text-align:center;  padding:20px">
        <div style="text-align:center; padding:30px; display:inline-block">
            <table style="text-align:center; font-size:30px; width:300px;">
                <tr>
                    <td id="box1">X</td>
                    <td> </td>
                    <td id="box2">3</td>
                </tr>

                <tr>
                    <td>-</td>
                    <td>=</td>
                    <td>-</td>
                </tr>

                <tr>
                    <td id="box3">5</td>
                    <td> </td>
                    <td id="box4">4</td>
                </tr>
            </table>
            <div>
                <input id="uneseno" placeholder="Rezultat">
                <button onclick="provjeri()" type="button">Provjeri</button>
            </div>
            <div id="skor">
                Točnih 6
            </div>
        </div>
    </div>
</body>
<style>
    body {
        background-color: #333;
        color: white;
        text-align: center;
    }

    td {
        border: 3px solid #000;
        width: 30px;
    }
    .x{
        color:red
    }
button{
    color:red
}

#skor{
    color:whitesmoke ; font-size: xx-large;
    stroke: #000 ;

}
header{
    color:pink
}



</style>
<script>
    window.tocni = 0;
    window.netocni = 0;

    function slucaj(dokle) {
        var slucajni = Math.random()
        slucajni = slucajni * dokle;
        slucajni = Math.round(slucajni)
        if (slucajni == 0) slucajni = 1
        return slucajni
    }

    function provjeri() {
        var uneseno = $("#uneseno").val();
        uneseno = eval(uneseno)
        $(".x").text(uneseno)
        var lvrijednost = $("#box1").text() / $("#box3").text()
        var dvrijednost = $("#box2").text() / $("#box4").text()
        if (lvrijednost == dvrijednost) {
            window.tocni++
            alert("Vidi strebera, kao da mu Stanko predaje")
        } else {
            window.netocni++
            alert("Nisi valjda glup ko Vito, uzimaj tu knjigu u ruke!!!!")
        }
        napravi_zadatak()
    }

    function napravi_zadatak() {
        for (var i = 1; i <= 4; i++) {
            $("#box" + i).text(slucaj(9))
        }
        $(".x").removeClass("x")
        $("#box" + slucaj(4)).text("X").addClass("x")
        $("#skor").text("Točnih " + window.tocni + ", Netočni:" + window.netocni)
    }

    napravi_zadatak()
</script>

</html>