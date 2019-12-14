<template>
  <LoginTemplate>
    <span slot="menu-esquerdo">
      <img src="http://emdime.com.br/wp-content/uploads/2015/09/rede-social-pessoal-ou-profissional-550x328.png"
       alt="Social" class="responsive-img">
    </span>

    <span slot="principal">

        <h2>Cadastro</h2>
        <input type="text" placeholder="Nome" value ="">
        <input type="email" placeholder="Email" value ="">
        <input type="password" placeholder="Senha" value ="">
        <input type="password" placeholder="Confirme sua senha" value ="">
        <button type="button" name="button" class="btn">Enviar</button>
        <router-link class="btn orange" to="/login">Já tenho conta</router-link>

    </span>
  </LoginTemplate>
</template>

<script>
import LoginTemplate from '@/templates/LoginTemplate'

export default {
  name: 'Cadastri',
  data () {
    return {
    }
  },
  components: {
    LoginTemplate
  }
}
</script>

<style>

</style>
