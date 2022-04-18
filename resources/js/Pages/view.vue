<template>
<div>
    <div class="fundo">
   <p class="barra">Nome da empresa</p>
  <div class="msg-container-envia" >
    <p v-for="mensagen in mensagenenvia">{{ mensagen.msg  }}</p>
        
  </div>
   <div class="msg-container-recebe"  v-for="mensagen in mensagenrecebe">
 
      {{ mensagen.msg }}
  </div>
   <form>
     <input type="text">
     <button @click.prevent="enviar" type="submit">Enviar</button>
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
 
};
</style>
<script>
export default {
data(){return{
  mensagenenvia:[
     { msg:'test5'},
      { msg:'test6'},
      { msg:'test7'},
      { msg:'test8'},
      { msg:'test9'},
  ],


  mensagenrecebe:[
     { msg:'test0'},
      { msg:'test1'},
      { msg:'test2'},
      { msg:'test3'},
      { msg:'test4'},
  ],
 }
}
}

</script>
