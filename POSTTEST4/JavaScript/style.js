
function Class() {
    if (document.getElementById("dark-mode").className == "fas fa-sun") {
        document.body.className = "lightmode";
        document.getElementById("dark-mode").className = "fas fa-moon"
    } else {
        document.body.className = "darkmode";
        document.getElementById("dark-mode").className = "fas fa-sun";
    }
}
function tampilkanPopUp() {
    var nama = document.getElementById("nama").value;
    var email = document.getElementById("email").value;
    var komentar = document.getElementById("komentar").value;

    if (nama === "" || email === "" || komentar === "") {
        alert("Harap isi semua kolom inputan sebelum mengirim");
    } else {
        var hasil = "Terima kasih, " + nama + "! ";
        hasil += "Email Anda: " + email + " " ;
        hasil += "Komentar Anda: " + komentar;

        alert(hasil);
    }
}
