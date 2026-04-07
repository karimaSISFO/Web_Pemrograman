document.getElementById("formKTP").addEventListener("submit", function(e) {
    e.preventDefault();

    const nama = document.getElementById("nama").value;
    const alamat = document.getElementById("alamat").value;
    const provinsi = document.getElementById("provinsi").value;
    const kota = document.getElementById("kota").value;
    const kecamatan = document.getElementById("kecamatan").value;
    const pekerjaan = document.getElementById("pekerjaan").value;
    const tempat = document.getElementById("tempat").value;
    const tanggal = document.getElementById("tanggal").value;

    // jenis kelamin
    let jk = "";
    document.querySelectorAll("input[name='jk']").forEach(radio => {
        if (radio.checked) {
            jk = radio.value;
        }
    });

    // checkbox
    let berkas = [];
    document.querySelectorAll("input[name='berkas[]']:checked").forEach(cb => {
        berkas.push(cb.value);
    });

    const data = {
        nama,
        alamat,
        provinsi,
        kota,
        kecamatan,
        pekerjaan,
        jk,
        tempat,
        tanggal,
        berkas
    };

    let database = JSON.parse(localStorage.getItem("ktpData")) || [];
    database.push(data);
    localStorage.setItem("ktpData", JSON.stringify(database));

    alert("Data berhasil disimpan!");
    document.getElementById("formKTP").reset();

    console.log(database);
});