<>

<style>
footer {
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 3vw; /* Altura do footer */
    color: white; /* Cor do texto */
    text-align: center; /* Centraliza o texto horizontalmente */
    line-height: 3vw; /* Centraliza o texto verticalmente */
    font-size: 1rem; /* Ajusta o tamanho da fonte */
     /* Dark mode colors and gradient */
  background: #121212; /* Fallback for browsers that don't support gradients */
  background: linear-gradient(
    135deg,
    #4a4a4a 25%,
    #5c5c5c 25%,
    #5c5c5c 50%,
    #4a4a4a 50%,
    #4a4a4a 75%,
    #5c5c5c 75%,
    #5c5c5c
  );
  background-size: 40px 40px;

  /* Animation */
  animation: move 4s linear infinite;
}

@keyframes move {
  0% {
    background-position: 0 0;
  }
  100% {
    background-position: 40px 40px;
  }
    }
</style>
<footer>
footer
</footer>
