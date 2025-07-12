var typed = new Typed(".text", {
    strings: ["Front-End Developer", "Web Developer", "WordPress Developer", "Business Lawyer"],
    typeSpeed: 100,
    backSpeed: 100,
    backDelay: 1000,
    loop: true
});
document.getElementById('download-cv').addEventListener('click', function() {
  document.getElementById('cv-options').style.display = 'block';
});

document.addEventListener('click', function(event) {
  if (!event.target.closest('.cv-container')) {
    document.getElementById('cv-options').style.display = 'none';
  }
});

document.getElementById('download-both').addEventListener('click', function() {
  const link1 = document.createElement('a');
  link1.href = 'file/Gildas_Korabalo_Resume.docx.pdf';
  link1.download = 'Gildas_Korabalo_Resume.docx.pdf';
  link1.click();

  const link2 = document.createElement('a');
  link2.href = 'file/Gildas_pdf_CV (1).docx.pdf';
  link2.download = 'Gildas_pdf_CV (1).docx.pdf';
  link2.click();
});


// Attendre que le DOM soit chargé
document.addEventListener('DOMContentLoaded', function() {
  const profileContainer = document.querySelector('.profile-container');
  const circleAnimation = document.querySelector('.circle-animation');

  // Vérifier si les éléments existent
  if (!profileContainer || !circleAnimation) {
    console.error('Elements not found in DOM');
    return;
  }

  // Événement mousemove
  profileContainer.addEventListener('mousemove', (e) => {
    const rect = e.target.getBoundingClientRect();
    const x = e.clientX - rect.left;
    const y = e.clientY - rect.top;
    
    const centerX = rect.width / 2;
    const centerY = rect.height / 2;
    
    const angle = Math.atan2(y - centerY, x - centerX) * 180 / Math.PI;
    
    // Réinitialiser l'animation avant d'appliquer la rotation
    circleAnimation.style.animation = 'none';
    circleAnimation.style.transform = `rotate(${angle + 90}deg)`;
  });

  // Événement mouseleave
  profileContainer.addEventListener('mouseleave', () => {
    circleAnimation.style.animation = 'rotate 15s linear infinite';
    circleAnimation.style.transform = 'rotate(0deg)';
  });
});



document.getElementById('view-both').addEventListener('click', function(e) {
    e.preventDefault();
    window.open('file/Gildas_Korabalo_Resume.docx.pdf', '_blank');
    window.open('file/Gildas_pdf_CV (1).docx.pdf', '_blank');
});
