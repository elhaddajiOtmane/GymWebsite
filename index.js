// Image filtering functions

function showAll() {
  let galleryImage = document.getElementsByClassName("galleryImage");
  for (let i = 0; i < galleryImage.length; i++) {
		if (galleryImage[i].classList.contains('hide')) {
    	galleryImage[i].classList.remove('hide');
		} 
  }
}

function showNature() {
  let galleryImage = document.getElementsByClassName("galleryImage");
  for (let i = 0; i < galleryImage.length; i++) {
		if (galleryImage[i].classList.contains('art') || galleryImage[i].classList.contains('pets')) {
    	galleryImage[i].classList.add('hide');
		} else {
    	galleryImage[i].classList.remove('hide');
		}
  }
}

function showPets() {
  let galleryImage = document.getElementsByClassName("galleryImage");
  for (let i = 0; i < galleryImage.length; i++) {
		if (galleryImage[i].classList.contains('nature') || galleryImage[i].classList.contains('art')) {
    	galleryImage[i].classList.add('hide');
		} else {
    	galleryImage[i].classList.remove('hide');
		}
  }
}

function showArt() {
  let galleryImage = document.getElementsByClassName("galleryImage");
  for (let i = 0; i < galleryImage.length; i++) {
		if (galleryImage[i].classList.contains('nature') || galleryImage[i].classList.contains('pets')) {
    	galleryImage[i].classList.add('hide');
		} else {
    	galleryImage[i].classList.remove('hide');
		}
  }
}

// Nature Pop up 
let gallery = document.getElementById('gallery');
let popUp = document.getElementById('popUp');
let selectedImage = document.getElementById('selectedImage');
let imageIndexes = [1, 2, 3, 4, 5];
let selectedIndex = null;

imageIndexes.forEach((i) => {
  const image = document.createElement('img');
  // image.src = `images/nature-${i}.png`;
  image.src = `https://ik.imagekit.io/ceo/tr:w-600/nature-${i}.png`;
  image.alt = `Florida nature photo #${i}!`;
  image.classList.add('galleryImage');
  image.classList.add('nature');

  image.addEventListener('click', () => {
    popUp.style.transform = `translateY(0)`;
    // selectedImage.src = `images/nature-${i}.png`;
    selectedImage.src = `https://ik.imagekit.io/ceo/tr:w-1000/nature-${i}.png`;
    selectedImage.srcset = `
    https://ik.imagekit.io/ceo/tr:w-400/nature-${i}.png 400w,
    https://ik.imagekit.io/ceo/tr:w-800/nature-${i}.png 800w,
    https://ik.imagekit.io/ceo/tr:w-1200/nature-${i}.png 1200w`;
    selectedImage.alt = `Florida nature photo ${i}`;
  })

  gallery.appendChild(image);
});

// Pets Pop up
let imagePetsIndexes = [1, 2, 3];
let selectedPetsIndex = null;

imagePetsIndexes.forEach((i) => {
  const image = document.createElement('img');
  // image.src = `images/pets-${i}.png`;
  image.src = `https://ik.imagekit.io/ceo/tr:w-600/pets-${i}.png`;
  image.alt = `Pets (Macs and Cheeko) photo #${i}!`;
  image.classList.add('galleryImage');
  image.classList.add('pets');

  image.addEventListener('click', () => {
    popUp.style.transform = `translateY(0)`;
    // selectedImage.src = `images/pets-${i}.png`;
    selectedImage.src = `https://ik.imagekit.io/ceo/tr:w-1000/pets-${i}.png`;
    selectedImage.srcset = `
    https://ik.imagekit.io/ceo/tr:w-400/pets-${i}.png 400w,
    https://ik.imagekit.io/ceo/tr:w-800/pets-${i}.png 800w,
    https://ik.imagekit.io/ceo/tr:w-1200/pets-${i}.png 1200w`;
    selectedImage.alt = `Pets!`;
  })

  gallery.appendChild(image);
});

// Art Pop up
let imageArtIndexes = [1, 2, 3, 4];
let selectedArtIndex = null;

imageArtIndexes.forEach((i) => {
  const image = document.createElement('img');
  // image.src = `images/art-${i}.png`;
  image.src = `https://ik.imagekit.io/ceo/tr:w-600/art-${i}.png`;
  image.alt = `Photo #${i} of my random artwork!`;
  image.classList.add('galleryImage');
  image.classList.add('art');

  image.addEventListener('click', () => {
    popUp.style.transform = `translateY(0)`;
    // selectedImage.src = `images/art-${i}.png`;
    selectedImage.src = `https://ik.imagekit.io/ceo/tr:w-1000/art-${i}.png`;
    selectedImage.srcset = `
    https://ik.imagekit.io/ceo/tr:w-400/art-${i}.png 400w,
    https://ik.imagekit.io/ceo/tr:w-800/art-${i}.png 800w,
    https://ik.imagekit.io/ceo/tr:w-1200/art-${i}.png 1200w`;
    selectedImage.alt = `Art!`;
  })

  gallery.appendChild(image);
});

// Click out of the pop up
popUp.addEventListener('click' , () => {
  popUp.style.transform = `translateY(-100%)`;
  popUp.src = '';
  popUp.srcset = '';
  popUp.alt = '';
});

// Add active class to the selected button
let btnContainer = document.getElementById("btnContainer");
let btns = btnContainer.getElementsByClassName("btn");
for (let i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    let current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}

// ==================================
// SameSite Cookie and Service Worker
// ==================================

// Set a same-site cookie for first-party contexts
document.cookie = 'cookie1=value1; SameSite=Lax';
// Set a cross-site cookie for third-party contexts
document.cookie = 'cookie2=value2; SameSite=None; Secure';


if ("serviceWorker" in navigator) {
  // register service worker
  navigator.serviceWorker.register("service-worker.js");
}