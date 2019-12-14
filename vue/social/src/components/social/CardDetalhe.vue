<template>
  <span>

    <div v-if="img" class="card-image">
      <img :src="img">
      <span class="card-title">{{ titulo  || '' }}</span>
    </div>

    <div v-if="descricao" class="card-content">
      <p>{{ descricao }}</p>
    </div>

  </span>
</template>

<script>
export default {
  name: 'cardDetalhe',
  props: ['img', 'titulo', 'descricao']
}
</script>
<style>

</style>
