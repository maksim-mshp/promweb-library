<template>
  <h1>Homepage</h1>
</template>

<script>
export default {
  mounted() {
    if (this.$store.state.apiToken === "") {
      this.$router.push("/login");
    }
  }
};
</script>
