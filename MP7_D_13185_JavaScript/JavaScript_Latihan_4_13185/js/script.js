function fn_Valform() {
    var sMsg = "";
    var umurP = "";
    var emailP = /^[a-z0-9][a-z0-9_\.-]{0,}[a-z0-9]@[a-z0-9][a-z0-9_\.-]{0,}[a-z0-9][\.][a-z0-9]{2,4}$/;
    var kategoriP = "";

    if (document.getElementById("nama").value == "") {
        sMsg += "\n* Anda Belum mengisikan Nama";
    } 
    if (document.getElementById("email").value == "") {
        sMsg += "\n* Anda Belum mengisikan Email";
    } else if (!emailP.test(document.getElementById("email").value)) {
        sMsg += "\n* Email anda Salah";
    }
    if (document.getElementById("umur").value == "") {
        sMsg += "\n* Anda Belum mengisikan Umur";
    } else if(document.getElementById("umur").value <= 25) {
        umurP += "\n* Peserta Mahasiswa";
    } else {
        umurP += "\n* Peserta Umum";
    }
    if(document.getElementById("kategori").value == "") {
        sMsg += "\n* Anda belum mengisikan Kategori";
    } else {
         switch(document.getElementById("kategori").value) {
            case "W":
                kategoriP += "Workshop";
                break;

            case "S":
                kategoriP += "Seminar";
                break;
            
            case "L":
                kategoriP += "Lomba Coding";
                break;

            default:
                kategoriP += "";
                break;
        }
    }

    if (sMsg != "") {
        alert("Peringatan: \n" +sMsg);
        return false;
    } else {
        alert(`Terima kasih ${document.getElementById("nama").value} ! Anda terdaftar di acara ${kategoriP} ${umurP}`);
        return true;
    }


}