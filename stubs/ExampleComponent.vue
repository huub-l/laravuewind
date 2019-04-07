<template>
  <div>
    <h1 class="text-center text-grey-dark mt-32">{{welcome}}</h1>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  },
  data() {
    return {
      welcome: "Laravuewind"
    };
  }
};
</script>