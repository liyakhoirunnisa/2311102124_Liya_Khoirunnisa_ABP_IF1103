// Liya Koirunnisa - 2311102124 - IF1103

// Fungsi menghitung jumlah bilangan ganjil
function hitungGanjil() {
  // Ambil nilai min dan max dari input
  const min = parseInt(document.getElementById("minValue").value);
  const max = parseInt(document.getElementById("maxValue").value);
  const display = document.getElementById("resultDisplay");

  // Validasi input
  if (isNaN(min) || isNaN(max)) {
    display.innerHTML =
      '<span style="color: red;">Harap masukkan angka yang valid!</span>';
    return;
  }

  let sum = 0; // total ganjil
  let angkaGanjil = []; // simpan bilangan ganjil

  // Loop dari min ke max
  for (let i = min; i <= max; i++) {
    if (i % 2 !== 0) {
      // jika ganjil
      sum += i;
      angkaGanjil.push(i);
    }
  }

  // Tampilkan hasil
  if (angkaGanjil.length === 0) {
    display.innerHTML = `Tidak ada bilangan ganjil antara ${min} dan ${max}.`;
  } else {
    display.innerHTML = `<strong>hasil = ${sum}</strong> <br> (${angkaGanjil.join("+")})`;
  }
}
