<template>
  <nav :class="cor || 'blue darken-1'">
    <div class="nav-wrapper container">
    <router-link :to="url || '/'" target="" class="brand-logo">{{ logo || 'ESCOLA' }}</router-link>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
      <slot  />
    </ul>
    </div>
  </nav>
</template>

<script>
export default {
  name: 'NavBar',
  props: ['logo', 'url', 'cor'],
  data () {
    return {

    }
  }
}
</script>

<style>

</style>
