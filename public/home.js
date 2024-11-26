var images = [
  "/Assets/msuemm 1 (2).png",
  "/Assets/museum2.png",
  "/Assets/museum3.png"
];

var currentIndex = 0;

// Waktu transisi dalam milidetik
var transitionTime = 5000; //5 detik

// mengganti gambar dengan animasi fade
function changeImage(index) {
  var slideshow = document.getElementById('slideshow');
  

  slideshow.style.opacity = 0;
  
  // Ganti gambar setelah 1 detik (waktu transisi opacity)
  setTimeout(function() {
      slideshow.src = images[index];
      slideshow.style.opacity = 1; // Munculkan gambar baru
  }, 1000);
}

// Fungsi untuk gambar selanjutnya
function nextImage() {
  currentIndex = (currentIndex + 1) % images.length;
  changeImage(currentIndex);
}

// Fungsi untuk gambar sebelumnya
function prevImage() {
  currentIndex = (currentIndex - 1 + images.length) % images.length;
  changeImage(currentIndex);
}

// Set otomatis slideshow berjalan setiap 5 detik
setInterval(nextImage, transitionTime);






function changeColor() {
  var layananDiv = document.querySelector(".Layanan");
  
  // Toggle class 'changed-color' untuk mengubah warna
  layananDiv.classList.toggle("changed-color");
}


// Fungsi untuk membuka link saat teks diklik
document.getElementById("link1").onclick = function() {
  window.open("https://www.instagram.com/museumnasionalindonesia?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw%3D%3D", "_blank"); 
};

document.getElementById("link2").onclick = function() {
  window.open("https://www.facebook.com/museumnasionalindonesia/", "_blank"); 
};

document.getElementById("link3").onclick = function() {
  window.open("https://x.com/MuseumNasional/status/1636322959534215168", "_blank"); 
};