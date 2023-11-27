
function pg(type) {
  // Ambil elemen dengan class "mobil", "motor", "car", dan "sepedah"
  var mobilBtn = document.querySelector('.mobil');
  var motorBtn = document.querySelector('.motor');
  var carElements = document.querySelectorAll('.car');
  var sepedahElements = document.querySelectorAll('.sepedah');
  var paginationMobil = document.getElementById('pagination-mobil');
  var paginationMotor = document.getElementById('pagination-motor');

  // Atur kelas yang aktif sesuai dengan tombol yang diklik
  if (type === 'mobil') {
    mobilBtn.style.backgroundColor = '#004AAD' ;
    mobilBtn.style.color = 'white' ;
    motorBtn.style.backgroundColor = 'white' ;
    motorBtn.style.color = 'black' ;
    paginationMobil.style.display = 'block';
    paginationMotor.style.display = 'none';

    sepedahElements.forEach(function(sepedahElement) {
      sepedahElement.style.display = 'none';
    });
    carElements.forEach(function(carElement) {
      carElement.style.display = 'flex';
    });
  } else if (type === 'motor') {
    mobilBtn.style.backgroundColor = 'white';
    mobilBtn.style.color = 'black';
    motorBtn.style.backgroundColor = '#004AAD';
    motorBtn.style.color = 'white';
    paginationMobil.style.display = 'none';
    paginationMotor.style.display = 'block';
    

    carElements.forEach(function(carElement) {
      carElement.style.display = 'none';
    });
    sepedahElements.forEach(function(sepedahElement) {
      sepedahElement.style.display = 'flex';
    });
  }

  buildPagination(type);
}

function page(type) {
    // Ambil elemen dengan class "mobil", "motor", "car", dan "sepedah"
    var mobilBtn = document.querySelector('.mobil');
    var motorBtn = document.querySelector('.motor');
    var carElements = document.querySelectorAll('.list-mobil');
    var sepedahElements = document.querySelectorAll('.list-motor');

    // Reset kelas pada tombol
    mobilBtn.classList.remove('active');
    motorBtn.classList.remove('active');

    // Atur kelas yang aktif sesuai dengan tombol yang diklik
    if (type === 'mobil') {
      mobilBtn.style.backgroundColor = '#004AAD' ;
    mobilBtn.style.color = 'white' ;
    motorBtn.style.backgroundColor = 'white' ;
    motorBtn.style.color = 'black' ;
      sepedahElements.forEach(function(sepedahElement) {
        sepedahElement.style.display = 'none';
      });
      carElements.forEach(function(carElement) {
        carElement.style.display = 'flex';
      });
    } else if (type === 'motor') {
      mobilBtn.style.backgroundColor = 'white';
    mobilBtn.style.color = 'black';
    motorBtn.style.backgroundColor = '#004AAD';
    motorBtn.style.color = 'white';
      carElements.forEach(function(carElement) {
        carElement.style.display = 'none';
      });
      sepedahElements.forEach(function(sepedahElement) {
        sepedahElement.style.display = 'flex';
      });
    }
  }

  function buildPagination(type) {
    var paginationMobil = document.getElementById('pagination-mobil');
    var paginationMotor = document.getElementById('pagination-motor');
  
    // Hapus isi pagination sebelum membangun yang baru
    paginationMobil.innerHTML = '';
    paginationMotor.innerHTML = '';
  
    // Contoh jumlah halaman, ganti dengan logika sesuai kebutuhan
    var totalPagesMobil = type === 'mobil' ? 7 : 0;
    var totalPagesMotor = type === 'motor' ? 7 : 0;
  
    // Bangun pagination untuk mobil
    for (var i = 1; i <= totalPagesMobil; i++) {
      var pageLink = document.createElement('a');
      pageLink.href = '?page=' + i; // Anda dapat menetapkan URL yang sesuai di sini jika diperlukan
      pageLink.textContent = i;
  
      // Tambahkan event listener untuk menanggapi klik pada setiap halaman
      pageLink.addEventListener('click', function (event) {
        event.preventDefault();
        var pageNumber = parseInt(event.target.textContent);
  
        // Ganti halaman berdasarkan nomor halaman yang diklik
        window.location.href = '?page=' + pageNumber;
      });
  
      paginationMobil.appendChild(pageLink);
    }
  
    // Bangun pagination untuk motor
    for (var j = 1; j <= totalPagesMotor; j++) {
      var pageLinkMotor = document.createElement('a');
      pageLinkMotor.href = '?page=' + j; // Anda dapat menetapkan URL yang sesuai di sini jika diperlukan
      pageLinkMotor.textContent = j;
  
      // Tambahkan event listener untuk menanggapi klik pada setiap halaman
      pageLinkMotor.addEventListener('click', function (event) {
        event.preventDefault();
        var pageNumberMotor = parseInt(event.target.textContent);
  
        // Ganti halaman berdasarkan nomor halaman yang diklik
        window.location.href = '?page=' + pageNumberMotor;
      });
  
      paginationMotor.appendChild(pageLinkMotor);
    }
  }
  
  // Panggil fungsi buildPagination saat halaman dimuat
  window.onload = function() {
    buildPagination('mobil'); // Atur sesuai dengan jenis produk awal
  };
