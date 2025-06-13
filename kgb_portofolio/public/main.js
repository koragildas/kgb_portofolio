var typed = new Typed(".text", {
    strings: ["Frontend Developer", "Web Developer", "WordPress Developer", "Business Lawyer"],
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

