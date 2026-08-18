const judul = document.getElementById('judul');
const komentar = document.getElementById('komentar');
const tombol = document.getElementById('tombol');
const statusText = document.getElementById('statusText');
const statusText1 = document.getElementById('statusText1');

komentar.addEventListener('input', () => {
    if (komentar.value.trim().length > 0) {
        statusText.textContent = 'Anda Sedang Mengetik...';
    } else {
        statusText.textContent = '';
    }
});

tombol.addEventListener('click', () => {
    const teks = komentar.value.trim();
    if (teks.length === 0) {
        alert('Silakan masukkan komentar terlebih dahulu.');
        komentar.focus();
        return;
    }

    judul.innerHTML = '<b>PHP</b> Sedang Berulang Tahun';
    statusText1.innerHTML = "<b> JavaScript: </b> " + teks;
    statusText.textContent = '';
    komentar.value = '';
    komentar.placeholder = 'Komentar..';
    komentar.focus();
});
