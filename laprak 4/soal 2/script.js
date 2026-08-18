$(document).ready(function () {

    $("#btnNilai").click(function () {

        let nilai = parseInt($("#nilai").val());

        // Validasi input
        if (isNaN(nilai)) {
            $("#keterangan").text("Silakan Inputkan Nilai");
            $("#hasil").css("background-color", "gray");
            return;
        }

        // Nilai A
        if (nilai >= 85) {
            $("#keterangan").text("Mendapatkan Nilai A");
            $("#hasil").css("background-color", "green");
        }

        // Nilai B+
        else if (nilai >= 75 && nilai <= 84) {
            $("#keterangan").text("Mendapatkan Nilai B+");
            $("#hasil").css("background-color", "orange");
        }

        // Nilai C+
        else if (nilai >= 60 && nilai <= 74) {
            $("#keterangan").text("Mendapatkan Nilai C+");
            $("#hasil").css("background-color", "yellow");
            $("#keterangan").css("color", "black");
        }

        // Nilai E
        else if (nilai < 60) {
            $("#keterangan").text("Mendapatkan Nilai E");
            $("#hasil").css("background-color", "red");
        }

    });

});