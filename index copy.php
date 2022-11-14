<html>

<head>
    <title>JeX aplikacija</title>
    <script src="jquery-3.6.1.min.js"></script>
</head>

<body>
    <div style="text-align:center; font-size:30px">
        JeX aplikacija
    </div>
    <div style="text-align:center;  padding:30px">
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
        border: 1px solid #000;
        width: 30px;
    }
</style>
<script>
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
        if (lvrijednost == dvrijednost) alert("Točno")
        else alert("Papak")
        napravi_zadatak()
    }

    function napravi_zadatak() {
        for (var i = 1; i <= 4; i++) {
            $("#box" + i).text(slucaj(9))
        }
        $(".x").removeClass("x")
        $("#box" + slucaj(4)).text("X").addClass("x")
    }

    napravi_zadatak()
</script>

</html>