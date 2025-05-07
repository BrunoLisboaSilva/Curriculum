let menuIcon = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');
let sections = document.querySelectorAll('section');
let navLinks = document.querySelectorAll('header nav a');

window.onscroll = () => {
    sections.forEach(sec => {
        let top = window.scrollY;
        let offset = sec.offsetTop - 150;
        let height = sec.offsetHeight;
        let id = sec.getAttribute('id');

        if(top >= offset && top < offset + height){
            navLinks.forEach(links => {
                links.classList.remove('active');
                document.querySelector('header nav a[href*="' + id + '"]').classList.add('active')
            })
        }
    })
}

menuIcon.onclick = () => {
    menuIcon.classList.toggle('bx-x');
    navbar.classList.toggle('active');
}

const form = document.getElementById('formulario');
  const mensagemSucesso = document.getElementById('mensagemSucesso');

  form.addEventListener('submit', async function (e) {
    e.preventDefault();

    const dados = new FormData(form);
    const url = "https://formsubmit.co/ajax/bruno.lisboa.silva073@gmail.com"; 

    try {
      const response = await fetch(url, {
        method: "POST",
        body: dados,
        headers: {
          'Accept': 'application/json'
        }
      });

      const resultado = await response.json();

      
      if (resultado.message && response.status < 400) {
        form.reset();
        mensagemSucesso.style.display = "block";
        setTimeout(() => mensagemSucesso.style.display = "none", 5000);
      } else {
        alert("Algo deu errado, mas o e-mail pode ter sido enviado. Verifique sua caixa de entrada.");
        console.warn("Resposta inesperada:", resultado);
      }

    } catch (error) {
      alert("Erro ao conectar com o servidor.");
      console.error("Erro de conexão:", error);
    }
  });

  document.getElementById('Devlinks').addEventListener('click', function () {
    window.open('https://brunolisboasilva.github.io/ProjetoDevLinks/', '_blank');
  });