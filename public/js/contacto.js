// === CANVAS DE FONDO ===
const canvas = document.getElementById('skullCanvas');
const ctx = canvas.getContext('2d');
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

function drawSkull() {
  ctx.clearRect(0, 0, canvas.width, canvas.height);
  ctx.strokeStyle = 'rgba(255, 255, 255, 0.05)';
  ctx.lineWidth = 2;

  const centerX = canvas.width / 2;
  const centerY = canvas.height / 2;

  // Contorno del cráneo
  ctx.beginPath();
  ctx.arc(centerX, centerY, 100, 0, Math.PI * 2);
  ctx.stroke();

  // Ojos
  ctx.beginPath();
  ctx.arc(centerX - 30, centerY - 20, 20, 0, Math.PI * 2);
  ctx.arc(centerX + 30, centerY - 20, 20, 0, Math.PI * 2);
  ctx.stroke();
}

drawSkull();

window.addEventListener('resize', () => {
  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;
  drawSkull();
});

// === FORMULARIO DE CONTACTO ===
document.getElementById('contactForm').addEventListener('submit', (e) => {
  e.preventDefault();

  const form = e.target;
  const successMsg = document.getElementById('successMessage');

  successMsg.classList.add('show');
  form.reset();

  setTimeout(() => {
    successMsg.classList.remove('show');
  }, 5000);
});
