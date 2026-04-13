// Liya Koirunnisa - 2311102124 - IF1103

// Fungsi tombol untuk mengubah alignment teks
function toggleAlignment() {
  // Ambil elemen logo dan navigasi
  const logoBox = document.getElementById("text-logo");
  const navBox = document.getElementById("text-nav");

  // Tambah / hapus class untuk meratakan teks ke kanan
  logoBox.classList.toggle("align-right-toggled");
  navBox.classList.toggle("align-right-toggled");
}

// Fungsi tombol untuk mengubah warna background
function toggleColor() {
  // Ambil kotak target
  const targetBox = document.getElementById("target-box");

  // Tambah / hapus class untuk mengganti warna
  targetBox.classList.toggle("bg-color-toggled");
}
