<template>
<div>
    <div class="fundo">
   <p class="barra">Nome da empresa</p>
  <div class="msg-container-envia">
    <img src="assets/u.png">
    <p class="msg-envia">msg test</p>
    <br>
    <p class="msg-envia">msg test2</p>
  </div>
   <div class="msg-container-recebe">
    <img src="assets/t.png">
    <p class="msg-recebe">msg test</p>
  </div>
   <form>
     <input type="text">
     <button type="submit">Enviar</button>
   </form>
  </div>
</div>
</template>
<style scoped>
.fundo{
  height: 100%;
  width: 1200px;
  background-color: aqua;
}
.barra{
  background-color: gray;
}
.msg-container-envia{
  display: flex;
  justify-content: flex-start;

}
.msg-container-recebe{
  display: flex;
  justify-content: flex-end;

}
.msg-recebe{
  background-color: blue;
  
  
}
.msg-envia{
  
  background-color: blue;
 
}
</style>
