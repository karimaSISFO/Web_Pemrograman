const judul = document.getElementById('judul');
const komentar = document.getElementById('komentar');
const tombolKomentar = document.getElementById('tombolKomentar');
const statusText = document.getElementById('statusText');

komentar.addEventListener('input', function () {
    if (komentar.value.trim().length > 0) {
        statusText.textContent = 'Anda Sedang Mengetik...';
    } else {
        statusText.textContent = '';
    }
});

tombolKomentar.addEventListener('click', function () {
    const teks = komentar.value.trim();
    if (teks.length === 0) {
        alert('Silakan tulis komentar terlebih dahulu.');
        komentar.focus();
        return;
    }

    judul.textContent = 'JavaScript : ' + teks;
    statusText.textContent = '';
    komentar.value = '';
    komentar.placeholder = 'Komentar..';
    komentar.focus();
});
