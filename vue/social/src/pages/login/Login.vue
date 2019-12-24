<template>
  <LoginTemplate>
    <span slot="menu-esquerdo">
      <img src="http://emdime.com.br/wp-content/uploads/2015/09/rede-social-pessoal-ou-profissional-550x328.png"
       alt="Social" class="responsive-img">
    </span>

    <span slot="principal">

        <h2>Login</h2>
        <input type="email" placeholder="Email" v-model="usuario.email">
        <input type="password" placeholder="Senha" v-model="usuario.password">
        <button type="button" class="btn" v-on:click="login()">Entrar</button>
        <router-link class="btn orange" to="/cadastro">Cadastre-se</router-link>

    </span>
  </LoginTemplate>
</template>

<script>
import LoginTemplate from '@/templates/LoginTemplate'

export default {
  name: 'Login',
  data () {
    return {
      usuario: {
        email: '',
        password: ''
      }
    }
  },
  components: {
    LoginTemplate
  },
  methods: {

    login () {
      this.$http.post(this.$urlAPI + `login`, {
        email: this.usuario.email,
        password: this.usuario.password
      })
        .then(response => {
          if (response.data.token) {
            alert('Login com sucesso')
            sessionStorage.setItem('usuario', JSON.stringify(response.data))
            this.$router.push('/')
          } else if (response.data.status === false) {
            alert('Email ou senha inválidos.')
          } else {
            let erros = ''
            for (let erro of Object.values(response.data)) {
              erros += erro + ' '
            }
            alert(erros)
          }
        })
        .catch(e => {
          alert('Falha com a comunicação com o servidor')
        })
    }
  }
}
</script>

<style>

</style>
