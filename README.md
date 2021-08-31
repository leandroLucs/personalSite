# AiryDev

<a href="https://airydev.com.br/#home">![image](https://user-images.githubusercontent.com/48057126/131555237-98d45448-f1fd-49ce-b970-b0491bfc1981.png)</a>



## 🚀 Tecnologias
<ul>
  <li>HTML</li>
  <li>CSS</li>
  <li>Javascript</li>
</ul>



## 💻 Objetivo
Este é um website desenvolvido como perfil profissional. Nele é possível ver um resumo profissional meu, bem como ter acesso a alguns dos meus projetos e informações de contato.

## 📚 Features
### ◼️ Mudança de temas (Dark and Light)
![image](https://user-images.githubusercontent.com/48057126/131557006-09ee3b27-e960-4777-9ce0-210954356e33.png)
####
### ◼️ Biblioteca Swiper para exibição dos meus trabalhos em Portfolio
![image](https://user-images.githubusercontent.com/48057126/131558013-20584811-ddc7-459b-b374-a4bd641dc480.png)
####
### ◼️ Biblioteca Scroll Reveal para exibição dos itens gradualmente de forma suave, com uma pequena transição
```js
const scrollReveal = ScrollReveal({
  origin: 'top',
  distance: '30px',
  duration: 700,
  reset: true
})

scrollReveal.reveal(
  `#home .text, #home .scroll-down,
  #about .title, #about .bio, #about .paragraph-1, #about .paragraph-2,
  #portfolio .text, .swiper-container,
  #contact .text, #contact .links, #contact form
  `,
  { interval: 100 }
)
```
### ◼️ Além disso, apresenta responsividade para os diversos dispositivos
![image](https://user-images.githubusercontent.com/48057126/131559653-3b12b7f1-46bf-4842-a236-cf76ecad0665.png)
