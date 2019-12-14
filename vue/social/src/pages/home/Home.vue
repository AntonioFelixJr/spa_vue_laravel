<template>
  <SocialTemplate>

    <span slot="menuesquerdo">
      <div class="row valign-wrapper">
        <Grid tamanho="4">
          <img src="https://materializecss.com/images/yuna.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
        </Grid>
        <Grid tamanho="8">
          <span class="black-text">
            <h5>Maria</h5>
            Add the "circle" class to it to make it appear circular.
          </span>
        </Grid>
      </div>
    </span>

    <span slot="principal">
      <InputPost />

      <CardConteudo
        perfil="https://materializecss.com/images/yuna.jpg"
        nome="Maria Silva"
        data="10/10/2019 13:20">

      <CardDetalhe titulo="Primeiro Post!"
        img="https://materializecss.com/images/sample-1.jpg"
        descricao="Este é o primeiro post desta incrivel rede social" />

    </CardConteudo>
    </span>

  </SocialTemplate>
</template>

<script>
import CardConteudo from '@/components/social/CardConteudo'
import CardDetalhe from '@/components/social/CardDetalhe'
import InputPost from '@/components/social/InputPost'
import SocialTemplate from '@/templates/SocialTemplate'

export default {
  name: 'Home',
  data () {
    return {
    }
  },
  components: {
    CardConteudo,
    CardDetalhe,
    InputPost,
    SocialTemplate
  }
}
</script>
