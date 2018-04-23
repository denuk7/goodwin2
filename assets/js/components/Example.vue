<div class="modal">
  <div class="modal-background"></div>
  <div class="modal-content">
    <!-- Any other Bulma elements you want -->
  </div>
  <button class="modal-close is-large" aria-label="close" @click="$emit('close')"></button>
</div>

<script>
    export default {
        name: "example"
    }
</script>

<style scoped>

</style>