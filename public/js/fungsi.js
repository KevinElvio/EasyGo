
function pg(type) {
  // Ambil elemen dengan class "mobil", "motor", "car", dan "sepedah"
  var mobilBtn = document.querySelector('.mobil');
  var motorBtn = document.querySelector('.motor');
  var carElements = document.querySelectorAll('.car');
  var sepedahElements = document.querySelectorAll('.sepedah');

  // Reset kelas pada tombol
  mobilBtn.classList.remove('active');
  motorBtn.classList.remove('active');

  // Atur kelas yang aktif sesuai dengan tombol yang diklik
  if (type === 'mobil') {
    mobilBtn.classList.add('active');
    motorBtn.classList.remove('active');
    sepedahElements.forEach(function(sepedahElement) {
      sepedahElement.style.display = 'none';
    });
    carElements.forEach(function(carElement) {
      carElement.style.display = 'flex';
    });
  } else if (type === 'motor') {
    mobilBtn.classList.remove('active');
    motorBtn.classList.add('active');
    carElements.forEach(function(carElement) {
      carElement.style.display = 'none';
    });
    sepedahElements.forEach(function(sepedahElement) {
      sepedahElement.style.display = 'flex';
    });
  }
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
      mobilBtn.classList.add('active');
      motorBtn.classList.remove('active');
      sepedahElements.forEach(function(sepedahElement) {
        sepedahElement.style.display = 'none';
      });
      carElements.forEach(function(carElement) {
        carElement.style.display = 'flex';
      });
    } else if (type === 'motor') {
      mobilBtn.classList.remove('active');
      motorBtn.classList.add('active');
      carElements.forEach(function(carElement) {
        carElement.style.display = 'none';
      });
      sepedahElements.forEach(function(sepedahElement) {
        sepedahElement.style.display = 'flex';
      });
    }
  }
